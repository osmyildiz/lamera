<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Category;
use App\Models\contact;
use App\Models\gallery;
use App\Models\menu;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function root()
    {

        return view('admin.index');

    }
    public function home()
    {

        return view('admin.index');

    }


}
