<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
</head>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About TK10 Admin 
This is a web application that using Laravel 10 framework and Daisy UI template.

References:
1. https://www.itsolutionstuff.com/post/laravel-10-socialite-login-with-google-account-exampleexample.html
2. https://daisyui.com/


## Cloning

1. Clone the repository.
```
git clone https://github.com/atikahas/tk10_admin_daisyui.git
```

2. Install Package
```
npm install
```

3. If run local
```
npm run dev
```

4. But, if on server
```
npm run build
```

## Setup Google ID
Now you have to set app id, secret and call back url in config file so open config/services.php and set id and secret this way:

config/services.php
```
return [
    ....
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],
]
```

Then you need to add google client id and client secret in .env file:
```
GOOGLE_CLIENT_ID=xyz
GOOGLE_CLIENT_SECRET=123
GOOGLE_REDIRECT=http://localhost:8000/auth/google/callback
```

## Run local
```
php artisan serve
```