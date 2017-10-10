<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //Регистрация
  public function signup() {
      $title = 'Регистрация';
      return view('signup')->with('title',$title);
  }
    //Авторизация
  public function signin() {
      $title = 'Авторизация';
      return view('signin')->with('title',$title);
  }
}
