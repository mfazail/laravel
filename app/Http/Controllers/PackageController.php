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
        $banquets = Banquet::where('banquet_type', 'Premium')->get();
        return view('packages.index', compact('banquets'));
    }



    public function economic()
    {
        $banquets = Banquet::where('banquet_type', 'Economic')->get();
        return view('packages.index', compact('banquets'));
    }



    public function basic()
    {
        $banquets = Banquet::where('banquet_type', 'Basic')->get();
        return view('packages.index', compact('banquets'));
    }


    public function search(Request $request)
    {
        $search = $request->s;
        $banquetsName = Banquet::where('name', 'like', '%' . $search . '%')->get();
        $banquetsPlace = Banquet::where('place', 'like', '%' . $search . '%')->get();
        $banquetsAddress = Banquet::where('address', 'like', '%' . $search . '%')->get();

        $collection = collect([$banquetsName, $banquetsPlace, $banquetsAddress]);
        $collapsed = $collection->collapse();
        $banquets = $collapsed->unique('id');
        return view('packages.search', compact('banquets', 'search'));
    }
}
