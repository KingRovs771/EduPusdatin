<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahProfileController extends Controller
{
    //
    public function index(){
        $title = "Edu Pusdatin | Dashboard Web";
        return view("admin.profile_school.data_school", compact('title'));
    }

}
