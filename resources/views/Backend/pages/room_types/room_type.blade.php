@extends('master')

@section('content')
<h1>Room_type</h1>

<a href="{{route('room_type.Details')}}" class ="btn btn-success" > Add Rooms </a>

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Room image</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($room_types as $key=>$data)

        <tr>
            <td>{{$key + $room_types->firstItem()}}</td>
            <td>
            <img src="{{url('/uploads/'.$data->room_image)}}"style="height:80px; width:100px"alt="My Image">
            </td>
            <td>{{$data->name}}</td>
            <td>{{$data->amount}}</td>
            
            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="{{route('admin.room.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('admin.room.view',$data->id)}}" class="btn btn-outline-success">View</a>
            </td>
        </tr>
        @endforeach

    </tbody>
    
    </table>
    {{$room_types->links()}}

@endsection