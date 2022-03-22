<h1>This is the admin registration page</h1>
<a href={{route('welcome')}}>BACK</a>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <h3>{{$error}}</h3>
    @endforeach
@endif
<form action={{ route('register.admin.new') }} method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Name"> <br>
    <input type="text" name="username" id="" placeholder="Username"> <br>
    <input type="email" name="email" id="" placeholder="Enter Email"> <br>
    <input type="password" name="password" id="" placeholder="Enter Password"> <br>
    <input type="password" name="confirm-password" id="" placeholder="Confirm Password"> <br>
    <input type="submit" placeholder="Submit">
</form>