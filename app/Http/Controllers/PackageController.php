<?php

namespace App\Http\Controllers;

use App\Models\Banquet;
use Illuminate\Http\Request;

class PackageController extends Controller
{


    public function show($id)
    {
        $banquet = Banquet::findOrFail($id);
        $related = Banquet::where('place', $banquet->place)->get();
        return view('packages.show', compact('banquet', 'related'));
    }



    public function premium()
    {
        // $banquets = Banquet::where('banquet_type', 'Premium')->with('banquetService')->get();
        $banquetType = 'Premium';
        return view('packages.index', compact('banquetType'));
    }



    public function economic()
    {
        // $banquets = Banquet::where('banquet_type', 'Economic')->with('banquetService')->get();
        $banquetType = 'Economic';
        return view('packages.index', compact('banquetType'));
    }



    public function basic()
    {
        // $banquets = Banquet::where('banquet_type', 'Basic')->with('banquetService')->get();
        $banquetType = 'Basic';
        return view('packages.index', compact('banquetType'));
    }


    public function search(Request $request)
    {
        $search = ucwords($request->s);

        $banquetsName = Banquet::where('name', 'like', '%' . $search . '%')->withCount('reviews')->get();
        $banquetsPlace = Banquet::where('place', 'like', '%' . $search . '%')->withCount('reviews')->get();
        $banquetsAddress = Banquet::where('address', 'like', '%' . $search . '%')->withCount('reviews')->get();

        $collection = collect([$banquetsName, $banquetsPlace, $banquetsAddress]);
        $collapsed = $collection->collapse();
        $banquets = $collapsed->unique('id');
        return view('packages.search', compact('banquets', 'search'));
    }
}
