@extends('master')

@section('content')


	<h2>User Registration form</h2>
	<form method="POST" action="{{route('user.store')}}">

	@if($errors->any())
    	@foreach($errors->all() as $message)
        	<p class="alert alert-danger">{{$message}}</p>
        @endforeach
    @endif

	@csrf

		<!-- <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Your First Name"><br>
        </div> -->
		First Name: <input type="text"name= "FirstName"class="form-control"> <br>
		Last Name: <input type="text" name= "LastName" class="form-control"> <br>
		Email: <input type="email" name= "email"class="form-control" required> <br>
		password: <input type="password"name="password" class="form-control"min="4" ><br>
		Date of Birth: <input type="date" name= "birthday"><br><br>
		Gender:<br>
		<input type="radio" name="Gender" value="Male">Male<br>
		<input type="radio" name="Gender"value="Female">Female<br>
		<input type="radio" name="Gender"value="Other">Other<br>
		<input type="submit" value="Register!">
		<input type="reset">
	</form>


</html>
 @endsection