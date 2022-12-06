@extends('master')

@section('content')
<h1>Hotel</h1>

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<form method='post' action="{{route('hotel.store')}}">
     @csrf
     <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text"name="name" class="form-control" id="name" placeholder="Enter Hotel Name">
    </div>
    <div class= "form-group">
        <label for="email">Enter Email</label>
        <input type="email" name="email" class="form-control" id="price" placeholder="Enter Email">
    </div>
    <div class= "form-group">
        <label for="address">Enter Address</label>
        <input type="text" name="address" class="form-control" id="price" placeholder="Enter Address">
    </div>
    <div class= "form-group">
        <label for="contact no">Enter Contact No</label>
        <input type="number" name="contact" class="form-control" id="price" placeholder="Enter Contact No">
    </div>
    <div class= "form-group">
        <label for="city">Enter City</label>
        <input type="text" name="city" class="form-control" id="price" placeholder="Enter City">
    </div>
   <div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>




@endsection