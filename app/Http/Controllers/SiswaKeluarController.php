<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaKeluarController extends Controller
{
    //
    public function index(){
        $title = "Edu Pusdatin | Dashboard Web";
        return view("admin.dashboard", compact('title'));
    }
}
