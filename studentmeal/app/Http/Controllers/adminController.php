<?php

namespace App\Http\Controllers;

use App\Models\mealCategory;
use App\Models\mealType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    public function setting(Request $request){
        $category = mealCategory::all()->sortDesc();
        $mealType = mealType::all()->sortDesc();
        $catCardFront = '';
        $typeCardFront = '';
        $chooseCatCardFront = '';
        $count_btn = 0;
        $count_btn1 = 0;
        $btn_count = '<input hidden type="text" id="btn_count" value="'.count($category).'">';
        $btn_count1 = '<input hidden type="text" id="btn_count1" value="'.count($mealType).'">';
        foreach ($category as $categories ) {
            $catCardFront .= 
            '
            <button class="btn" id="cbtn'.$count_btn.'" onclick="showdrpdwn('.$count_btn.')"><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="drpdwn'.$count_btn.'" style="width:200px;">
                <span class="cardDrpBtn" onclick="deleteCat('.$categories->id.','.$count_btn.')">Delete</span><span class="cardDrpBtn" onclick="updatecat('.$categories->id.','.$count_btn.')">Update</span>
            </div>
            ';

            // for second card
            $chooseCatCardFront .= 
            '
            <button class="btn" id="cmbtn'.$count_btn.'" onclick="showCMTdrpdwn('.$count_btn.')" ><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="choooseMealDrpdwn'.$count_btn.'" style="width:200px;">
                <span class="cardDrpBtn" onclick="addMeal('.$categories->id.','.$count_btn.')">Add Meal</span>
            </div>
            ';
            ++$count_btn;
        }

        foreach ($mealType as $meals ) {
            $getCategory = mealCategory::where('id','=',$meals->category_id)->first();
            $typeCardFront .= 
            '
                <button class="btn" id="mbtn'.$count_btn1.'" onclick="showMTdrpdwn('.$count_btn1.')">
                    <p style="position: relative;top: -7px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: -166px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$meals->price_amt.'  ('.$getCategory->category_nm.')</p>
                    <i style="position: relative;left: -142px;" class="material-icons">#'.$meals->id.'</i>
                </button>
                <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                <input hidden type="text" id="hiddenMeal_price'.$count_btn1.'" value="'.$meals->price_amt.'">
                <div class="drpdwn" id="showMealDrpdwn'.$count_btn1.'" style="width:200px;">
                    <span class="cardDrpBtn" onclick="deleteType('.$meals->id.','.$count_btn1.')">Delete</span><span class="cardDrpBtn" onclick="updateType('.$meals->id.','.$count_btn1.')">Update</span>
                </div>
            ';
            ++$count_btn1;
        }

        return view('admin/setting',
        [
            'catCardFront' => $catCardFront,
            'chooseCatCardFront' => $chooseCatCardFront,
            'typeCardFront' => $typeCardFront,
            'btn_count' => $btn_count,
            'btn_count1' => $btn_count1
        ]);
    }

    public function addcat(Request $request){
        mealCategory::create([
            'category_nm' => $request->category_nm,
            'category_desc' => $request->category_desc
        ]);
        
        $category = mealCategory::all()->sortDesc();
        $catCardFront = '';
        $chooseCatCardFront = '';
        $count_btn = 0;
        foreach ($category as $categories ) {
            $catCardFront .= 
            '
            <button class="btn" id="cbtn'.$count_btn.'" onclick="showdrpdwn('.$count_btn.')"><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="drpdwn'.$count_btn.'" style="width:200px;">
                <span class="cardDrpBtn" onclick="deleteCat('.$categories->id.','.$count_btn.')">Delete</span><span class="cardDrpBtn" onclick="updatecat('.$categories->id.','.$count_btn.')">Update</span>
            </div>
            ';
            ++$count_btn;
            
            // for second card
            $chooseCatCardFront .= 
            '
            <button class="btn" id="cmbtn'.$count_btn.'" onclick="showCMTdrpdwn('.$count_btn.')" ><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="choooseMealDrpdwn'.$count_btn.'" style="width:200px;">
                <span class="cardDrpBtn" onclick="addMeal('.$categories->id.','.$count_btn.')">Add Meal</span>
            </div>
            ';
            ++$count_btn;
            
        }

        return response()->json([
            'success' => 'Category Added',
            'catCardFront' => $catCardFront,
            'chooseCatCardFront' => $chooseCatCardFront,
            'count_btn' => $count_btn,
        ]);
    }

    public function addtype(Request $request){
        mealType::create([
            'mealtype_nm' => $request->meal_nm,
            'price_amt' => $request->meal_price,
            'category_id' => $request->cat_Id
        ]);


        return response()->json([
            'success' => 'Meal Added',
        ]);
    }

    public function updatecat(Request $request){
       $category = mealCategory::find($request->id);
       $category->category_nm = $request->category_nm;
       $category->category_desc = $request->category_desc;
       $category->save();
       
       $category = mealCategory::all()->sortDesc();
       $mealType = mealType::all()->sortDesc();
       $typeCardFront = '';
       $catCardFront = '';
       $chooseCatCardFront ='';
       $count_btn = 0;
       $count_btn1 = 0;
       foreach ($category as $categories ) {
           $catCardFront .= 
           '
           <button class="btn" id="cbtn'.$count_btn.'" onclick="showdrpdwn('.$count_btn.')"><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                   class="material-icons">#'.$categories->id.'</i>
           </button>
           <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
           <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
           <div class="drpdwn" id="drpdwn'.$count_btn.'" style="width:200px;">
               <span class="cardDrpBtn" onclick="deleteCat('.$categories->id.','.$count_btn.')">Delete</span><span class="cardDrpBtn" onclick="updatecat('.$categories->id.','.$count_btn.')">Update</span>
           </div>
           ';
           ++$count_btn;

           // for second card
           $chooseCatCardFront .= 
           '
           <button class="btn" id="cmbtn'.$count_btn.'" onclick="showCMTdrpdwn('.$count_btn.')" ><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                   class="material-icons">#'.$categories->id.'</i>
           </button>
           <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
           <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
           <div class="drpdwn" id="choooseMealDrpdwn'.$count_btn.'" style="width:200px;">
               <span class="cardDrpBtn" onclick="addMeal('.$categories->id.','.$count_btn.')">Add Meal</span>
           </div>
           ';
           ++$count_btn;
       }

       
        foreach ($mealType as $meals ) {
            $getCategory = mealCategory::where('id','=',$meals->category_id)->first();
            $typeCardFront .= 
            '
                <button class="btn" id="mbtn'.$count_btn1.'" onclick="showMTdrpdwn('.$count_btn1.')">
                    <p style="position: relative;top: -7px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: -166px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$meals->price_amt.'  ('.$getCategory->category_nm.')</p>
                    <i style="position: relative;left: -142px;" class="material-icons">#'.$meals->id.'</i>
                </button>
                <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                <input hidden type="text" id="hiddenMeal_price'.$count_btn1.'" value="'.$meals->price_amt.'">
                <div class="drpdwn" id="showMealDrpdwn'.$count_btn1.'" style="width:200px;">
                    <span class="cardDrpBtn" onclick="deleteType('.$meals->id.','.$count_btn1.')">Delete</span><span class="cardDrpBtn" onclick="updateType('.$meals->id.','.$count_btn1.')">Update</span>
                </div>
            ';
            ++$count_btn1;
        }
        return response()->json([
            'success' => 'Category Updated',
            'catCardFront' => $catCardFront,
            'chooseCatCardFront' => $chooseCatCardFront,
            'typeCardFront' => $typeCardFront, 
            'count_btn1' => $count_btn1,
            'count_btn' => $count_btn,
        ]);
    }

    public function updatemeal(Request $request){
       $meal = mealType::find($request->id);
       $meal->mealtype_nm = $request->meal_nm;
       $meal->price_amt = $request->meal_price;
       $meal->save();
        return response()->json([
            'success' => 'Meal Updated'
        ]);
    }

    public function getresentmeal(Request $request){
        $mealType = mealType::all()->sortDesc();
        $typeCardFront = '';
        $count_btn1 = 0;
        
        foreach ($mealType as $meals ) {
            $getCategory = mealCategory::where('id','=',$meals->category_id)->first();
            $typeCardFront .= 
            '
                <button class="btn" id="mbtn'.$count_btn1.'" onclick="showMTdrpdwn('.$count_btn1.')">
                    <p style="position: relative;top: -7px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: -166px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$meals->price_amt.'  ('.$getCategory->category_nm.')</p>
                    <i style="position: relative;left: -142px;" class="material-icons">#'.$meals->id.'</i>
                </button>
                <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                <input hidden type="text" id="hiddenMeal_price'.$count_btn1.'" value="'.$meals->price_amt.'">
                <div class="drpdwn" id="showMealDrpdwn'.$count_btn1.'"  style="width:200px;">
                    <span class="cardDrpBtn" onclick="deleteType('.$meals->id.','.$count_btn1.')">Delete</span><span class="cardDrpBtn" onclick="updateType('.$meals->id.','.$count_btn1.')">Update</span>
                </div>
            ';
            ++$count_btn1;
        }
        return response()->json([
            'success' => $typeCardFront, 
            'loopCount' => ++$count_btn1
        ]);
    }

    public function deletetype(Request $request){
        mealType::destroy($request->id);
        $mealType = mealType::all()->sortDesc();
        $typeCardFront = '';
        $count_btn1 = 0;
        
        foreach ($mealType as $meals ) {
            $getCategory = mealCategory::where('id','=',$meals->category_id)->first();
            $typeCardFront .= 
            '
                <button class="btn" id="mbtn'.$count_btn1.'" onclick="showMTdrpdwn('.$count_btn1.')">
                    <p style="position: relative;top: -7px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: -166px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$meals->price_amt.'  ('.$getCategory->category_nm.')</p>
                    <i style="position: relative;left: -142px;" class="material-icons">#'.$meals->id.'</i>
                </button>
                <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                <input hidden type="text" id="hiddenMeal_price'.$count_btn1.'" value="'.$meals->price_amt.'">
                <div class="drpdwn" id="showMealDrpdwn'.$count_btn1.'">
                    <span class="cardDrpBtn" onclick="deleteType('.$meals->id.','.$count_btn1.')">Delete</span><span class="cardDrpBtn" onclick="updateType('.$meals->id.','.$count_btn1.')">Update</span>
                </div>
            ';
            ++$count_btn1;
        }
        return response()->json([
            'success' => $typeCardFront, 
            'loopCount' => ++$count_btn1
        ]);
    }

    public function deletecat(Request $request){
        DB::table('meal_types')->where('category_id', '=', $request->id)->delete();
        DB::table('meal_categories')->where('id', '=', $request->id)->delete();

        $category = mealCategory::all()->sortDesc();
        $mealType = mealType::all()->sortDesc();
        $catCardFront = '';
        $typeCardFront = '';
        $chooseCatCardFront = '';
        $count_btn = 0;
        $count_btn1 = 0;
        foreach ($category as $categories ) {
            $catCardFront .= 
            '
            <button class="btn" id="cbtn'.$count_btn.'" onclick="showdrpdwn('.$count_btn.')"><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="drpdwn'.$count_btn.'"  style="width:200px;">
                <span class="cardDrpBtn" onclick="deleteCat('.$categories->id.','.$count_btn.')">Delete</span><span class="cardDrpBtn" onclick="updatecat('.$categories->id.','.$count_btn.')">Update</span>
            </div>
            ';

            // for second card
            $chooseCatCardFront .= 
            '
            <button class="btn" id="cmbtn'.$count_btn.'" onclick="showCMTdrpdwn('.$count_btn.')" ><span style="position: relative;top: -6px;">'.$categories->category_nm.'</span><i
                    class="material-icons">#'.$categories->id.'</i>
            </button>
            <input hidden type="text" id="hiddenCategory_nm'.$count_btn.'" value="'.$categories->category_nm.'">
            <input hidden type="text" id="hiddenCategory_desc'.$count_btn.'" value="'.$categories->category_desc.'">
            <div class="drpdwn" id="choooseMealDrpdwn'.$count_btn.'" style="width:200px;">
                <span class="cardDrpBtn" onclick="addMeal('.$categories->id.','.$count_btn.')">Add Meal</span>
            </div>
            ';
            ++$count_btn;
        }
        
        foreach ($mealType as $meals ) {
            $getCategory = mealCategory::where('id','=',$meals->category_id)->first();
            $typeCardFront .= 
            '
                <button class="btn" id="mbtn'.$count_btn1.'" onclick="showMTdrpdwn('.$count_btn1.')">
                    <p style="position: relative;top: -7px;width: 178px;text-align: left;color:white;">'.$meals->mealtype_nm.'</p>
                    <p style="position: relative;top: 12px;left: -166px;width: 178px;text-align: left;color:white;font-size: 11px;">$'.$meals->price_amt.'  ('.$getCategory->category_nm.')</p>
                    <i style="position: relative;left: -142px;" class="material-icons">#'.$meals->id.'</i>
                </button>
                <input hidden type="text" id="hiddenMeal_nm'.$count_btn1.'" value="'.$meals->mealtype_nm.'">
                <input hidden type="text" id="hiddenMeal_price'.$count_btn1.'" value="'.$meals->price_amt.'">
                <div class="drpdwn" id="showMealDrpdwn'.$count_btn1.'" style="width:200px;">
                    <span class="cardDrpBtn" onclick="deleteType('.$meals->id.','.$count_btn1.')">Delete</span><span class="cardDrpBtn" onclick="updateType('.$meals->id.','.$count_btn1.')">Update</span>
                </div>
            ';
            ++$count_btn1;
        }
        return response()->json([
            'catCardFront' => $catCardFront,
            'chooseCatCardFront' => $chooseCatCardFront,
            'typeCardFront' => $typeCardFront, 
            'loopCount1' => $count_btn1,
            'loopCount' => $count_btn,
        ]);
    }
}
