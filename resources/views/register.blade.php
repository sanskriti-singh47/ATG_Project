
@extends('layout')

@section('container')
<div class=" col-5 col-sm-6" style="margin:auto;">
<br>
<h3 style="font-family:Times New Roman;font-size:35px;text-align: center;">Regsitration User</h3>
@if(Session::get('register_status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('register_status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<form action="registerUser" method="post" return="false">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name" required>
</div>
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
@csrf
<div class="form-group">
<label>Email</label>
<input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" required>
</div>
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Password</label>
<input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter Password" required>
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