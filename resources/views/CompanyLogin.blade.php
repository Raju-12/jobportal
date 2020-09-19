<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="fBCmAHe0RrKFwrbXwh3tda9euXAKbRbiUtfCEnEU">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{url('/login')}}">
           
            <div>
                 <label class="block font-medium text-sm text-gray-700">Email
    
				</label>
 
                 <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="email" name="email" required="required" autofocus="autofocus">
 
            </div>

            <div class="mt-4">
                 <label class="block font-medium text-sm text-gray-700">Password
    
				</label>
 
                 <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password" required="required" autocomplete="current-password">
 
            </div>
            <div class="flex items-center justify-end mt-4">
                 <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                 Login
                </button>
 
            </div>
        </form>
    </div>
</div>
        </div>
    </body>
</html>
 
