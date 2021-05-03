
@extends('layout')

@section('container')

<div class="col-5 col-sm-6" style="margin:auto;">
<br><br>
<h3 style="font-family:Times New Roman;font-size:35px;text-align: center;">Login User</h3>
@if(Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<form action="loginUser" method="post">
@csrf
<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" required>
</div>
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
</div>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<div class="text-center">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</form>
</div>
@endsection