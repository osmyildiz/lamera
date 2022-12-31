<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MailController;
use App\Models\About;
use App\Models\applicant;
use App\Models\Artist;
use App\Models\Book_artist;
use App\Models\BookArtistPage;
use App\Models\Bookoriartistpage;
use App\Models\Category;
use App\Models\contact;
use App\Models\Field;
use App\Models\gallery;
use App\Models\Hello;
use App\Models\Join;
use App\Models\JoinPage;
use App\Models\menu;
use App\Models\Offer_artist;
use App\Models\Offer_client;
use App\Models\Package;
use App\Models\Package_item;
use App\Models\Photo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Whoweare;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function root()
    {
        return view('home');
    }

    public function homepage()
    {
        $sliders = Slider::where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();
        $menus=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();
        $menu_brunch=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',1)
            ->orderBy('priority','ASC')
            ->get();
        $menu_lunch=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',2)
            ->orderBy('priority','ASC')
            ->get();
        $menu_sand=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',3)
            ->orderBy('priority','ASC')
            ->get();
        $menu_kids=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',4)
            ->orderBy('priority','ASC')
            ->get();
        $menu_panc=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',5)
            ->orderBy('priority','ASC')
            ->get();
        $menu_category=category::orderBy('id','ASC')
            ->get();
        $place=gallery::where('is_active',1)
            ->where('category_id',2)
            ->orderBy('priority','ASC')
            ->limit(6)
            ->get();
        $food=gallery::where('is_active',1)
            ->where('category_id',1)
            ->orderBy('priority','ASC')
            ->limit(6)
            ->get();
        $testimonials=testimonial::where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();
        $foods = $food->merge($place);
        //echo"<pre>";
        //print_r($result);
        //echo"<pre>";
        //die();

        return view('home',compact('sliders','menus','menu_brunch','menu_lunch','menu_sand','menu_kids','menu_panc','menu_category','food','foods','place','testimonials'));


    }
    public function about()
    {
        $about = About::find(1);
        $testimonials=testimonial::where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();


        return view('about',compact('about','testimonials'));


    }
    public function menu()
    {
        $about = About::find(1);
        $menus=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();
        $menu_brunch=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',1)
            ->orderBy('priority','ASC')
            ->get();
        $menu_lunch=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',2)
            ->orderBy('priority','ASC')
            ->get();
        $menu_sand=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',3)
            ->orderBy('priority','ASC')
            ->get();
        $menu_kids=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',4)
            ->orderBy('priority','ASC')
            ->get();
        $menu_panc=menu::selectRaw('categories.name as category_name,menus.*')
            ->join('categories', 'categories.id', '=', 'menus.category_id')
            ->where('is_active',1)
            ->where('category_id',5)
            ->orderBy('priority','ASC')
            ->get();
        $menu_category=category::orderBy('id','ASC')
            ->get();



        return view('menu',compact('about','menus','menu_brunch','menu_lunch','menu_sand','menu_kids','menu_panc','menu_category'));


    }
    public function contact()
    {
        $contact = contact::find(1);


        return view('contact',compact('contact'));


    }
    public function booking()
    {
        $about = About::find(1);
        $testimonials=testimonial::where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();


        return view('booking',compact('about','testimonials'));


    }


}
