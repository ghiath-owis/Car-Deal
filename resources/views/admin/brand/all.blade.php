@extends('layouts.dashboard')
 @section('content')
 <!-- Start content -->
 <div class="content">
                <div class="container">



                    <div class="row">
                        <h3 class="text-center">All Brands</h3>

                        @if(count($categories) != 0)

                            <div class="col-lg-12">
                                <div class="card-box">



                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>BrandName</th>
                                                    <th>BrandModel</th>
                                                

                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($brand as $brands )
                                                <tr>
                                                    <th>{{$brands->id}}</th>
                                                    <td>{{$brands->name}}</td>
                                                    <td>{{$brands->model}}</td>
                                                
                                                    <td>
                                                    <a href="/brand.edit{{$brands->id}}"> <button type="button"
                                                            class="btn btn-success waves-effect w-md waves-light m-b-5">Update</button></a>
                                                            <a href="/brand/delete/{{$brands->id}}">  <button type="button"
                                                            class="btn btn-danger waves-effect w-md waves-light m-b-5"  >Delete</button></a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>

                            
                                    </div>
                                </div>
                            </div><!-- end col -->

                        @else
                                <div class="text-center , alert alert-danger">
                                    <h3> No Data</h3> 
                                </div>
                        @endif

                    </div>
                    <!-- end row -->




                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->


                    <!-- Right Sidebar -->
                    <div class="side-bar right-bar">
                        <a href="javascript:void(0);" class="right-bar-toggle">
                            <i class="zmdi zmdi-close-circle-o"></i>
                        </a>
                        <h4 class="">T`H`E`M`E`L`O`C`K`.`C`O`M`</h4>
                        <div class="notification-list nicescroll">
                            <ul class="list-group list-no-border user-list">
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Michael Zenaty</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="zmdi zmdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-pink">
                                            <i class="zmdi zmdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item active">
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">James Anderson</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item active">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-warning">
                                            <i class="zmdi zmdi-settings"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /Right-bar -->
@endsection