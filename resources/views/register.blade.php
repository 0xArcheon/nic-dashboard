@extends('layout')
@section('title','Register')
@section('content')
    <div class='container'>
    <form style="width: 500px" class="ms-auto me-auto mt-5" >
   <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
    </div>
@endsection 