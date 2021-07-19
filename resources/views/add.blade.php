<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>PhoneBook</title>
</head>
<body>
  <div class="container col-lg-6 bg-light py-5 my-5">
    <!--<div class="getstart">-->
 <div class="heading">
        <h1 class="bg-light text-center text-dark py-2 mr-5">Add New Contact </h1>
        <a href="{{ route('allcontact') }}" class="pull-left ml-2 btn btn btn-sm btn-success"> Next </a>
        @if (Session::has('success'))
  <div class="alert alert-success" style="margin-top:0" role="alert">
    <center><strong>Success: </strong>{{ Session::get('success')}}</center>
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
  <form action="{{route('store')}}" method="POST" class="text-center py-3">
  	@csrf
  	<div class="form-froup mt-2">
  		<input type="text" name="name" placeholder=" Enter Your Name" class="form-control text-center col-lg-6" style="margin-left: 174px" required="true">
  		<br>
  		
  	</div>
  	<div class="form-froup">
  		<input type="email" name="email" placeholder=" Enter Your Email" class="form-control text-center col-lg-6" style="margin-left:174px" required="true"><br>
  		
  	</div>
  	<div class="form-froup">
  		<input type="tel" name="number" placeholder=" Enter Your Contact" class="form-control text-center col-lg-6" style="margin-left: 174px" required="true"><br>
  		
  	</div>
  	<div class="form-froup">
  		<input type="text" name="city" placeholder=" Enter Your City Name" class="form-control text-center col-lg-6" style="margin-left: 174px" required="true"><br>
  		
  	</div>
  	
  	
  	 	
  		<button type="submit" class="btn btn-info" name="submit"> Submit </button>
  		

  	</div>
  	
  </form>
