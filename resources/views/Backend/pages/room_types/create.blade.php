@extends('master')

@section('content')

<h2> Room Details </h2>

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<form method='POST' action="{{route('room_type.store')}}" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text"name="room_name"required class="form-control" id="name" placeholder="Enter room type">
    </div><br>
    <div class= "form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" class="form-control" id="price" placeholder="Enter Amount">
    </div><br>
    <div>
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control"id="image">
   </div>
   <div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>

@endsection