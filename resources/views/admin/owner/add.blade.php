@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header"><center> <h1>Add Owner</h1>  </center></div>
            </div>
            <p></p>
                <form action="{{route('store-owner')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="first_name">First Name:</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" id="first_name" name="first_name">
                    </div>

                    <div class="form-group">
                      <label for="last_name">Last Name:</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" id="last_name" name="last_name">
                    </div>

                    <div class="form-group">
                    <label for="phone">Phone: </label>
                    <input type="number" class="form-control" placeholder="Enter Price" id="phone" name="phone">
                  </div>

                  <div class="form-group">
                      <label for="facebook">FaceBook:</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" id="facebook" name="facebook">
                    </div>

                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" id="email" name="email">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
         </div>
    </div>
</div>

@endsection