<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="ThFbJwonsFJfBPJfBCiFlqC1MdvodphOYx3UIaot">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">



 </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
 
    <p class="alert-success">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <form method="POST" action="{{url('/add-detail')}}">
    @csrf
        
        <div>
             <label class="block font-medium text-sm text-gray-700">JobTitle
             </label>
             <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="title" required="required" autofocus="autofocus" autocomplete="name">

        </div>
         <div>
             <label class="block font-medium text-sm text-gray-700">JobDescription
             </label>
              <textarea  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="description" required="required" autofocus="autofocus" autocomplete="name"></textarea>

        </div>
        <div>
             <label class="block font-medium text-sm text-gray-700">Salary
             </label>
             <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="salary" required="required" autofocus="autofocus" autocomplete="name">

        </div>
        <div>
             <label class="block font-medium text-sm text-gray-700">Location
             </label>
             <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="location" required="required" autofocus="autofocus" autocomplete="name">

        </div>
        <div>
             <label class="block font-medium text-sm text-gray-700">Country
             </label>
             <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="country" required="required" autofocus="autofocus" autocomplete="name">

        </div>

        
        <div class="flex items-center justify-end mt-4">
             <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
        Register
        </button>

        </div>
    </form>
    </div>
</div>
</div>
        <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>
 
