 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Dashboard | Home</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

   <div class="container">
       <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">

                <h4>Doctor Dashboard</h4>

   <table class="table table-striped table-inverse table-responsive">
       <thead class="thead-inverse">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Hospital</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
       </thead>
                <tbody>
                
                    
                   <tr>
                    <th >{{Auth::guard('doctor')->user()->name}}</th>
                     <td >{{Auth::guard('doctor')->user()->hospital}}</td>
                    <td >{{Auth::guard('doctor')->user()->email}}</td>
                    <td>
                        <a href="{{route('doctor.logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{route('doctor.logout')}}" method="post" class="d-none" id="logout-form">@csrf</form>
                    </td>
                    </tr>
                </tbody>
    </table>


            </div>
       </div>
   </div>
    
</body>
</html>