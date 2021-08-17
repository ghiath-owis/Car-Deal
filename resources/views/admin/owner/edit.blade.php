@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header"><center> <h1>Edit Owner</h1>  </center></div>
            </div>
            <p></p>
                <form action="/owner/edit/{{$owner->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" placeholder="Enter Nameame" id="name" name="name" value="{{$owner->name}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
         </div>
    </div>
</div>

@endsection