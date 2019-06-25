<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageModel;
use App\BannerModel;
use App\AboutModel;
use App\PartnerModel;
use App\ServiceModel;
use App\ProductModel;
use App\BlogModel;
use App\ExperModel;
use App\SliderModel;
use Carbon\Carbon;
use Image;




class MsgController extends Controller
{
  function Message(Request $request){
    MessageModel::insert([
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
       'subject'=>$request->subject,
      'message'=>$request->message,
        'created_at'=>Carbon::now(),
     ]);
        return back()->with('success','Your message sent Successfully');
  }
  function viewmsg()
   {
     $msg=MessageModel::orderBy('id', 'desc')->get();
     $no=1;
    return view('banner/messageview',compact('msg','no'));
   }
   //all delte
   function productdelete($product_id){
 MessageModel::find($product_id)->delete();
 return back()->with('successdelte','Product delete Successfully');
}
function productbdelete($product_id){
BannerModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}
function sliderDelete($product_id){
SliderModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}
function ProductDeleteProduct($product_id){
ProductModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}

function blogdelete($product_id){
BlogModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}



function productadelete($product_id){
AboutModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}
function partnerdelete($product_id){
PartnerModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}
function productedelete($product_id){
ExperModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}
function servicedelete($product_id){
ServiceModel::find($product_id)->delete();
return back()->with('successdelte','Product delete Successfully');
}

//all edit
function upadate($ban_id){
 $ban = BannerModel::findOrFail($ban_id);
  return view('banner/EditBanner',compact('ban'));
}
function upadateProduct($ban_id){
 $ban = ProductModel::findOrFail($ban_id);
  return view('banner/EditProduct',compact('ban'));
}
function upadateabout($ban_id){
 $ban = AboutModel::findOrFail($ban_id);
  return view('banner/EditAbout',compact('ban'));
}


function upadatexperience($ban_id){
 $ban = ExperModel::findOrFail($ban_id);
  return view('banner/EditExperience',compact('ban'));
}

//all edit end



function bannerupdate(Request $request){

 if($request->hasFile('allimg')){
  $product_image=$request->file('allimg');
  $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
  Image::make($product_image)->resize(430, 630)->save(base_path('public/banner_img/'.$filename),50);
  BannerModel::findOrFail($request->ban_id)->update([
    'title'=>$request->title,
    'detail'=>$request->detail,
    'allimg'=>'banner_img/'.$filename,
    'created_at'=>Carbon::now(),
  ]);
  return back()->with('success','Data Updated Successfully');


}else{
  BannerModel::findOrFail($request->ban_id)->update([
    'title'=>$request->title,
    'detail'=>$request->detail,
  ]);
     return back()->with('success','Data Updated Successfully');
}
}

function ProductUpdateProduct(Request $request){

 if($request->hasFile('allimg')){
  $product_image=$request->file('allimg');
  $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
  Image::make($product_image)->resize(430, 630)->save(base_path('public/product_img/'.$filename),50);
  ProductModel::findOrFail($request->product_id)->update([
    'name'=>$request->name,
    'allimg'=>'product_img/'.$filename,
    'created_at'=>Carbon::now(),
  ]);
  return back()->with('success','Data Updated Successfully');


}else{
  BannerModel::findOrFail($request->ban_id)->update([
    'title'=>$request->title,
    'detail'=>$request->detail,
  ]);
     return back()->with('success','Data Updated Successfully');
}
}






function bannerabout(Request $request){
 if($request->hasFile('allimg')){
  $product_image=$request->file('allimg');
  $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
  Image::make($product_image)->resize(430, 630)->save(base_path('public/about_img/'.$filename),50);
  AboutModel::findOrFail($request->ban_id)->update([
    'title'=>$request->title,
    'detail'=>$request->detail,
    'allimg'=>'about_img/'.$filename,
    'created_at'=>Carbon::now(),
  ]);
  return back()->with('success','Data Updated Successfully');


}else{
  AboutModel::findOrFail($request->ban_id)->update([
    'title'=>$request->title,
    'detail'=>$request->detail,
  ]);
     return back()->with('success','Data Updated Successfully');
}
}

function ExperienceUpdate(Request $request){
ExperModel::findOrFail($request->ban_id)->update([
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
   return back()->with('success','Data Updated Successfully');
}
public function SliderView()
{
  $key=SliderModel::all();
  return view('banner/SliderView',compact('key'));
}


public function ServiceView()
{

    $key=ServiceModel::all();
  return view('banner/ServiceView',compact('key'));

}







}
