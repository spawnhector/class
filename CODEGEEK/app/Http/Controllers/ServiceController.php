<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Http\Requests;
use App\service;
use Illuminate\Support\Facades\Session;
use App\sales;
use App\Discount;
use App\DiscountItems;
use RealRashid\SweetAlert\Facades\Alert;

Session_start();

class ServiceController extends Controller
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

  public function addservice()
  {
    $this->AdminAuthCheck();
    return view('admin.serviceadd');
  }
  public function addsale()
  {
    $this->AdminAuthCheck();
    $get_discount = Discount::get();
    $discount_active = '';
    $edit_discount_field = '';
    if (count($get_discount) != 0) {
      $discount_active_service_name = '';
      $discount_active_discount = '';
      foreach ($get_discount as $discount_get) {
        $discount_active = '<h2>This Discount Will End On: <span class="blue" style="font-size: 20px;font-weight: 400;">' . $discount_get->end_date . '</span><input type="button" id="more_fields" value="Delete" class="btn btn-primary pull-right"  style="margin-left:20px;"/><input type="button" id="more_fields" value="Edit" onclick="edit()" class="btn btn-primary pull-right"  /></h2>';
        $get_discountItems = DiscountItems::where('discount_id', '=', $discount_get->discount_id)->get();
        $edit_discount_field_list = '';
        $count_discountItem = 1;
        foreach ($get_discountItems as $discountItems) {
          $get_service = service::where('service_id', '=', $discountItems->service_id)->get();
          // dd($discountItems->service_id);
          if (count($get_service) != 0) {
            foreach ($get_service as $servicess) {
              $discount_active_service_name .= '<th><h1>' . $servicess->service_name . '</h1></th>';
              $discount_active_discount .= '<td>' . $discountItems->sale_price . '%
                <span class="product equal-elem ">
                  <span class="product-thumnail" style="overflow: visible;bottom: 25px;left: -13px;">
                      <span class="group-flash">
                          <span class="flash-item sale-label">off</span>
                      </span>
                  </span>
                </span>
                </td>';
            }
          }
          $edit_discount_field_list .= '
            <ul class="list-group" style="text-align: left">
                <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(' . $count_discountItem . ')">Course ' . $count_discountItem . '</li>
                <ul id="myDropdown' . $count_discountItem . '" class="list-group-item-dropdown" style="text-align: left">
                    <li class="list-group-item list-group-item-success">
                        <input type="text" class="form-control" id="name" name="service_id' . $count_discountItem . '" value="' . $discountItems->service_id . '" placeholder="Enter Service ID" required>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <input type="text" class="form-control" id="name" name="Discount' . $count_discountItem . '" value="' . $discountItems->sale_price . '" placeholder="Discount" required>
                    </li>
                </ul>
            </ul>
            ';
          ++$count_discountItem;
        }
        $get_end_date = explode(' ', $discount_get->end_date);
        $edit_discount_field =
          '
          <div id="date-picker-example" class="md-form md-outline input-with-post-icon ">
              <input  name="end_date" type="date" id="example" value="' . $get_end_date[0] . '" class="form-control">
          </div>
          <input hidden name="discount_id" value="' . $discount_get->discount_id . '">
          <br>
          <div id="room_fileds">
              ' . $edit_discount_field_list . '
          </div>
          ';
      }
      $discount_active .=
        ' <table class="">
            <thead>
              <tr>
                  ' . $discount_active_service_name . '
              </tr>
            </thead>
            <tbody>
              <tr>
                  ' . $discount_active_discount . '
              </tr>
            </tbody>
          </table>
        ';
    }
    return view(
      'admin.saleadd',
      [
        'discount_active' => $discount_active,
        'edit_discount_field' => $edit_discount_field
      ]
    );
  }

  public function savesale(Request $request)
  {
    $this->AdminAuthCheck();
    //  dd($request->request);
    $test = count($request->request);
    $service_idd = [];
    $discount = [];
    $count = 1;
    $count1 = 2;
    foreach ($request->request as $req) {
      if ($count != 1 && $count != $test) {
        if ($count != 2) {
          if ($count != $count1) {
            array_push($service_idd, $req);
            $count1 = $count1 + 2;
          } elseif ($count == $count1) {
            array_push($discount, $req);
          }
        }
      }
      ++$count;
    }
    $check_discount = Discount::get();
    $discount_id = 0;
    if (count($check_discount) != 0) {
      $discount_id = count($check_discount) + 1;
    } else {
      $discount_id = 1;
    }
    $good_to_store = [];
    foreach ($service_idd as $idds) {
      $service = service::where('service_id', '=', $idds)->get();
      if (count($service) != 0) {
        array_push($good_to_store, 'yes');
      } else {
        array_push($good_to_store, 'no');
      }
    }

    if (!in_array('no', $good_to_store)) {
      $store_discount = new Discount;
      $store_discount->discount_id = $discount_id;
      $store_discount->end_date = $request->end_date;
      $store_discount->save();
      $count_course = 0;
      foreach ($service_idd as $idds) {
        $store = new DiscountItems();
        $store->discount_id = $discount_id;
        $store->service_id = $idds;
        $store->sale_price = $discount[$count_course];
        $store->save();
        ++$count_course;
      }
      return back();
    } else {
      $count_course = 1;
      $id_not_found = [];
      foreach ($good_to_store as $to_store) {
        if ($to_store == "no") {
          array_push($id_not_found, $count_course);
        }
        ++$count_course;
      }
      $ids_are = "";
      $check_id = 1;
      foreach ($id_not_found as $not_found) {
        if ($check_id != count($id_not_found)) {
          $ids_are .= "" . $not_found . " & ";
        } elseif ($check_id == count($id_not_found)) {
          $ids_are .= "" . $not_found . "";
        }
        ++$check_id;
      }
      // dd(count($id_not_found));
      return back()->withErrors(
        ['Course ' . $ids_are . ' Service ID not found']
      );
    }
  }
  public function updatesale(Request $request)
  {
    $this->AdminAuthCheck();
    $test = count($request->request);
    $service_idd = [];
    $discount = [];
    $count = 1;
    $count1 = 3;
    foreach ($request->request as $req) {
      if ($count != 1 && $count != $test) {
        if ($count != 2) {
          if ($count != 3) {
            if ($count != $count1) {
              array_push($service_idd, $req);
              $count1 = $count1 + 2;
            } elseif ($count == $count1) {
              array_push($discount, $req);
            }
          }
        }
      }
      ++$count;
    }
    
    $good_to_store = [];
    foreach ($service_idd as $idds) {
      $service = service::where('service_id', '=', $idds)->get();
      if (count($service) != 0) {
        array_push($good_to_store, 'yes');
      } else {
        array_push($good_to_store, 'no');
      }
    }
    if (!in_array('no', $good_to_store)) {
      $new_discount = Discount::where('discount_id','=',$request->discount_id)->update(['discount_id' => $request->discount_id,'end_date' => $request->end_date]);
      $count_course = 0;
      $new_discountItems = DiscountItems::where('discount_id','=',$request->discount_id)->delete();
      foreach ($service_idd as $idds) {
        $store = new DiscountItems();
        $store->discount_id = $request->discount_id;
        $store->service_id = $idds;
        $store->sale_price = $discount[$count_course];
        $store->save();
        ++$count_course;
      }
      // dd($new_discountItems);
      Alert::success('Nice', 'Discount Details Successfully Updated');
      return back();
    } else {
      $count_course = 1;
      $id_not_found = [];
      foreach ($good_to_store as $to_store) {
        if ($to_store == "no") {
          array_push($id_not_found, $count_course);
        }
        ++$count_course;
      }
      $ids_are = "";
      $check_id = 1;
      foreach ($id_not_found as $not_found) {
        if ($check_id != count($id_not_found)) {
          $ids_are .= "" . $not_found . " & ";
        } elseif ($check_id == count($id_not_found)) {
          $ids_are .= "" . $not_found . "";
        }
        ++$check_id;
      }
      // dd(count($id_not_found));
      // Alert::html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success');
      Alert::error('Check Discount Details', 'Course ' . $ids_are . ' Service ID not found');
      return back()->with('test','test');
    }
  }



  public function saveservice(Request $request)
  {
    $this->AdminAuthCheck();
    $date = array();

    $date['service_name'] = $request->service_name;
    $date['service_price'] = $request->service_price;
    $date['service_detels'] = $request->service_detels;
    $date['service_type'] = $request->service_type;

    $image = $request->file('service_photo');

    if ($image) {
      $image_name = str_random(20);
      $ext = strtolower($image->getClientOriginalExtension());
      $image_fullName = $image_name . '.' . $ext;
      $upload_path = 'image/';
      $image_url = $upload_path . $image_fullName;
      $secc = $image->move($upload_path, $image_fullName);
      if ($secc) {
        $date['service_photo'] = $image_url;

        DB::table('services')->insert($date);
        Session::put('massage', 'Service Inserted Successfully ! . ');
        return Redirect::to('addservice');
      }
    }
  }


  public function allservice()
  {
    $this->AdminAuthCheck();
    $all_service = DB::table('services')
      ->get();
    return view('admin.serviceall')->with('all_service', $all_service);
  }


  public function activeservice($service_id)
  {
    $this->AdminAuthCheck();
    DB::table('services')->where('service_id', $service_id)->update(['service_status' => 1]);
    Session::put('massage', 'Service Is UnActive ! .');
    return Redirect::to('allservice');
  }
  
  public function unactiveservice($service_id)
  {
    $this->AdminAuthCheck();
    DB::table('services')->where('service_id', $service_id)->update(['service_status' => 0]);
    Session::put('massage', 'Service Is Active ! .');
    return Redirect::to('allservice');
  }

  public function deleteservice($service_id)
  {
    $this->AdminAuthCheck();
    $images = DB::table('services')->where('service_id', $service_id)->get();

    foreach ($images as $image) {
      $image =  $image->service_photo;
      unlink(public_path($image));
    }
    DB::table('services')->where('service_id', $service_id)->delete();
    Session::put('massage', 'Service Is Delete ! .');
    return Redirect::to('allservice');
  }


  public function Editservice($service_id)
  {
    $this->AdminAuthCheck();
    $edit_service = DB::table('services')
      ->where('service_id', $service_id)
      ->first();
    return view('admin.serviceEdit')->with('edit_service', $edit_service);
  }


  public function update_service(Request $request, $service_id)
  {
    $this->AdminAuthCheck();
    $date = array();
    $date['service_name'] = $request->service_name;
    $date['service_price'] = $request->service_price;
    $date['service_detels'] = $request->service_detels;
    $date['service_type'] = $request->service_type;

    $image = $request->file('service_photo');

    if ($image) {

      $image_name = str_shuffle(20);
      $ext = strtolower($image->getClientOriginalExtension());
      $image_fullName = $image_name . '.' . $ext;
      $upload_path = 'image/';
      $image_url = $upload_path . $image_fullName;
      $secc = $image->move($upload_path, $image_fullName);
      if ($secc) {
        $date['service_photo'] = $image_url;

        DB::table('services')->where('service_id', $service_id)->update($date);
        Session::put('massage', 'Service Update Successfully ! . ');
        return Redirect::to('allservice');
      }
    } else {
      DB::table('services')->where('service_id', $service_id)->update($date);
      Session::put('massage', 'Service Update Successfully ! . ');
      return Redirect::to('allservice');
    }
  }



  public function detelespage($service_id)
  {
    $service = DB::table('services')->where('service_id', $service_id)->first();
    return view('couressdeteles')->with('service', $service);
  }
}
