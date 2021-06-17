<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index($id)
    {
        return view('publikasi', ['name' => $id]);
    }

    public function detail($id, $publikasi_id)
    {
        return view('publikasi-detail', ['name' => $id, 'id' => $publikasi_id]);
    }
}
