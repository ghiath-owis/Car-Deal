@extends('layouts.dashboard')
@section('content')
<!-- Start content -->
<div class="content">
                <div class="container">

                    <div class="row">

                        <div class="card-box">
                            <h3 class="text-center">Edit Brand</h3>
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"
                                action="/brand.update{{$brand->id}}">
                                @csrf
                                <div class="row">


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name:</label>
                                        <div class="col-md-10">

                                            <input required type="string" type="text" class="form-control"
                                                placeholder="name..." value="{{$brand->name}}" name="name">



                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> BrandModel: </label>
                                        <div class="col-md-10">
                                            <input required type="string" type="text" class="form-control"
                                                placeholder="Model..."value="{{$brand->model}}" name="model">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Logo:</label>
                                        <div class="col-md-10">
                                            
                                        <input required type="image" class="form-control" name="logo"
                                                placeholder="address" src="Uploaded/image/brand/{{$brand->logo}}">

                                                

                                        </div>
                                    </div>





                                    <button type="submit"
                                        class="btn btn-primary waves-effect w-md waves-light ">Submit</button>
                            </form>
                        </div>

                    </div>
                    
 

                    <!-- end row -->
@endsection