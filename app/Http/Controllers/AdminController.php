<?php

namespace App\Http\Controllers;

use App\Models\Banquet;
use App\Models\BanquetBook;
use App\Models\Review;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('user_type', '!=', 'DEV')->withCount('reviews')->withCount('booking')->get();
        $bookings = BanquetBook::with('user')->with('banquet')->get();
        $reviews = Review::with('user')->with('banquet')->get();
        return view('admin.users', compact('users', 'bookings', 'reviews'));
    }
    public function userDetails($id)
    {
        $user = User::findOrfail($id);

        if ($user->user_type == 'DEV') {
            return abort(404);
        }
        return view('admin.user-details', compact('user'));
    }
    public function banquets()
    {
        $banquets = Banquet::with('banquetService')->with('booking')->with('reviews')->get();
        return view('admin.banquets', compact('banquets'));
    }
}
