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
  <section id="getstarted" class="py-5 text-center text-light">
    <div class="dark-overlay">
      <div class="container">
      <div class="row">
        <!--<div class="col-md-6 class">
          <h1>PhoneBook</h1>
        <form class="form" action="" method="POST">
          <div class="form-group text-center">
            <input type="text" name="email" placeholder="Enter your Email" class="form-control text-center">
            
          </div>
          <div class="form-group text-center">
            <input type="password" name="password" placeholder="Enter your password" class="form-control text-center">
            
          </div>
          <input type="submit" name="submit" value="Log In" class="btn btn-info">
          
        </form>
        </div>-->
        <div class="login-box">
  <h2>PhoneBook</h2>
  <a href="{{route('add')}}" class="btn btn-primary"> Add Contact</a>
  <a href="{{route('allcontact')}}" class="btn btn-success"> All Contact</a>
</div>
        
      </div>
      </div>
      
    </div>
    
  </section>

      












      <script src="../js/jquery2.js"></script>
        <script src="../js/munny.js"></script>
        <script src="../js/bootstrap.min.js"></script>
 
    </body>

   </html>