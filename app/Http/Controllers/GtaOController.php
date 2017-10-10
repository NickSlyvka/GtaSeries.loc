<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GtaOController extends Controller
{
    public function gtao_info() {
        $title = 'GTA ONLINE информация';
        return view('gtao_info')->with('title',$title);
    }

    public function gtao_pers() {
        $title = 'GTA ONLINE персонажи';
        return view('gtao_pers')->with('title',$title);
    }

    public function gtao_heist() {
        $title = 'GTA HEIST';
        return view('gtao_heist')->with('title',$title);
    }
}
