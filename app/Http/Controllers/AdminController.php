<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('user_type', '!=', 'DEV')->withCount('reviews')->withCount('booking')->get();
        // return $users;
        return view('admin.users', compact('users'));
    }
    public function userDetails($id)
    {
        $user = User::findOrfail($id);

        if ($user->user_type == 'DEV') {
            return abort(404);
        }
        // return $user->reviews;
        return view('admin.user-details', compact('user'));
    }
}
