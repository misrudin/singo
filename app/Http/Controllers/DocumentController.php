<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index($id)
    {
        return view('document', ['name' => $id, 'className' => 'footer m-0']);
     }
}
