<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Guest;

class StaticPagesController extends Controller
{
  public function home()
  {
      $partners = Partner::all();
      $guests = Guest::all();
      return view(
        'static_pages/home',
        ['partners'=>$partners],
        ['guests'=>$guests]
      );
  }

  public function out()
  {
      return view('static_pages/out');
  }

  public function about()
  {
      return view('static_pages/about');
  }

  public function join()
  {
      return view('static_pages/join');
  }
}
