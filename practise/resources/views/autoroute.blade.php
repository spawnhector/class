@if ($request->session()->has('success'))
    {{$request->session()->get('success')}}
@endif

<h1> Lets test auto route</h1>
<form action="{{route('autoroute')}}" method="get">
<input type="text" name="test" id="" value="test">
<input type="submit" name="test" id="" value="Submit">
</form>