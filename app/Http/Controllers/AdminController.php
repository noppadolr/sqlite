<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
//        $users = User::all();
        return view('backend.admin.dashboard');
    }
    //End methos


}
