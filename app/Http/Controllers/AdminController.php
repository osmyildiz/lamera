<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Form;
use App\Models\Gallery;
use App\Models\Gallery_category;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Subscriber;
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
    public function contact()
    {
        $record = Contact::find(1);
        $slider = slider::where('is_active',1)
            ->where('page_name','contact')
            ->first();
        return view('admin.contact',compact('record','slider'));

    }
    public function contact_update(Request $request)
    {
        $record =  Contact::find(1);
        $record->phone = $request->phone;
        $record->address = $request->address;
        $record->email = $request->email;
        $record->instagram = $request->instagram;
        $record->facebook = $request->facebook;
        $record->twitter = $request->twitter;
        $record->linkedin = $request->linkedin;
        $record->work_day1 = $request->work_day1;
        $record->work_day2 = $request->work_day2;
        $record->work_day3 = $request->work_day3;
        $record->work_day1_hours = $request->work_day1_hours;
        $record->work_day2_hours = $request->work_day2_hours;
        $record->work_day3_hours = $request->work_day3_hours;
        $save = $record->save();
        $slider=slider::find(6);
        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/img/"), $imageName);
            $slider->img = "/assets1/img/".$imageName;
            $slider->save();
        }

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function contactforms()
    {
        $records = Form::orderBy('id','DESC')->get();

        return view('admin.contactforms',compact('records'));

    }
    public function subscribers()
    {
        $records = Subscriber::orderBy('id','DESC')->get();

        return view('admin.subscribers',compact('records'));

    }
    public function bookings()
    {
        $records = Booking::orderBy('id','DESC')->get();

        return view('admin.bookings',compact('records'));

    }
    public function about()
    {
        $record = About::find(1);
        $slider = slider::where('is_active',1)
            ->where('page_name','about')
            ->first();
        return view('admin.about',compact('record','slider'));

    }
    public function about_update(Request $request)
    {
        $record =  About::find(1);
        $record->yellow_title = $request->yellow_title;
        $record->title = $request->title;
        $record->content1 = $request->content1;
        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/img/"), $imageName);
            $record->img = "/assets1/img/".$imageName;
        }
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();
            $request->img1->move(public_path("/assets1/img/"), $imageName);
            $record->img1 = "/assets1/img/".$imageName;

        }
        $record->box1_title = $request->box1_title;
        $record->box2_title = $request->box2_title;
        $record->box3_title = $request->box3_title;
        $record->box1_content = $request->box1_content;
        $record->box2_content = $request->box2_content;
        $record->box3_content = $request->box3_content;
        $record->created_at = date('Y-m-d H:i:s');
        $record->updated_at = date('Y-m-d H:i:s');
        $save = $record->save();
        $slider = slider::where('is_active',1)
            ->where('page_name','about')
            ->first();
        if($request->hasFile('slider_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->slider_img->extension();
            $request->slider_img->move(public_path("/assets1/img/"), $imageName);
            $slider->slider_img = "/assets1/img/".$imageName;
            $slider->save();
        }

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

    public function testimonial()
    {
        $records = Testimonial::get();

        return view('admin.testimonial',compact('records'));

    }

    public function add_testimonial(Request $request)
    {
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $slider = new Testimonial();
        $slider->name = $request->name;
        $slider->title = $request->title;
        $slider->comment = $request->comment;
        $slider->is_active = $is_active;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $slider->img = "/assets1/images/".$imageName;
        }


        $save = $slider->save();

        if($save){
            return back()->with('success', 'New record has been added.');
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function testimonial_edit($id)
    {
        $record = Testimonial::find($id);

        return view('admin.testimonial-edit',compact('record'));

    }
    public function testimonial_update(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $record =  Testimonial::find($id);

        $record->name = $request->name;
        $record->title = $request->title;
        $record->comment = $request->comment;
        $record->is_active = $is_active;
        $record->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $record->img = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function testimonial_delete($id)
    {
        $res = Testimonial::destroy($id);


        if($res){
            return back()->with('success', 'Selected record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }

    public function slider()
    {
        $sliders = Slider::orderBy('priority','ASC')->get();

        return view('admin.slider',compact('sliders'));

    }
    public function add_slider(Request $request)
    {
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        if($request->is_video=="on"){
            $is_video =1;
        }else{
            $is_video =0;
        }
        $slider = new Slider();
        $slider->yellow_title = $request->yellow_title;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->is_active = $is_active;
        $slider->page_name = "home";
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $slider->img = "/assets1/images/".$imageName;
        }


        $save = $slider->save();

        if($save){
            return back()->with('success', 'New slider has been added.');
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function slider_edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider-edit',compact('slider'));

    }
    public function slider_update(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        if($request->is_video=="on"){
            $is_video =1;
        }else{
            $is_video =0;
        }
        $slider =  Slider::find($id);

        $slider->uptitle = $request->yellow_title;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->is_active = $is_active;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $slider->img = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $slider->save();

        if($save){
            return back()->with('success', 'The slider has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function slider_delete($id)
    {
        $res = Slider::destroy($id);


        if($res){
            return back()->with('success', 'Selected slider has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }

    public function admin_photos(Request $request)
    {

            $kategori_all = Gallery_category::where('is_active',1)->orderBy('name','ASC')->get();

                $photo_all = Gallery::
                    join('gallery_categories', 'gallery_categories.id', '=', 'galleries.category_id')
                    ->select('gallery_categories.name','galleries.*')
                    ->orderBy('galleries.category_id','ASC')->paginate(30);

                return view('admin.admin-photos',compact('photo_all','kategori_all'));



    }
    public function add_photos(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if($request->category ==0){


            return back()->with('danger', 'Please select category');

        }
        $priority=Gallery::selectRaw('max(priority) as pri')->get();
        $pri = $priority[0]->pri;


        if($files = $request->file('image')){


            foreach($files as $key=>$file){
                $id = mt_rand(100, 999);
                $name = $id.'_'.time().'.'.$file->extension();
                $file->move(public_path('/assets1/img/gallery/'), $name);
                $url = "/assets1/img/gallery/".$name;
                $save=Gallery::insert([
                    'url' => $url,
                    'category_id' => $request->category,
                    'is_active' => 1,
                    'priority' => $key+1+$pri,
                    'created_at'=>date('Y-m-d'),
                    'updated_at'=>date('Y-m-d')
                ]);

            }


        }


        if($save){
            return back()->with('success', 'All Photo/photos have been added.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }

    public function update_photo(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $photo = Gallery::find($id);
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('photos'), $imageName);
            $photo->url = "/photos/".$imageName;
        }
        $photo->category_id = $request->category;
        $photo->is_active = $is_active;

        $save = $photo->save();

        if($save){
            return back()->with('success', 'Photo has been updated');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function edit_photo(Request $request,$id)
    {

        $photo = Gallery::find($id);
        $kategori = Gallery_category::where('id',$photo->category_id)->first();
        $kategori_all = Gallery_category::get();

        return view('admin.photo-edit',compact('photo','kategori_all','kategori'));

    }
    public function delete_photo($id)
    {
        $res = Gallery::destroy($id);


        if($res){
            return back()->with('success', 'Selected record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function edit_photocategory($id)
    {
        $res = Gallery_category::find($id);

        return view('admin.photocategory-edit',compact('res'));

    }
    public function update_photocategory(Request $request,$id)
    {


        $photocategory = Gallery_category::find($id);
        $photocategory->name = $request->name;
        $photocategory->priority = $request->priority;
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $save = $photocategory->save();

        if($save){
            return back()->with('success', 'Selected record has been updated.');
        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function add_photo_category(Request $request)
    {


        $photo_category = new Gallery_category();
        $photo_category->name = $request->name;

        $save = $photo_category->save();

        if($save){
            return back()->with('success', 'New Category has been added');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }

    public function admin_menu($id)
    {

        if($id==0){
            $kategori_all = Category::orderBy('priority','ASC')->get();

            if(count($kategori_all)>0){
                $kategori1 = $kategori_all[0];
                $menu_all = Menu::
                    join('categories', 'categories.id', '=', 'menus.category')
                    ->select('categories.name','menus.*')
                    ->where('menus.category',"=",$kategori_all[0]->id)
                    ->orderBy('menus.category','ASC')
                    ->orderBy('menus.priority','ASC')

                    ->paginate(30);

                $data = 1;
                return view('admin.menu-admin',compact('menu_all','kategori_all','kategori1','data'));

            }else{
                $data = 0;
                return view('admin.menu-admin',compact('data'));

            }

        }else{
            $kategori_all = Category::orderBy('name','ASC')->get();
            $kategori1 = Category::find($id);
            $menu_all = Menu::join('categories', 'categories.id', '=', 'menus.category')
                ->select('categories.name','menus.*')
                ->where('menus.category',"=",$id)
                ->orderBy('menus.category','ASC')
                ->orderBy('menus.priority','ASC')
                ->paginate(30);

            $data = 1;
            return view('admin.menu-admin',compact('menu_all','kategori_all','kategori1','data'));

        }
    }
    public function add_menu(Request $request)
    {

        if($request->category=="Kategori Seçiniz"){
            return back()->with('danger', 'Kategori seçiniz.');
        }else{
            $menu = new Menu();
            $menu->name = $request->name;
            $menu->category = $request->category;
            $menu->price = $request->price;
            $menu->description = $request->description;
            $menu->priority =$request->priority;
            $menu->is_active =1;
            $save = $menu->save();

            if($save){
                return back()->with('success', 'Menu eklendi!');

            }
        }


        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');

    }
    public function add_foodtype(Request $request)
    {


        $foodtype = new Category();
        $foodtype->name = $request->name;
        $foodtype->slug = strtolower($request->name);
        $foodtype->is_active = 1;
        $foodtype->priority = $request->priority;

        $save = $foodtype->save();

        if($save){
            return back()->with('success', 'Foodtype Category has been added');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function edit_menu($id)
    {
        $res = Menu::find($id);
        $kategori_all = Category::orderBy('id','ASC')->get();
        $kategori1 = Category::find($res->category);


        return view('admin.menu-edit',compact('res','kategori_all','kategori1'));

    }
    public function edit_foodtype($id)
    {
        $res = Category::find($id);

        return view('admin.foodtype-edit',compact('res'));

    }
    public function update_menu(Request $request,$id)
    {

        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->price;
        $menu->description =$request->description;
        $menu->priority =$request->priority;
        $menu->is_active =$is_active;

        $save = $menu->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function update_foodtype(Request $request,$id)
    {

        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        $foodtype = Category::find($id);
        $foodtype->name = $request->name;

        $foodtype->priority = $request->priority;
        $foodtype->is_active = $is_active;

        $save = $foodtype->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function delete_menu($id)
    {
        $res = Menu::destroy($id);


        if($res){
            return back()->with('success', 'The record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function delete_foodtype($id)
    {
        $res = Category::destroy($id);


        if($res){
            return back()->with('success', 'Foodtype category has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

}
