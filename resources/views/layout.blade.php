
<html>
<head>
<title>Hostel website</title>
<style>
.container{
background-color:#FFEBCD;
height:70%;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background:#FFF8DC;">
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#DC143C">
<a class="navbar-brand" href="/" style="color:black;font-family:Georgia;font-size:40px;">Hotel </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
</div>
<div class="navbar-nav ml-auto">
@if(Session::get('user'))
<a class="nav-item nav-link active" href="#" style="font-family:Georgia;font-size:25px;">Welcome, {{Session::get('user')}}</a>
<a class="nav-item nav-link active" href="/logout" style="font-family:Georgia;font-size:25px;">Logout</a>
@else
<a class="nav-item nav-link active" href="/login" style="font-family:Georgia;font-size:25px;">Login</a>
<a class="nav-item nav-link active" href="/register" style="font-family:Georgia;font-size:25px;">Register</a>
@endif
</div>
</div>
</nav>
<br>
</header>
<br>
<div class="container d-flex justify-content-center">
@if(Session::get('user'))
<h1 style="font-family:Times New Roman;font-size:50px;margin:auto;">Welcome !!<br>{{Session::get('user')}}</h1>
@else
@yield('container')
@endif
</div>
<!-- <footer class="container"></footer> -->
</body>
</html>