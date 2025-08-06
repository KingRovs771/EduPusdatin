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

    public function formInputSiswa(){
        $title = "Edu Pusdatin | Form Input Siswa";
        return view("admin.students.forms.formInputSiswa", compact('title'));
    }

    public function formImportSiswa(){
        $title = "Edu Pusdatin | Form Import Siswa";
        return view("admin.students.forms.formImportSiswa", compact('title'));
    }
}
