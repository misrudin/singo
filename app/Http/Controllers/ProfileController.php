<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile($id)
        {
            return view('profile', ['name' => $id]);
        }
}