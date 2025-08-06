<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index(){
        $title = "Edu Pusdatin | Dashboard Web";
        return view("admin.ekstrakulikuler.EkstrakulikulerPage", compact('title'));
    }

    public function formInput(){
        $title = "Edu Pusdatin | Dashboard Web";
        return view("admin.ekstrakulikuler.forms.FormInputEkstrakulikuler", compact('title'));
    }
}
