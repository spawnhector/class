<h1>This is the admin login page</h1> 
<a href={{route('welcome')}}>BACK</a> <br>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
@if (isset($fail))
    {{$fail}}
@endif
<form action={{route('login.admin')}} method="post">
    @csrf
    <input type="text" name="email" placeholder="Email"> <br>
    <input type="password" name="password" id="" placeholder="Password"> <br>
    <button type="submit">Submit</button>
</form>