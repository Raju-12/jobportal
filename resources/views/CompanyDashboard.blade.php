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
<h1 style="text-align:center">Welcome To Company Dashboard</h1>
        
        
            <a href="{{URL::to('/job-post')}}" class="btn btn primary">Create Job Post</a>

            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>Applicant's Image</th>
                          <th>Applicant's Resume</th>
                          <th>Applicant's Skils</th>
                          <th>Actions</th>
                          
                      </tr>
                  </thead> 
                 @foreach($all_applicants as $aplicant)
                 <tbody>
                     <tr>
                         <td><img src="{{URL::to($aplicant->image)}}" style="height:40px;width:40px;"></td>
                         
                        
                         <td>
                              {{ $aplicant->resume }}
                         </td>
                         <td>{{ $aplicant->skil }}</td>
                         <td>
                           <a href="resume/{{ $aplicant->resume }}" download="{{$aplicant->resume}}">
                           <button type="button" class="btn btn-primary">Download 
                           </button>
                           
                           </a>

                         </td>
                         
                        
                        
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
</body>
</html>