<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahProfileController extends Controller
{
    //
    public function index(){
        $title = "Edu Pusdatin | Dashboard Web";
        return view("admin.profile_school.index", compact('title'));
    }

    public function academicYear(){
        $title = "Edu Pusdatin | Academic Year Web";
        return view("admin.profile_school.academicyear", compact('title'));
    }

    public function mata_pelajaran(){
        $title = "Edu Pusdatin | Mata Pelajaran Web";
        return view("admin.profile_school.mapel", compact('title'));
    }
}
