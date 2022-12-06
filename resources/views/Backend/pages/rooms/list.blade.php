@extends('master')

@section('content')
<h1>Room List</h1>
<a href="{{route('rooms.create')}}"class="btn btn-success">Add Rooms</a>
<table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Room image</th>
            <th scope="col">Name</th>
            <th scope="col">Room Id</th>
            <th scope="col">Room No</th>
            <th scope="col">Room Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Amenities Id</th>
            <th scope="col">Amenities</th>
            <th scope="col">Amenities Description</th>
            <th scope="col">No of Accomodate</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($room as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>
            <img src="{{url('/uploads/'.$data->room_image)}}"style="height:80px; width:100px"alt="My Image">
            </td>
            <td>{{$data->room_name}}</td>
            <td>{{$data->room_id}}</td>
            <td>{{$data->room_no}}</td>
            <td>{{$data->room_type}}</td>
            <td>{{$data->amount}}</td>
            <td>{{$data->amenities_id}}</td>
            <td>{{$data->amenities}}</td>
            <td>{{$data->amenities_description}}</td>
            <td>{{$data->accomodate}}</td>
            <td>
                <a href="{{route('room.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('room.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('room.view',$data->id)}}" class="btn btn-outline-success">View</a>
            </td>
        </tr>

     @endforeach
    </tbody>
    
    </table>
 

@endsection