<h1>this is the store page</h1>
<form action="storebrand" method="post">
    @csrf
    <h3>Add Brand</h3>
    <input type="text" name="brandss_nm" id="">
    <input type="text" name="brandss_desc" id="">
    <br>
    <button type="submit">Submit</button>
</form>
<form action="storevhcl_type" method="post">
    @csrf
    <h3>Vechile Type</h3>
    <input type="text" name="vhcl_type_nm" id="">
    <select name="brandf_id" id="">
        @foreach ($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->brand_nm}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Submit</button>
</form>
<form action="storemodel" method="post">
    @csrf
    <h3>Vechile Model</h3>
    <input type="text" name="vhcl_model_nm" placeholder="vechile model name" id="">
    <input type="text" name="year" placeholder="year" id="">
    <input type="text" name="color" placeholder="color" id="">
    <input type="text" name="cost" placeholder="cost" id="">
    <input type="text" name="condition" placeholder="condition" id="">
    <input type="text" name="milage" placeholder="milage" id="">
    <input type="text" name="capacity" placeholder="capacity" id="">
    <input type="text" name="driver_side" placeholder="driver side" id="">
    <input type="text" name="trans_type" placeholder="trans type" id="">
    <select name="vhcl_type_id" id="">
        @foreach ($vchl_type as $vchl_typee)
            <option value="{{$vchl_typee->id}}">{{$vchl_typee->vhcl_type_nm}}</option>
        @endforeach
    </select>
    <br><button type="submit">Submit</button>
</form>

{{-- <form action="storeupdate" method="post">
    <h3>Add Brand</h3>
    <input type="text" name="brandss_nm" id="">
    <input type="text" name="brandss_desc" id="">
    <br>
</form>
<form action="storedelete" method="post">
    <h3>Add Brand</h3>
    <input type="text" name="brandss_nm" id="">
    <input type="text" name="brandss_desc" id="">
    <br>
</form> --}}