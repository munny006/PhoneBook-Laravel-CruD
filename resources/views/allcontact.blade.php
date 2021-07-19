<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>PhoneBook</title>
</head>
<body>

  <div class="container py-5 my-5">

  <!--laravel session default code-->
    @if (Session::has('success'))
    <div class="alert alert-success" style="margin-top:4.9em" role="alert">
        <center><strong>Success: </strong>{{ Session::get('success')}}</center>
    </div>
@endif
     @if (Session::has('error'))
    <div class="alert alert-error" style="margin-top:4.9em" role="alert">
        <center><strong>Success: </strong>{{ Session::get('error')}}</center>
    </div>
@endif
@if (count($errors) >0)
    <div class="alert alert-danger"style="margin-top:4.9em" role="alert">
        <strong>Errors:</strong>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
    <!--<div class="getstart">-->
 <div class="heading">
        <h1 class="bg-light text-center text-dark py-2">WelCome  !!! <a href ="/" class="btn btn-dark pull-left ml-2">Back</a>
            <a href="{{route('add')}}"class=" pull-right mr-2 mb-3"><i class="fa fa-plus pull-right  mb-4" style="font-size: 34px;margin-right: 44px;margin-bottom: 36px;margin-top: 9px;"></i></a>
        </h1>
  </div>
   
        <table class="table table-bordered text-center text-dark">
            <tr class="text-center">
                <th>SL</th>
                 <th>Name</th>
                  <th>Email</th>
                   <th>Number</th>
                   <th>City Name</th>
                  <th>Action</th>

            </tr>

        @foreach($category as  $row)
         <tr class="text-center">
                <td>{{$row->id}}</td>
                 <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                   <td>{{$row->number}}</td>
                   <td>{{$row->city}}</td>
                  
                    <td>
                        <a href="{{URL::to('update/'.$row->id)}}" class="btn btn-info btn btn-sm">Update</a>
                         <a href="{{URL::to('delete/'.$row->id)}}"class="btn btn-danger btn btn-sm">Delete</a>
                         <a href="{{URL::to('view/'.$row->id)}}" class="btn btn-dark btn btn-sm"> View </a>
                        
                          

                    </td>

            </tr>
          @endforeach
          
        </table>

        
  
   <!-- <div class="back bg-light py-2">
        <a href=""class="btn btn-primary ml-3">Back</a>
        <a href=""class="btn btn-dark pull-right mr-2">Next</a>
        
    </div>
 
</div>-->

<!--</div>-->












        <script src="../js/jquery2.js"></script>
        <script src="../js/munny.js"></script>
        <script src="../js/bootstrap.min.js"></script>
 
    </body>

   </html>