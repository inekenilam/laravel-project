<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function Show(){
    return 'Selamat datang ';
  }
  public function create(){
    return 'selamat datang di alam ghaib';
  }
}
   