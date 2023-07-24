<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <link rel="icon" href="{{ asset('img/tklogo.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="hero min-h-screen bg-base-200" style="background-image: url(https://wallpaperaccess.com/full/8642986.gif);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content">
                <div class="card w-96 shadow-2xl bg-base-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title text-center">Register now!</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-control">
                            <label class="label"><span class="label-text">Name</span></label>
                            <input placeholder="name" class="input input-bordered" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="form-control">
                            <label class="label"><span class="label-text">Email</span></label>
                            <input placeholder="email" class="input input-bordered" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                        <div class="form-control">
                            <label class="label"><span class="label-text">Password</span></label>
                            <input placeholder="password" class="input input-bordered" type="password" name="password" required autocomplete="new-password" />
                        </div>
                        <div class="form-control">
                            <label class="label"><span class="label-text">Confirm Password</span></label>
                            <input placeholder="conrifm password" class="input input-bordered" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Register</button>
                        </div>

                        <div class="mt-8 divider">Already registered?</div>
                        <a class="btn btn-block" href="{{ route('login') }}">Login</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
