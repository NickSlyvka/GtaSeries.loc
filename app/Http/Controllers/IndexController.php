<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        //Главная страница
    public function index() {
      $title = 'GtaSeries';
      return view('main_page')->with('title',$title);
    }

}
