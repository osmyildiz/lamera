<?php

namespace App\Http\Controllers;


use App\Models\about;
use App\Models\category;
use App\Models\contact;
use App\Models\Form;
use App\Models\gallery;
use App\Models\menu;
use App\Models\Seo;
use App\Models\slider;
use App\Models\Subscriber;
use App\Models\testimonial;
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
        $sliders = slider::where('is_active',1)
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

        $seo = Seo::find(1);
        $keywords = explode(',', $seo->keywords);

        SEOMeta::setTitle($seo->title,false);
        SEOMeta::setDescription($seo->description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($seo->description);
        OpenGraph::setTitle($seo->title);
        OpenGraph::setUrl($seo->title);
        OpenGraph::addProperty('type', $seo->property);

        TwitterCard::setTitle($seo->title);
        TwitterCard::setSite($seo->twitter_name);

        JsonLd::setTitle($seo->title);
        JsonLd::setDescription($seo->description);
        JsonLd::addImage('https://lamerabistro.com/'.$seo->logo_url);


        return view('home',compact('sliders','menus','menu_brunch','menu_lunch','menu_sand','menu_kids','menu_panc','menu_category','food','foods','place','testimonials'));


    }
    public function about()
    {
        $about = About::find(1);
        $testimonials=testimonial::where('is_active',1)
            ->orderBy('priority','ASC')
            ->get();
        $seo = Seo::find(2);
        $keywords = explode(',', $seo->keywords);

        SEOMeta::setTitle($seo->title,false);
        SEOMeta::setDescription($seo->description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($seo->description);
        OpenGraph::setTitle($seo->title);
        OpenGraph::setUrl($seo->title);
        OpenGraph::addProperty('type', $seo->property);

        TwitterCard::setTitle($seo->title);
        TwitterCard::setSite($seo->twitter_name);

        JsonLd::setTitle($seo->title);
        JsonLd::setDescription($seo->description);
        JsonLd::addImage('https://lamerabistro.com/'.$seo->logo_url);



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
        $seo = Seo::find(3);
        $keywords = explode(',', $seo->keywords);

        SEOMeta::setTitle($seo->title,false);
        SEOMeta::setDescription($seo->description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($seo->description);
        OpenGraph::setTitle($seo->title);
        OpenGraph::setUrl($seo->title);
        OpenGraph::addProperty('type', $seo->property);

        TwitterCard::setTitle($seo->title);
        TwitterCard::setSite($seo->twitter_name);

        JsonLd::setTitle($seo->title);
        JsonLd::setDescription($seo->description);
        JsonLd::addImage('https://lamerabistro.com/'.$seo->logo_url);



        return view('menu',compact('about','menus','menu_brunch','menu_lunch','menu_sand','menu_kids','menu_panc','menu_category'));


    }
    public function contact()
    {
        $contact = contact::find(1);

        $seo = Seo::find(4);
        $keywords = explode(',', $seo->keywords);

        SEOMeta::setTitle($seo->title,false);
        SEOMeta::setDescription($seo->description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($seo->description);
        OpenGraph::setTitle($seo->title);
        OpenGraph::setUrl($seo->title);
        OpenGraph::addProperty('type', $seo->property);

        TwitterCard::setTitle($seo->title);
        TwitterCard::setSite($seo->twitter_name);

        JsonLd::setTitle($seo->title);
        JsonLd::setDescription($seo->description);
        JsonLd::addImage('https://lamerabistro.com/'.$seo->logo_url);

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
    public function add_send_contact_form(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required',                        // just a normal required validation
            'email' => 'required|email',     // required and must be unique in the ducks table
            'phone' => 'required',
            'subject' => 'required',          // required and has to match the password field
            'message' => 'required',          // required and has to match the password field

        ],
            [
                'name.required' => 'Name is required.',                        // just a normal required validation
                'email.required' => 'Email address is required.',     // required and must be unique in the ducks table
                'email.email' => 'Enter a valid email address.',     // required and must be unique in the ducks table
                'phone.required' => 'Phone is required.',
                'subject.required' => 'Subject is required.',          // required and has to match the password field
                'message.required' => 'Message is required.',          // required and has to match the password field
            ]
        );


        //$check_mail = Form::where('email', $request->email)->first();
        //if ($check_mail) {
        //    return redirect()->back()->with('danger', 'Email address already subscribed.');
        //    //return back()->with('danger', 'Bu email ile daha önce kayıt olunmuş. Lütfen farklı bir email ile deneyiniz!');
        //}
        $form = new Form();
        $form->name = $request->name;
        $form->subject = $request->subject;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->message = $request->message;
        $save = $form->save();

        $data = [
            'subject1' => 'Contact Form',
            'email1' => $request->email,
            'email' => "osmyildiz@gmail.com",
            'name' => $request->name,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message1' => $request->message,
        ];


        Mail::send('emailcontact', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        if($save){

            return redirect()->back()->with(['message' => "Thank you,We've received your message. Someone from our team will contact you soon.", 'alert' => 'success']);

        }
        return redirect()->back()->with(['message' => 'An unexpected error has occurred. Please try again.!', 'alert' => 'danger']);

    }
    public function add_subscriber(Request $request)
    {
        $validator = $request->validate([
                                            // just a normal required validation
            'footeremail' => 'required|unique:subscribers,email'.$request->id,     // required and must be unique in the ducks table
                                            // required and has to match the password field

        ],
            [
                                     // just a normal required validation
                'footeremail.required' => 'Email address is required.',     // required and must be unique in the ducks table
                'footeremail.email' => 'Enter a valid email address.',     // required and must be unique in the ducks table
                'footeremail.unique' => 'Email address already subscribed.',
                        // required and has to match the password field
            ]
        );


        //$check_mail = Form::where('email', $request->email)->first();
        //if ($check_mail) {
        //    return redirect()->back()->with('danger', 'Email address already subscribed.');
        //    //return back()->with('danger', 'Bu email ile daha önce kayıt olunmuş. Lütfen farklı bir email ile deneyiniz!');
        //}
        $form = new Subscriber();
        $form->email = $request->footeremail;
        $save = $form->save();

        $data = [
            'email1' => $request->footeremail,
            'email' => "osmyildiz@gmail.com",
            'subject' => "New Subscriber",
        ];


        Mail::send('emailsubscriber', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        if($save){
            return redirect(url()->previous() .'#footer')
                ->with(['message' => "Welcome to Lamera Bistro. We're so glad you've joined us.", 'alert' => 'success']);


            //return redirect()->back()->with(['message' => "Welcome to Lamera Bistro. We're so glad you've joined us.", 'alert' => 'success'])->with('footer', 'success');

        }
        return redirect(url()->previous() .'#footer')->
            with(['message' => 'An unexpected error has occurred. Please try again.!', 'alert' => 'danger']);

        //return redirect()->back()->with(['message' => 'An unexpected error has occurred. Please try again.!', 'alert' => 'danger'])->with('footer', 'success');

    }


}
