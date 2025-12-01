@extends('layouts.layout')

@section('title', 'main page')

@section('main')


<div class = "wrapper justify-content-center">


<form class = "form">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="tel" class="form-control" id="exampleInputTel1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>








@endsection('main')







