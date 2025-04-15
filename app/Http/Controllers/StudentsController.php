<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        $title = "Edu Pusdatin | Peserta Didik Web";
        return view("admin.students.pesertadidik", compact('title'));
    }
}
