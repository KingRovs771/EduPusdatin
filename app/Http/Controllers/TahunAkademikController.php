<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    public function index(){
        $title = "Edu Pusdatin | Academic Year";
        return view("admin.academic_year.AcademicPage", compact('title'));
    }

    public function formInput(){
        $title = "Edu Pusdatin | Form Academic Year";
        return view("admin.academic_year.Forms.FormInputs", compact('title'));
    }

}
