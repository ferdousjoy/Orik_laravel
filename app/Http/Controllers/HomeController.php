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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    function sitehome(){
      $ban=BannerModel::all();
      $ab=AboutModel::all();
      $ex=ExperModel::all();
      $pr=ProductModel::all();
      $ser=ServiceModel::all();
      $sli=SliderModel::all();
      $blog=BlogModel::all();
      $partner=PartnerModel::all();
      return view('site/main',compact('ban','ab','ex','pr','ser','sli','blog','partner'));
    }

}
