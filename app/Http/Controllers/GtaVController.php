<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GtaVController extends Controller
{
        //gtav_info.blade
    public function gtav_info() {
        $title = 'GTA V информация';
        return view('gtav_info')->with('title',$title);
    }

    //gtav_city.blade
    public function gtav_city() {
        $title = 'GTA V город';
        return view('gtav_city')->with('title',$title);
    }

    public function gtav_sist() {
        $title = 'GTA V системные требования';
        return view('gtav_sist')->with('title',$title);
    }
}
