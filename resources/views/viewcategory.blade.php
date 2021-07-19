
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
	<div class="container px-4 px-lg-5">
              <div class="heading">
        <h1 class="bg-light text-center text-dark py-2">View ALL Data !!! <a href ="/" class="btn btn-dark pull-left ml-2">Back</a>
            <a href="{{route('add')}}"class=" pull-right mr-2 mb-3"><i class="fa fa-plus pull-right  mb-4" style="font-size: 34px;margin-right: 44px;margin-bottom: 36px;margin-top: 9px;"></i></a>
        </h1>
  </div>
                    
                           <ol>
                               <li>Name:{{$category->name}}</li>
                               <li>Email:{{$category->email}}</li>
                               <li>Number:{{$category->number}}</li>
                               <li>City:{{$category->city}}</li>
                              
                                 
                           </ol>
                            
                        
                    </div>
             
            </div>