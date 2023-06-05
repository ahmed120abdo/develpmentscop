<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('layouts/app');
    }
    public function getAbout(){
        $first = "Ahmed";
        $last  = "Abdelrahman";
        $fullname  = $first . " " . $last;
        $email = "ahmed.abdo455@gmail.com";
        $data = ["name" => "Ali", "last" => "Sayed", "email" => "saif.sayed447@gmail.com"];
        // return view('pages/about')->withFullname($fullname)->withEmail($email);
        return view('pages/about')->withData($data);
    }
    public function getContact(){
        return view('pages/contact');
    }
    // public function postContact(){

    // }
}

