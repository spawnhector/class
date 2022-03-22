<div>
    <!DOCTYPE html>
<html lang="en" class="border-l">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        * {
            margin:0;
            padding:0;
        }
        .input {
            transition: border 0.2s ease-in-out;
            min-width: 280px
        }
        .input:focus+.label,
        .input:active+.label,
        .input.filled+.label {
            font-size: .75rem;
            transition: all 0.2s ease-out;
            top: -0.3rem;
            color: #6b7280;
        }
        .label {
            transition: all 0.2s ease-out;
            top: 0.4rem;
            left: 0;
        }

      

    .alert {
    min-width: 150px;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 3px;
    }
    .alert-success {
    background-color: #91cf91;
    border-color: #80c780;
    color: #3d8b3d;
    }
    .alert-warning {
    background-color: #ebc063;
    border-color: #e8b64c;
    color: #a07415;
    }
    .alert-danger {
    background-color: #e27c79;
    border-color: #dd6864;
    color: #9f2723;
    }
    .alert p {
    padding: 0;
    margin: 0;
    }
    .alert i {
    padding-right: 5px;
    vertical-align: middle;
    font-size: 24px;
    }
    .alert .close-alert {
    -webkit-appearance: none;
    position: relative;
    float: right;
    padding: 0;
    border: 0;
    cursor: pointer;
    color: inherit;
    background: 0 0;
    font-size: 21px;
    line-height: 1;
    font-weight: bold;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
    filter: alpha(opacity=40);
    opacity: 0.4;
    }
    .alert .close-alert:hover {
    filter: alpha(opacity=70);
    opacity: 0.7;
    }

    .shadow-1, .alert {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .shadow-2, .alert:hover {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    </style>
</head>
<body>
<header>
    <a aria-label="Prospect" class="z-10 mt-9 absolute md:ml-12 ml-9" href="/">
        
    </a>
</header>
<div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl font-bold leading-normal" >Sign in</h1>
        <p class="text-sm leading-normal">Stay updated on your professional world</p>
        @if (session('accCreated'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close-alert">×</button>
                <p>{{ session('accCreated') }}</p>
            </div>
        @endif
        @error('invalid') <span class="error">{{ $message }}</span> @enderror
        <div class="space-y-5 mt-5">
            <div class="mb-4 relative">
                <input wire:model='email' id="email" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                <label for="email" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-500 text-base mt-2 cursor-text">Email or Phone</label>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="relative flex items-center border border-gray-500 focus:ring focus:border-blue-500 rounded">
                <input wire:model='password' id="password" class="w-full rounded px-3 pt-5 outline-none pb-2 focus:outline-none active:outline-none input active:border-blue-500" type="password"/>
                <label for="password" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-500 text-base mt-2 cursor-text">Password</label>
                <a class="text-sm font-bold text-blue-700 hover:bg-blue-100 rounded-full px-2 py-1 mr-1 leading-normal cursor-pointer">show</a>
            </div>
            @error('password') <span class="error">{{ $message }}</span> @enderror
            <div class="-m-2">
                <a class="font-bold text-blue-700 hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Forgot password?</a>
            </div>
            <button wire:click='login' class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium">Sign in</button>
        </div>
    </div>
    <p>New to Prospect?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="{{route('register')}}">Join now</a></p>
</div>
<script>
    $(".close-alert").click(function(e){
    $(this).parent().remove();
    e.preventDefault();
    });

</script>
</body>
</html>
</div>
