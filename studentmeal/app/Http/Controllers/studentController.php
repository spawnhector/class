<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mealCategory;
use App\Models\mealType;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{
    public function order(Request $request){
        // Choice
        $category = mealCategory::all()->sortDesc();
        $mealType = mealType::all()->sortDesc();
        $catCardFront = '';
        $count_btn = 0;
        $count_btn1 = 0;
        $btn_count = '<input hidden type="text" id="btn_count" value="'.count($category).'">';
        foreach ($category as $categories ) {
            $getMeal = '';
            foreach ($mealType as $meals ) {
                if ($categories->id == $meals->category_id) {
                    $getMeal .= 
                    '
                    <button class="btn" id="Ucmbtn'.$count_btn1.'" onclick="showUCMrpdwn('.$count_btn1.')"  style="min-width: 74px;max-width: 164px;position: relative;right: -22px;margin-top: 2px;bottom:2px;">
                        <p style="margin-top: -11px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                        <p style="position: relative;top: 12px;left: 12px;width: 178px;text-align: left;color:white;font-size: 11px;">$<span id="mealCost'.$count_btn1.'">'.$meals->price_amt.'</span></p>
                        <i style="position: relative;left: 10px;" class="material-icons">#'.$meals->id.'</i>
                    </button>
                    <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                    <input hidden type="text" id="hiddenMealPrice_amt'.$count_btn1.'" value="'.$meals->price_amt.'">
                    <div class="drpdwn" id="UCMdrpdwn'.$count_btn1.'" style="display:flex;width: 179px;background: white;">
                        <form>
                            <div class="value-button" id="decrease" onclick="decreaseValue('.$count_btn1.')" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue('.$count_btn1.')" value="Increase Value">+</div>
                        </form>
                        <button class="button" onclick="addToOrder('.$meals->id.','.$count_btn1.')">
                            <span>Add Item</span>
                            <div class="cart">
                                <svg viewBox="0 0 36 26">
                                    <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
                                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                                </svg>
                            </div>
                        </button>
                    </div>
                    ';
                    ++$count_btn1;
                }
            }
            $catCardFront .= 
            '
            <button class="btn" id="cbtn'.$count_btn.'" onclick="showdrpdwn('.$count_btn.')" style="margin-top: 1px;margin-bottom: 2px;">
                <span style="position: relative;top: -6px;">'.$categories->category_nm.'</span>
                <i class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="drpdwn'.$count_btn.'" style="width: 182px;background: white;">
                '.$getMeal.'
            </div>
            ';

            ++$count_btn;
        }
        $btn_count1 = '<input hidden type="text" id="btn_count1" value="'.$count_btn1.'">';

        // Order & Cost
        $request->session()->forget('mealIds');
        if ($request->session()->has('mealIds')) {
            // Order's
            $getIds = explode(',', session('mealIds'));
            $count_btn2 = 0;
            $orders = "";
            $subtotal = 0;
            $tax = 3;
            $delivery = 9;
            foreach ($getIds as $Ids ) {
                $theMeal = mealType::where('id','=',$Ids)->first();
                $subtotal = $subtotal + $theMeal->price_amt;
                $orders .= 
                '
                <button class="btn" id="Uombtn'.$count_btn2.'" onclick="showUOMrpdwn('.$count_btn2.')"  style="min-width: 91px;max-width: 189px;position: relative;right: 0px;margin-top: 1px;margin-bottom:2px;">
                    <p style="margin-top: -11px;width: 178px;text-align: left;color:white;">'.$theMeal->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: 12px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$theMeal->price_amt.'</p>
                    <i style="position: relative;left: 10px;" class="material-icons">#'.$theMeal->id.'</i>
                </button>
                <div class="drpdwn" id="UOMdrpdwn'.$count_btn2.'" style="width: 183px;background: white;">
                    <span class="cardDrpBtn" onclick="deleteItem('.$theMeal->id.','.$count_btn2.')">Remove Item</span>
                </div>
                ';
                ++$count_btn2;
            }
            $btn_count2 = '<input hidden type="text" id="btn_count2" value="'.$count_btn2.'">';
    
            // Cost
            $grandTotal = $subtotal + $tax + $delivery;
            $cost = 
            '
            <div class="orderCostBody" style="position: relative;top: 73px;left: 5px;">
                <div class="total-item txt-left">Subtotal</div>
                <div class="total-item txt-right">$'.$subtotal.'.00</div>
                <div class="total-item txt-left">Tax('.$tax.'%)</div>
                <div class="total-item txt-right">$3.60</div>
                <div class="total-item txt-left">Delivery</div>
                <div class="total-item txt-right">$'.$delivery.'.00</div>
                <div class="total-item txt-left">Grand Total</div>
                <div class="total-item txt-right">$'.$grandTotal.'.00</div>
            </div>
            ';
        } else {
            $orders = "Empty"; // Cost
    
            $subtotal = 0;
            $tax = 0;
            $delivery = 0;
            $grandTotal = $subtotal + $tax + $delivery;
            $cost = 
            '
            <div class="orderCostBody" style="position: relative;top: 73px;left: 5px;">
                <div class="total-item txt-left">Subtotal</div>
                <div class="total-item txt-right">$'.$subtotal.'.00</div>
                <div class="total-item txt-left">Tax('.$tax.'%)</div>
                <div class="total-item txt-right">$'.$tax.'.00</div>
                <div class="total-item txt-left">Delivery</div>
                <div class="total-item txt-right">$'.$delivery.'.00</div>
                <div class="total-item txt-left">Grand Total</div>
                <div class="total-item txt-right">$'.$grandTotal.'.00</div>
            </div>
            ';
            $btn_count2 = '<input hidden type="text" id="btn_count2" value="0">';
        }

        return view('user/order',
        [
            'catCardFront' => $catCardFront,
            'orders' => $orders,
            'btn_count' => $btn_count,
            'btn_count1' => $btn_count1,
            'btn_count2' => $btn_count2,
            'cost' => $cost
        ]);
    }

    public function addToOrder(Request $request){
        // Save & display current order
        $orders = '';
        if ($request->session()->has('mealIds')) {
            $ids = explode(',', session('mealIds'));
            $new_ids = '';
            $countLoop = 1;
            foreach ($ids as $key_id) {
                if ($countLoop == count($ids)) {
                    $new_ids .= $key_id.','.$request->id;
                }else {
                    $new_ids .= $key_id.',';
                }
                ++$countLoop;
            }
            session(['mealIds' => $new_ids]);
        } else {
            session(['mealIds' => $request->id]);
            session(['mealQuantity' => "$request->id,$request->quantity"]);
        }

        $getIds = explode(',', session('mealIds'));
        $count_btn = 0;
        $subtotal = 0;
        $tax = 3;
        $delivery = 9;
        foreach ($getIds as $Ids ) {
            $theMeal = mealType::where('id','=',$Ids)->first();
            $subtotal = $subtotal + $theMeal->price_amt;
            $orders .= 
            '
            <button class="btn" id="Usmbtn'.$count_btn.'" onclick="showUSMrpdwn('.$count_btn.')"  style="min-width: 91px;max-width: 189px;position: relative;right: 0px;margin-top: 1px;margin-bottom:2px;">
                <p style="margin-top: -11px;width: 178px;text-align: left;color:white;">'.$theMeal->mealtype_nm.'</p>
                <p style="position: relative;top: 12px;left: 12px;width: 178px;text-align: left;color:white;font-size: 11px;">1 - $'.$theMeal->price_amt.'</p>
                <i style="position: relative;left: 10px;" class="material-icons">#'.$theMeal->id.'</i>
            </button>
            <div class="drpdwn" id="USMdrpdwn'.$count_btn.'" style="width: 179px;background: white;">
                <span class="cardDrpBtn" onclick="deleteOrder('.$theMeal->id.','.$count_btn.')">Remove Item</span>
            </div>
            ';
            ++$count_btn;
        }
        
        $grandTotal = $subtotal + $tax + $delivery;
        $cost = 
        '
        <div class="orderCostBody" style="position: relative;top: 73px;left: 5px;">
            <div class="total-item txt-left">Subtotal</div>
            <div class="total-item txt-right">$'.$subtotal.'.00</div>
            <div class="total-item txt-left">Tax('.$tax.'%)</div>
            <div class="total-item txt-right">$3.60</div>
            <div class="total-item txt-left">Delivery</div>
            <div class="total-item txt-right">$'.$delivery.'.00</div>
            <div class="total-item txt-left">Grand Total</div>
            <div class="total-item txt-right">$'.$grandTotal.'.00</div>
        </div>
        ';

        return response()->json([
            'success' => $orders,
            'loopCount' => $count_btn,
            'cost' => $cost,
            'quantity' => session('mealQuantity')
        ]);
    }

    public function addToOrderff(Request $request){

        orders::create([
            'user_id' => Auth::user()->id,
            'mealtype_id' => $request->id
        ]);

        return response()->json([
            'success' => 'yes'
        ]);
    }
}
