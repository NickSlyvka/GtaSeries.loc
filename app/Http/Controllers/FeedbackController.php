<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback() {
        $title = 'Обратная связь';
        return view('feedback')->with('title',$title);
    }
        //about.blade.php
    public function about() {
        $title = 'О нас';
        return view('about')->with('title',$title);
    }
}
