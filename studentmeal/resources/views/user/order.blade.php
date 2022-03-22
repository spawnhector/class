<x-app-layout>
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
                                    $("#UCMdrpdwn"+index+"").hide();
                                }
                                for (let index = 0; index < $('#btn_count2').val(); index++) {
                                    $("#UOMdrpdwn"+index+"").hide();
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

                            function showUCMrpdwn(id){
                                var x = document.getElementById("UCMdrpdwn"+id+"");
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#UCMdrpdwn"+id+"").show();
                                    document.getElementById("Ucmbtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#UCMdrpdwn"+id+"").hide();
                                    document.getElementById("Ucmbtn"+id+"").style.border = '0'
                                }
                            }
                            function showUSMrpdwn(id){
                                var x = document.getElementById("USMdrpdwn"+id+"");
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#USMdrpdwn"+id+"").show();
                                    document.getElementById("Usmbtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#USMdrpdwn"+id+"").hide();
                                    document.getElementById("Usmbtn"+id+"").style.border = '0'
                                }
                            }
                            function showUOMrpdwn(id){
                                var x = document.getElementById("UOMdrpdwn"+id+"");
                                // alert('yes')
                                if (window.getComputedStyle(x).display === "none") {
                                    $("#UOMdrpdwn"+id+"").show();
                                    document.getElementById("Uombtn"+id+"").style.border = '1px solid red'
                                }else{
                                    $("#UOMdrpdwn"+id+"").hide();
                                    document.getElementById("Uombtn"+id+"").style.border = '0'
                                }
                            }

                            function addToOrder(id = "",elemId = ""){
                                var _token = $("input[name='_token']").val();
                                let url = new URL('http://127.0.0.1:8000/addToOrder');
                                let quantity = document.getElementById('number').value
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    data: { _token: _token,id: id,quantity:quantity},
                                    success: function (data) {
                                        document.getElementById('showOrder').innerHTML = data.success
                                        document.getElementById('orderCost').innerHTML = data.cost;
                                        alert(data.quantity)
                                        for (let index = 0; index < data.loopCount; index++) {
                                            $("#USMdrpdwn"+index+"").hide();
                                        }
                                    },
                                    error: function (error) {

                                    }
                                });
                            }
                            
                        </script>

                        {{-- first card --}}
                        <div class="flip-card-3D-wrapper" style="max-width: -webkit-fill-available;">
                            <div id="flip-card" class="flip-card">
                                <div class="flip-card-front">
                                    <button id="flip-card-btn-turn-to-back"
                                        class="flip-card-btn-turn-to-back cardTBtn" style="left: 564px;width: 128px;">Place your Order</button>
                                    <div class="container2">
                                        {!!$btn_count!!}
                                        {!!$btn_count1!!}
                                        {!!$btn_count2!!}
                                        <div class="container3 scroll" id="catView" style="left: 12%;">
                                            {!! $catCardFront !!}
                                        </div>
                                        <div class="showOrder scroll" id="showOrder">
                                            {!!$orders!!}
                                        </div>
                                        <div class="orderCost" id="orderCost">
                                            {!!$cost!!}
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
