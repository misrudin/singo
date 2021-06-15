<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    // public function index()
    // {
    //     return view ('document');
    // }
    //  public function showDetail($id)
    // {
    //     return view('detail', ['name' => $id]);
    // }
      public function showDetail($id)
            {
                return view('detail', ['name' => $id]);
            }
}
