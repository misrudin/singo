<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
     public function showDetail($id)
            {
                return view('detail', ['name' => $id]);
            }

     public function showDocument($id)
             {
                return view('document', ['name' => $id]);
             }
}
