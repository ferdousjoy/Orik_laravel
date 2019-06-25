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
use Carbon\Carbon;
use Image;
class ViewController extends Controller
{
    function BannerView()
    {
      $key=BannerModel::all();
       return view('banner/BannerView',compact('key'));
    }
}
