<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="ThFbJwonsFJfBPJfBCiFlqC1MdvodphOYx3UIaot">

        <title>Laravel</title>


     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 </head>
    <body>
<h1 style="text-align:center">Show All Job List</h1>
        
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
          <thead>
              <tr>
                  <th>Job Title</th>
                  <th>Job Description</th>
                  <th>Country</th>
                  <th>Location</th>                  
                  <th>Salary</th>
                  <th>Action</th>  
              </tr>
          </thead> 
	    @foreach($all_jobs as $job)
	         <tbody>
	             <tr>
	                 <td>{{$job->title}}</td>
	                 <td>{{$job->description}}</td>
	                 <td>{{$job->country}}</td>
	                 <td>{{$job->location}}</td>  
	                 <td>{{$job->salary}}</td>  
	                 
	                 <form method="post" action="{{url('apply-job')}}" enctype="multipart/form-data">
	                 @csrf
	                 <td>
	                 	<input type="submit" value="Apply" name="" class="btn btn-primary">
	                 </td> 
	                 </form> 
	             </tr>
	         </tbody>
	       @endforeach 
         
         
      </table>            
    </div>
</div><!--/span-->

</div>

        <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
@include('sweetalert::alert')
</body>
</html>