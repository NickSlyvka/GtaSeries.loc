<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gta4Controller extends Controller
{
        //gta4_info.blade.php
    public function gta4_info() {
        $title = 'GTA 4 информация';
        return view('gta4_info')->with('title',$title);
    }
        //gta4_pers.blade.php
    public function gta4_pers() {
        $title = 'GTA 4 персонажи';
        return view('gta4_pers')->with('title',$title);
    }
        //gta4_pers.blade.php
    public function gta4_eflc() {
        $title = 'GTA 4 EFLC';
        return view('gta4_eflc')->with('title',$title);
    }
}
