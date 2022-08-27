<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCTVCOntroller extends Controller
{
    public function index()
    {
        return view('prduct', ['title' => '']);
    }
}
