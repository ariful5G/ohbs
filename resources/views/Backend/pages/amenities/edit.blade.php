@extends('master')

@section('content')
<h1>Amenities Update</h1>

<form method='post' action="{{route('admin.amenity.update',$amenity->id)}}">
     @csrf
@method('put')
     <div class="form-group">
        <label for="name">Amenities Name</label>
        <select name="name" id="" class="form-control">
                <option value="parking">Car Parking</option>
                <option value="free-wifi">Free-wifi</option>
                <option value="airport-drop & pick-up">Airport Drop & Pick-up</option>
                <option value="free-breakfast">Free breakfast</option>
        </select>
     </div>
     <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>




@endsection