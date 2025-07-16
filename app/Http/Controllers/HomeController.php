<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view("index");
  }
  public function logo()
  {
    return view('logo.index');
  }
  public function website()
  {
    return view('website.index');
  }
  public function digitalmarketing()
  {
    return view('digitalmarketing.index');
  }
 
  public function portfolio()
  {
    return view('portfolio.index');
  }
  public function contact()
  {
    return view('contact.index');
  }
  public function about()
  {
    return view('about.index');
  }
  public function clientreview()
  {
    return view('clientreview.index');
  }
  public function refund()
  {
    return view('refund.index');
  }
  public function privacypolicy()
  {
    return view('privacypolicy.index');
  }
  public function termandcondination(){
    return view('termandcondination.index');
  }
  public function mobileapp(){
    return view('mobileapp.index');
  }
  public function price(){
    return view('price.index');
  }
}
