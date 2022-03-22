@extends('admin.index')


@section('body')

    <div class="inner-block">

        <div class="market-updates text-center">

            <div class="container">
                <style>
                    .dropbtn{
                        background-color: #1F2739;
                        font-weight: bold;
                        font-size: 1em;
                        color: #53cafa;
                    }
                    .list-group-item-success{
                        background-color: #323C50;
                        border: none;
                    }
                    .list-group-item:first-child {
                        border-top-left-radius: 0px;
                        border-top-right-radius: 0px;
                    }
                </style>
                @if (empty($discount_active))
                    <div class="col-md-5">
                        <div class="form-area">
                            <form role="form" method="post" action="{{ route('save_sale') }} "
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <br style="clear:both">

                                <h3 style="margin-bottom: 25px; text-align: center;">Add Discounts</h3>
                                @foreach($errors->all() as $message)
                                    {{$message}}
                                @endforeach
                                <hr>
                                <h3 style="margin-bottom: 25px; text-align: center;">Set End Date</h3>
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                    <input placeholder="Select date" name="end_date" type="date" id="example" class="form-control">
                                    {{-- <i class="fas fa-calendar input-prefix" tabindex=0></i> --}}
                                </div>
                                <br>
                                <style>
                                    .list-group ul{
                                        display: none;
                                    }
                                    .list-group-item{
                                        cursor: pointer;
                                    }
                                    .list-group-item-dropdown{
                                        margin-left: 40px;

                                    }
                                    .show{display: block;}
                                </style>
                                <div id="room_fileds">
                                    <div>
                                        <ul class="list-group" style="text-align: left">
                                            <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(1)">Course 1</li>
                                            <ul id="myDropdown1" class="list-group-item-dropdown" style="text-align: left">
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="service_id1" placeholder="Enter Service ID" required>
                                                </li>
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="Discount1" placeholder="Discount" required>
                                                </li>
                                            </ul>
                                        </ul>
                                        <ul class="list-group" style="text-align: left">
                                            <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(2)">Course 2</li>
                                            <ul id="myDropdown2" class="list-group-item-dropdown" style="text-align: left">
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="service_id2" placeholder="Enter Service ID" required>
                                                </li>
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="Discount2" placeholder="Discount" required>
                                                </li>
                                            </ul>
                                        </ul>
                                        <ul class="list-group" style="text-align: left">
                                            <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(3)">Course 3</li>
                                            <ul id="myDropdown3" class="list-group-item-dropdown" style="text-align: left">
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="service_id3" placeholder="Enter Service ID" required>
                                                </li>
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="Discount3" placeholder="Discount" required>
                                                </li>
                                            </ul>
                                        </ul>
                                        <ul class="list-group" style="text-align: left">
                                            <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(4)">Course 4</li>
                                            <ul id="myDropdown4" class="list-group-item-dropdown" style="text-align: left">
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="service_id4" placeholder="Enter Service ID" required>
                                                </li>
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="Discount4" placeholder="Discount" required>
                                                </li>
                                            </ul>
                                        </ul>
                                        <ul class="list-group" style="text-align: left">
                                            <li class="list-group-item list-group-item-success dropbtn" onclick="myFunction(5)">Course 5</li>
                                            <ul id="myDropdown5" class="list-group-item-dropdown" style="text-align: left">
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="service_id5" placeholder="Enter Service ID" required>
                                                </li>
                                                <li class="list-group-item list-group-item-success">
                                                    <input type="text" class="form-control" id="name" name="Discount5" placeholder="Discount" required>
                                                </li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" name="submit" value="Publish" class="btn btn-primary pull-right" style="margin-left: 10px" />
                                <input type="button" id="more_fields" onclick="add_fields();" value="Add Course" class="btn btn-primary pull-right"  />
                            </form>
                            <script>
                                var course = 5;
                                function add_fields() {
                                    course++;
                                    var objTo = document.getElementById('room_fileds')
                                    var divtest = document.createElement("div");
                                    divtest.innerHTML = '<ul class="list-group" style="text-align: left"><li class="list-group-item list-group-item-success dropbtn" onclick="myFunction('+course+')">Course '+course+'</li><ul id="myDropdown'+course+'" class="list-group-item-dropdown" style="text-align: left"><li class="list-group-item list-group-item-success"><input type="text" class="form-control" id="name" name="service_id'+course+'" placeholder="Enter Service ID" required></li><li class="list-group-item list-group-item-success"><input type="text" class="form-control" id="name" name="Discount'+course+'" placeholder="Discount" required></li></ul></ul>'
                                    objTo.appendChild(divtest)
                                }

                                function myFunction(count) {
                                    document.getElementById("myDropdown"+count+"").classList.toggle("show");
                                }
                                $('.datepicker').datepicker();
                            </script>
                        </div>
                    </div>
                @else
                    
                    @if (Session::has('test'))
                        <style>
                            .active-discount{
                                display: none;
                            }
                        </style>
                    @endif
                    <div class="active-discount" id="active-discount">
                        <style>
                            /*	
                                Side Navigation Menu V2, RWD
                                ===================
                                Author: https://github.com/pablorgarcia
                            */

                            @charset "UTF-8";
                            @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

                            body {
                            font-family: 'Open Sans', sans-serif;
                            font-weight: 300;
                            line-height: 1.42em;
                            color:#A7A1AE;
                            /* background-color:#1F2739; */
                            }

                            h1 {
                            font-size:3em; 
                            font-weight: 300;
                            line-height:1em;
                            text-align: center;
                            color: #4DC3FA;
                            }

                            h2 {
                            font-size:2em; 
                            font-weight: 300;
                            text-align: center;
                            display: block;
                            line-height:1em;
                            padding-bottom: 2em;
                            color: #FB667A;
                            }

                            h2 a {
                            font-weight: 700;
                            text-transform: uppercase;
                            color: #FB667A;
                            text-decoration: none;
                            }

                            .blue { color: #185875; }
                            .yellow { color: #FFF842; }

                            .container th h1 {
                                font-weight: bold;
                                font-size: 1em;
                            text-align: left;
                            color: #53cafa;;
                            }

                            .container td {
                                font-weight: normal;
                                font-size: 1em;
                            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
                                -moz-box-shadow: 0 2px 2px -2px #0E1119;
                                        box-shadow: 0 2px 2px -2px #0E1119;
                            }

                            .container {
                                text-align: left;
                                overflow: hidden;
                                width: 80%;
                                margin: 0 auto;
                            display: table;
                            padding: 0 0 8em 0;
                            /* overflow-x: scroll; */
                            }

                            .container td, .container th {
                                padding-bottom: 1%;
                                padding-top: 2%;
                                padding-left: -1%;  
                            }

                            /* Background-color of the odd rows */
                            .container tr:nth-child(odd) {
                                background-color: #323C50;
                            }

                            /* Background-color of the even rows */
                            .container tr:nth-child(even) {
                                background-color: #2C3446;
                            }

                            .container th {
                                background-color: #1F2739;
                            }

                            .container td { color: #FB667A; }

                            .container tr:hover {
                            background-color: #464A52;
                            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
                                -moz-box-shadow: 0 6px 6px -6px #0E1119;
                                        box-shadow: 0 6px 6px -6px #0E1119;
                            }

                            .container td:hover {
                            background-color: #FFF842;
                            color: #403E10;
                            font-weight: bold;
                            
                            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
                            transform: translate3d(6px, -6px, 0);
                            
                            transition-delay: 0s;
                                transition-duration: 0.4s;
                                transition-property: all;
                            transition-timing-function: line;
                            }

                            @media (max-width: 800px) {
                            .container td:nth-child(4),
                            .container th:nth-child(4) { display: none; }
                            }
                        </style>
                        <h1><span class="blue"></span>Active<span class="blue"></span> <span class="blue">Discount</pan></h1>
                        {!! $discount_active !!}
                    </div>
                    <div class="edit-discount" id="edit-discount" @if (!Session::has('test')) style="display: none;" @endif >
                        
                        <div class="col-md-5">
                            <div class="form-area">
                                <form role="form" method="post" action="{{ route('update_sale') }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <br style="clear:both">
    
                                    <h3 style="margin-bottom: 25px; text-align: center;">Edit Discounts</h3>
                                    @foreach($errors->all() as $message)
                                        {{$message}}
                                    @endforeach
                                    <hr>
                                    <style>
                                        .list-group ul{
                                            display: none;
                                        }
                                        .list-group-item{
                                            cursor: pointer;
                                        }
                                        .list-group-item-dropdown{
                                            margin-left: 40px;
    
                                        }
                                        .show{display: block;}
                                    </style>
                                    <h3 style="margin-bottom: 25px; text-align: center;">Edit End Date</h3>
                                    {!! $edit_discount_field !!}
                                    <br>
                                    <span onclick="closeEdit()" class="btn btn-primary pull-right" style="margin-left: 10px">Cancel</span>
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary pull-right" style="margin-left: 10px" />
                                </form>
                                <script>
                                    var course = 5;
                                    function add_fields() {
                                        course++;
                                        var objTo = document.getElementById('room_fileds')
                                        var divtest = document.createElement("div");
                                        divtest.innerHTML = '<ul class="list-group" style="text-align: left"><li class="list-group-item list-group-item-success dropbtn" onclick="myFunction('+course+')">Course '+course+'</li><ul id="myDropdown'+course+'" class="list-group-item-dropdown" style="text-align: left"><li class="list-group-item list-group-item-success"><input type="text" class="form-control" id="name" name="service_id'+course+'" placeholder="Enter Service ID" required></li><li class="list-group-item list-group-item-success"><input type="text" class="form-control" id="name" name="Discount'+course+'" placeholder="Discount" required></li></ul></ul>'
                                        objTo.appendChild(divtest)
                                    }
    
                                    function myFunction(count) {
                                        document.getElementById("myDropdown"+count+"").classList.toggle("show");
                                    }
                                    $('.datepicker').datepicker();
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function edit() {
                            document.getElementById("active-discount").style.display = 'none';
                            document.getElementById("active-discount").classList.remove("show");
                            document.getElementById("edit-discount").classList.toggle("show");
                        }
                        function closeEdit() {
                            document.getElementById("edit-discount").classList.remove("show");
                            document.getElementById("active-discount").classList.toggle("show");
                        }
                    </script>

                @endif
            </div>

        </div>
    </div>
    <div class="inner-block">
        <div class="market-updates text-center">
        </div>
    </div>
    <div class="inner-block">
        <div class="market-updates text-center">
        </div>
    </div>


@endsection
