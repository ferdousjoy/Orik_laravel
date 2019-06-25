<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerModel;
use App\ProductModel;
use App\AboutModel;
use App\ServiceModel;
use App\SliderModel;
use App\PartnerModel;
use App\BlogModel;
use App\MessageModel;
use App\ExperModel;
use Carbon\Carbon;
use Image;

class SiteController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
        $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

function adminpanel(){
return view('dashboard/dashboard');
}
// banner section
function BannerAddForm(){
return view('banner/BannerAddForm');
}

function Bannerinsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(430, 630)->save(base_path('public/banner_img/'.$filename),50);
   BannerModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
     'allimg'=>'banner_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
   BannerModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

// about section
function AboutAddForm(){
return view('banner/AboutAddForm1');

}
function AboutView(){
  $key=AboutModel::all();
return view('banner/AboutView',compact('key'));

}



function Aboutinsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(617, 421)->save(base_path('public/about_img/'.$filename),50);
   AboutModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
     'allimg'=>'about_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
   AboutModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

function ExprienceAddForm(){
return view('banner/ExperienceAddForm');

}

function ExprienceView(){
  $key=ExperModel::all();
return view('banner/ExperienceView',compact('key'));

}

function ExperiencetInsert(Request $request){
   ExperModel::insert([
     'title'=>$request->title,
     'year'=>$request->year,
     'maintitle'=>$request->maintitle,

     'maintitle2'=>$request->maintitle2,
     'detail'=>$request->detail,
     'detail2'=>$request->detail2,

     'title2'=>$request->title2,
     'year2'=>$request->year2,
     'maintitle3'=>$request->maintitle3,

     'maintitle4'=>$request->maintitle4,
     'detail3'=>$request->detail3,
     'detail4'=>$request->detail4,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


}
// product section
function ProductAddForm(){
return view('banner/ProductAddForm');

}

function ProductInsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   //$filename= 'sohel.jpg';
   Image::make($product_image)->resize(430, 630)->save(base_path('public/product_img/'.$filename),50);
   ProductModel::insert([
     'name'=>$request->name,
     'allimg'=>'product_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
   ProductModel::insert([
     'name'=>$request->name,
     'allimg'=>'product_img/default.jpg',
     'created_at'=>Carbon::now(),
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

function ProductTable(){
  $product=ProductModel::all();
  $no=1;
   return view('banner/Table-p',compact('product','no'));

}
function ProductView(){
  $key=ProductModel::all();
  $no=1;
   return view('banner/ProductView',compact('key','no'));

}
//service part
function ServiceAddForm(){
return view('banner/ServiceAddForm');

}


function Serviceinsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(53, 43)->save(base_path('public/service_img/'.$filename),50);
   ServiceModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
      'allimg'=>'service_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
   ServiceModel::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
        'allimg'=>'service_img/default.jpg',
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

//slider Section

function SliderAddForm(){
return view('banner/SliderAddForm');

}

function SliderInsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(53, 43)->save(base_path('public/slider_img/'.$filename),50);
   SliderModel::insert([
     'name'=>$request->name,
     'designation'=>$request->designation,
     'detail'=>$request->detail,
      'allimg'=>'slider_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
  SliderModel::insert([
     'name'=>$request->name,
     'detail'=>$request->detail,
    'designation'=>$request->designation,
     'allimg'=>'slider_img/default.jpg',
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

// partner section

function PartnerAddForm(){
return view('banner/PartnerAddForm');

}

function PartnerInsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/partner_img/'.$filename),50);
   PartnerModel::insert([
      'allimg'=>'partner_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
  PartnerModel::insert([
    'name'=>$request->name,
    'designation'=>$request->designation,
    'detail'=>$request->detail,
     'allimg'=>'partner_img/default.jpg',
      'created_at'=>Carbon::now(),
   ]);
      return back()->with('success','Data Insert Successfully');
 }
}

public function PartnerView()
{
  $key=PartnerModel::all();
return view('banner/PartnerView',compact('key'));
}
//blog section

function BlogAddForm(){
return view('banner/BlogAddform');

}
public function BlogView()
{
  $key=BlogModel::all();
return view('banner/BlogView',compact('key'));
}


function BlogrInsert(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(370, 313)->save(base_path('public/blog_img/'.$filename),50);
   BlogModel::insert([
     'name'=>$request->name,
     'detail'=>$request->detail,
     'author'=>$request->author,
     'allimg'=>'blog_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');


 }else{
  BlogModel::insert([
    'name'=>$request->name,
    'detail'=>$request->detail,
    'author'=>$request->author,
    'allimg'=>'blog_img/default.jpg',
    'created_at'=>Carbon::now(),
   ]);
      return back()->with('success','Data Insert Successfully');
 }

//message section

function Messageinsert(Request $request){
  MessageModel::insert([
    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'message'=>$request->message,
   ]);
      return back()->with('success','Data Insert Successfully');
}










}












































}
