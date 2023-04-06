<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310025;
        $students[] = array("npm"=>212310014, "name"=>"Frila Cahya Wardani", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310021, "name"=>"Cindy Kevina", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310054, "name"=>"Hera Sepuh", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310010, "name"=>"Adit Ketuaan", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm"=>212310015, "name"=>"Naga Gembel", "gender"=>"M", "alamat"=>"Bogor");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
