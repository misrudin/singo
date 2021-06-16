<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    //
    public function index($id)
    {
        return view('publikasi', ['name' => $id]);
    }
}
