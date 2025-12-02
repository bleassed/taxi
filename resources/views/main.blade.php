@extends('layouts.layout')

@section('title', 'main page')

@section('main')


<div class = "wrapper">


<form action="{{ route('booking.store') }}" method="POST" class = "form">
  @csrf
  <div class="mb-3">
    <label for="exampleInputTel" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" aria-label="Format: 123-456-7890">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div> 
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="mail" id="mail">
  </div>
  <div class="mb-3" style="display: flex; align-items: flex-start;">
    <div style="margin-right: 20px; width: 50%;">
        <label for="adr_from" class="form-label">adr_from</label>
        <input type="text" class="form-control" id="adr_from" name="adr_from" style="width: 100%;">
    </div>
    <div style="width: 50%;">
        <label for="adr_to" class="form-label">adr_to</label>
        <input type="text" class="form-control" id="adr_to" name="adr_to" style="width: 100%;">
    </div>
  </div>
  <div class="mb-3">
      <label for="datetime" class="form-label">select a date for booking</label>
      <input type="datetime-local" id="date_time" name="date_time" min="2025-12-3T00:00" max="2026-06-14T00:00" class="form-control" />
  </div> 
  <div class="mb-3">
      <label for="passengers" class="form-label">select a date for booking</label>
      <input type="number" id="passengers" name="passengers" min="1" max="3" class="form-control" />
  </div> 

  <input type="submit" class="btn btn-primary">book</button>
</form>




</div>


@endsection('main')







