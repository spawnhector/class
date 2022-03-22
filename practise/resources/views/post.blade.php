<h1>This Is The Post Page</h1>
<form action={{ route('post.create') }} method="post">
    @csrf
    <input type="text" name="title" id="" placeholder="title"><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Submit</button> <br>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h2>
                {{$error}}
            </h2>
        @endforeach
    @else
        @if (isset($title) && isset($content))
        <h3>
            {{$user}}
            {{ 'This is the post title: '.$title.'.' }} <br>
            {{ 'This is the post content: '.$content.'.' }}
        </h3>
        @endif
    @endif
</form>