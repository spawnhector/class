<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Mail;
use App\adminlogin;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\service;
use App\Services;
use App\Discount;
use App\DiscountItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Session_start();

class home extends Controller
{


  function AdminAuthCheck()
  {
    $admin_id = Session::get('admin_id');
    if ($admin_id) {
      return;
    } else {
      return Redirect::to('Admin/Login/Page')->send();
    }
  }




  public function adminsite()
  {

    $this->AdminAuthCheck();
    return view('admin/layout');
  }

  public function adminloginpage()
  {
    return view('adminLogin');
  }

  public function adminregister()
  {
    return view('adminregister');
  }

  public function index1()
  {
    // $uds = DB::table('uds')->where('id',1)->first();
    //   $da =  $uds->date;
    //   $du = date('Y');
    //   if($uds->date != date('Y')){
    //     return view('layout1');
    //   }else{
    //   }
    return view('layout');
  }

  public function admin_beshbord(Request $request)
  {
    $credentials = $this->validate($request, [
      'email' => 'required',
      'password' => 'required',
    ]);

    // dd($credentials);
    if (Auth::attempt($credentials)) {
      Session::put('admin_name', Auth::user()->name);
      Session::put('admin_id', Auth::user()->admin_id);
      return Redirect::to('admin/site/mitfarm');
    } else {
      Session::put('massage', 'Email or Password Invalid');
      return Redirect::to('Admin/Login/Page');
    }
  }

  public function admin_beshbord_register(Request $request){
    $validate = $request->validate([
      'email' => 'required',
      'password' => 'required','min:6',
      'confirm' => 'required_with:password|same:password','min:6',
    ]);
    $store = new adminlogin;
    $store->name = $request->username;
    $store->email = $request->email;
    $store->password = Hash::make($request->password);
    $store->save();

    return view('adminLogin');
    
  }

  public function index()
  {
    $course_slide = '';
    $serrvice = Service::get();
    foreach ($serrvice as $service) {
      $count_slide = rand(1, 3);
      $course_slide .=
        '<div class="item-slide">
          <img src="http://127.0.0.1:8000/image/main-slider-1-1.jpg" alt="" class="img-slide">
          <div class="slide-info slide-' . $count_slide . '">
              <h2 class="f-title">' . $service->service_name . ' <b>CODEGEEK</b></h2>
              <span class="subtitle">' . $service->service_detels . '</span>
              <p class="sale-info">Only price: <span class="price">$' . $service->service_price . '</span></p>
              <a href="#" class="btn-link">Shop Now</a>
          </div>
        </div>';
    }

    // get items on sale
    
    $get_discount = Discount::get();
    $course_sale = '';
    $course_end_date = "";
    $inc_end_date_count = 1;
    if (count($get_discount) != 0) {
      foreach ($get_discount as $discount_get ) {
        if ($discount_get->end_date > date(now())) {
          $get_end_date = explode(' ',$discount_get->end_date);
          $reset_end_date = explode('-',$get_end_date[0]);
          $count_reset = count($reset_end_date);
          foreach ($reset_end_date as $date_end ) {
            if ($inc_end_date_count == $count_reset) {
              $course_end_date .= $date_end;
            } else {
              $course_end_date .= $date_end."/";
              ++$inc_end_date_count;
            }
            
          }
          $get_discountItems = DiscountItems::where('discount_id','=',$discount_get->discount_id)->get();
          foreach ($get_discountItems as $discountItems ) {
            $get_service = service::where('service_id','=',$discountItems->service_id)->get();
            // dd($discountItems->service_id);
            if (count($get_service) != 0) {
              foreach ($get_service as $servicess ) {
                $course_sale .=
                  '<div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="http://127.0.0.1:8000/image/products/tools_equipment_7.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>'.$servicess->service_name.'</span></a>
                        <div class="wrap-price"><span class="product-price"><span style="text-decoration: line-through;">$'.$servicess->service_price.'</span> <span style="padding-left:10px;font-weight: 900;color: #ff2832;">$'.$servicess->service_price.'</span></span></div>
                        <div class="wrap-price"><span class="product-price">'.$discountItems->sale_price.'% Off</span></div>
                    </div>
                  </div>'
                ;
              }
            }
          }
        }
      }
    }
    // dd($course_end_date);

    return view('layout2', [
      'course_slide' => $course_slide,
      'course_sale' => $course_sale,
      'course_end_date' => $course_end_date
    ]);
  }

  function adminlogout()
  {
    Session::flush();
    return Redirect::to('Admin/Login/Page');
  }

  public function about()
  {
    return view('about');
  }

  public function Contackus()
  {
    return view('contack');
  }

  public function massage(Request $request)
  {

    $date = array();
    $date['massage_name'] = $request->massage_name;
    $date['massage_phone'] = $request->massage_phone;
    $date['massage_email'] = $request->massage_email;
    $date['massage_deteles'] = $request->massage_deteles;

    DB::table('massages')->insert($date);

    Session::put('massage', 'Your Massage is sent');
    return view('contack');
  }
}
