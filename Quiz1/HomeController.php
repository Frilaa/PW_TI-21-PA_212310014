<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310014;
        $students[] = array("npm"=>212310014, "name"=>"Frila Cahya Wardani", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310021, "name"=>"Cindy Kevina", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310054, "name"=>"Hera Sepuh", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310010, "name"=>"Adit Ketuaan", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310015, "name"=>"Naga Gembel", "gender"=>"M", "alamat"=>"Bogor");
        $data['students'] = $students;
        return view('modules.home')->with("data",$data);
    }
}
