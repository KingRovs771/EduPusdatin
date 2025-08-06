<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $title = "Edu Pusdatin | Mata Pelajaran";
        return view("admin.mapel.MapelPage", compact('title'));
    }

    public function formInput(){
        $title = "Edu Pusdatin | Form Input Mapel";
        return view("admin.mapel.forms.FormInputs", compact('title'));
    }
}
