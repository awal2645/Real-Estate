<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendViewController extends Controller
{
    // this is home page Controller
    public function homePage(){
        return view('home');
    }
     // this is about page Controller
    public function aboutPage(){
        return view('about');
    }
    // this is testimonial page Controller
    public function testimonialPage(){
        return view('testimonial');
    }
    // this is contact page Controller
    public function contactPage(){
        return view('contact');
    }
    // this is property-list page Controller
    public function propertyListPage(){
        return view('property-list');
    }
     // this is property-type page Controller
    public function propertyTypePage(){
        return view('property-type');
    }
     // this is property-agent page Controller
    public function propertyAgentPage(){
        return view('property-agent');
    }
      // this is error 404 page Controller
      public function errorPage(){
        return view('error');
    }
}
