<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="height: 457px;">

                    <div class="flex">
                        <script>
                            $(document).ready(function(){
                                for (let index = 0; index < $('#btn_count').val(); index++) {
                                    $("#drpdwn"+index+"").hide();
                                    $("#choooseMealDrpdwn"+index+"").hide();
                                }
                                for (let index = 0; index < $('#btn_count1').val(); index++) {
                                    $("#showMealDrpdwn"+index+"").hide();
                                }
                            });
                            
                            function showdrpdwn(id){
                                var x = document.getElementById("drpdwn"+id+"");
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#drpdwn"+id+"").show();
                                    document.getElementById("cbtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#drpdwn"+id+"").hide();
                                    document.getElementById("cbtn"+id+"").style.border = '0'
                                }
                            }

                            function showCMTdrpdwn(id){
                                var x = document.getElementById("choooseMealDrpdwn"+id+"");
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#choooseMealDrpdwn"+id+"").show();
                                    document.getElementById("cmbtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#choooseMealDrpdwn"+id+"").hide();
                                    document.getElementById("cmbtn"+id+"").style.border = '0'
                                }
                            }

                            function showMTdrpdwn(id){
                                var x = document.getElementById("showMealDrpdwn"+id+"");
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#showMealDrpdwn"+id+"").show();
                                    document.getElementById("mbtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#showMealDrpdwn"+id+"").hide();
                                    document.getElementById("mbtn"+id+"").style.border = '0'
                                }
                            }

                            function updatecat(id = "",elemId = ""){
                                document.getElementById('flip-card').classList.toggle('do-flip');
                                document.getElementById('addcat').style.display = 'none';
                                document.getElementById('updatecat').style.display = 'block';
                                document.getElementById('update_category_nm').value = document.getElementById('hiddenCategory_nm'+elemId+'').value;
                                document.getElementById('update_category_desc').value = document.getElementById('hiddenCategory_desc'+elemId+'').value;
                                document.getElementById('update_category_id').value = id;
                            }

                            function deleteType(id = "",elemId = ""){
                                var _token = $("input[name='_token']").val();
                                let url = new URL('http://127.0.0.1:8000/deletetype');
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    data: { _token: _token,id: id},
                                    success: function (data) {
                                        // alert(data.success)
                                        document.getElementById('viewType').innerHTML = data.success;

                                        for (let index = 0; index < data.loopCount; index++) {
                                            $("#showMealDrpdwn"+index+"").hide();
                                        }
                                    },
                                    error: function (error) {

                                    }
                                });
                            }
                            
                            function deleteCat(id = "",elemId = ""){
                                var _token = $("input[name='_token']").val();
                                let url = new URL('http://127.0.0.1:8000/deletecat');
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    data: { _token: _token,id: id},
                                    success: function (data) {
                                        document.getElementById('viewType').innerHTML = data.typeCardFront;
                                        document.getElementById('chooseCatType').innerHTML = data.chooseCatCardFront;
                                        document.getElementById('catView').innerHTML = data.catCardFront;

                                        for (let index = 0; index < data.loopCount; index++) {
                                            $("#drpdwn"+index+"").hide();
                                            $("#choooseMealDrpdwn"+index+"").hide();
                                        }
                                        
                                        for (let index = 0; index < data.loopCount1; index++) {
                                            $("#showMealDrpdwn"+index+"").hide();
                                        }
                                    },
                                    error: function (error) {

                                    }
                                });
                            }

                            function updateType(id = "",elemId = ""){
                                document.getElementById('flip-card2').classList.toggle('do-flip');
                                document.getElementById('addmeal').style.display = 'none';
                                document.getElementById('updatemeal').style.display = 'block';
                                document.getElementById('update_meal_nm').value = document.getElementById('hiddenMeal_nm'+elemId+'').value;
                                document.getElementById('update_meal_price').value = document.getElementById('hiddenMeal_price'+elemId+'').value;
                                document.getElementById('update_meal_id').value = id;
                            }

                            function addMeal(id,countId){
                                document.getElementById('flip-card2').classList.toggle('do-flip');
                                document.getElementById('addMeal_CatId').value = id;
                                document.getElementById('addmeal').style.display = 'block';
                                document.getElementById('updatemeal').style.display = 'none';
                            }
                            
                            function callTypeView() {
                                // document.getElementById('flip-card2').classList.toggle('do-flip');
                                document.getElementById('viewType').style.display = 'block';
                                document.getElementById('chooseCatType').style.display = 'none';
                                document.getElementById('tochange').innerHTML = '<button onclick="callMealCatView()" id="flip-card-btn-turn-to-back2" class="flip-card-btn-turn-to-back  cardTBtn" style="visibility: visible;">Add Meal</button>'
                            }

                            function callMealCatView() {
                                // document.getElementById('flip-card2').classList.toggle('do-flip');
                                document.getElementById('viewType').style.display = 'none';
                                document.getElementById('chooseCatType').style.display = 'block';
                                document.getElementById('tochange').innerHTML = '<button onclick="callTypeView()" id="flip-card-btn-turn-to-back22" class="flip-card-btn-turn-to-back  cardTBtn" style="visibility: visible;">Update Meal</button>'
                            }
                            
                            function callMealFront() {
                                var _token = $("input[name='_token']").val();
                                let url = new URL('http://127.0.0.1:8000/getresentmeal');
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    data: { _token: _token},
                                    success: function (data) {
                                        // alert(data.success)
                                        document.getElementById('viewType').innerHTML = data.success;
                                        document.getElementById('flip-card2').classList.toggle('do-flip');
                                        document.getElementById('flip-card-btn-turn-to-front2').style.background = 'white'
                                        document.getElementById('flip-card-btn-turn-to-front2').style.color = '#888'
                                        document.getElementById('head2').style.background = 'white'

                                        for (let index = 0; index < data.loopCount; index++) {
                                            $("#showMealDrpdwn"+index+"").hide();
                                        }
                                    },
                                    error: function (error) {

                                    }
                                });
                            }
                        </script>

                        {{-- first card --}}
                        <div class="flip-card-3D-wrapper">
                            <div id="flip-card" class="flip-card">
                                <div class="flip-card-front">
                                    <button id="flip-card-btn-turn-to-back"
                                        class="flip-card-btn-turn-to-back cardTBtn">Add Category</button>
                                    <div class="container2">
                                        {!!$btn_count!!}
                                        <div class="container3 scroll" id="catView">
                                            <!-- Btn-->
                                            {!! $catCardFront !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="head" id="head"></div>
                                    <button id="flip-card-btn-turn-to-front"
                                        class="flip-card-btn-turn-to-front  cardTBtn">back</button>
                                    <div class="container1">
                                        @csrf
                                        <div id="addcat">
                                            <div class="group">
                                                <input type="text" id="category_nm" name="category_nm" required
                                                    style="background-color: #add8e6;">
                                                {{-- <span class="highlight"></span>
                                                    <span class="bar"></span> --}}
                                                <label>Category Name</label>
                                            </div>

                                            <div class="group">
                                                <input type="text" id="category_desc" name="category_desc" required
                                                    style="background-color: #add8e6;">
                                                {{-- <span class="highlight"></span>
                                                    <span class="bar"></span> --}}
                                                <label>Category Description</label>
                                            </div>
                                            <button type="submit" id='addcatsubmit'>Add Category</button>
                                        </div>
                                        <div id="updatecat" style="display:none;">
                                            <div class="group">
                                                <input hidden type="text" id="update_category_id" name="category_nm">
                                                <input type="text" id="update_category_nm" name="category_nm" required
                                                    style="background-color: #add8e6;">
                                                {{-- <span class="highlight"></span>
                                                    <span class="bar"></span> --}}
                                                <label>Category Name</label>
                                            </div>

                                            <div class="group">
                                                <input type="text" id="update_category_desc" name="category_desc" required
                                                    style="background-color: #add8e6;">
                                                {{-- <span class="highlight"></span>
                                                    <span class="bar"></span> --}}
                                                <label>Category Description</label>
                                            </div>
                                            <button type="submit" id='updatecatsubmit'>update Category</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- second card --}}
                        <div class="flip-card-3D-wrapper">
                            <div id="flip-card2" class="flip-card">
                                <div class="flip-card-front">
                                    <div id="tochange">
                                        <button id="flip-card-btn-turn-to-back2" class="flip-card-btn-turn-to-back  cardTBtn" style="visibility: visible;">Add Meal</button>
                                    </div>
                                    <div class="container2" id="container2">
                                        <div class="container3 scroll">
                                            <div id="viewType">
                                                {!!$btn_count!!}
                                                {!!$btn_count1!!}
                                                    <!-- Btn-->
                                                    {!! $typeCardFront !!}
                                            </div>
                                            <div class="choosecat" id="chooseCatType" style="display: none">
                                                {!!$btn_count!!}
                                                    <!-- Btn-->
                                                    {!! $chooseCatCardFront!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="head" id="head2"></div>
                                    <div id="toChangeMBack">
                                        <button id="flip-card-btn-turn-to-front2" class="flip-card-btn-turn-to-front  cardTBtn" style="visibility: visible;">back</button>
                                    </div>
                                        <div class="container1">
                                            @csrf

                                            {{-- Add Meal side --}}
                                            <div id="addmeal">
                                                <div class="group">
                                                    <input hidden type="text" id="addMeal_CatId">
                                                    <input type="text" id="add_meal_nm" name="add_meal_nm" required
                                                        style="background-color: #add8e6;">
                                                    <label>Meal Name</label>
                                                </div>
    
                                                <div class="group">
                                                    <input type="text" id="add_meal_price" name="add_meal_price" required
                                                        style="background-color: #add8e6;">
                                                    <label>Price</label>
                                                </div>
                                                <button type="submit" id='addtypesubmit'>Add Meal</button>
                                            </div>

                                            {{-- Update Meal side --}}
                                            <div id="updatemeal" style="display:none;">
                                                <div class="group">
                                                    <input hidden type="text" id="update_meal_id" name="category_nm">
                                                    <input type="text" id="update_meal_nm" name="category_nm" required
                                                        style="background-color: #add8e6;">
                                                    <label>Meal Name</label>
                                                </div>
    
                                                <div class="group">
                                                    <input type="text" id="update_meal_price" name="category_desc" required
                                                        style="background-color: #add8e6;">
                                                    <label>Price</label>
                                                </div>
                                                <button type="submit" id='updatemealsubmit'>update Meal</button>
                                            </div>
    
                                        </div>
                                </div>
                            </div>
                        </div>

                        {{-- third card --}}
                        <div class="flip-card-3D-wrapper">
                            <div id="flip-card3" class="flip-card">
                                <div class="flip-card-front">
                                    <p>Front</p><button id="flip-card-btn-turn-to-back3"
                                        class="flip-card-btn-turn-to-back  cardTBtn" style="visibility: visible;">flip</button>
                                </div>
                                <div class="flip-card-back">
                                    <div class="head"></div>
                                    <p>Back</p><button id="flip-card-btn-turn-to-front3"
                                        class="flip-card-btn-turn-to-front  cardTBtn" style="visibility: visible;">flip</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
