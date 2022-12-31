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
