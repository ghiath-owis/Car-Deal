@extends("layouts.dashboard")
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">



            <div class="row">
                <h3 class="text-center">Log Record </h3>
                <div class="col-lg-12">
                    <div class="card-box">
                        @if (count($logs) != 0)


                            <div class="table-responsive">
                                <table class="table table-striped " id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Action</th>
                                            <th>Vehicle Id</th>
                                            <th>Vehicle Brand</th>
                                            <th>User Id </th>
                                            <th>UserName</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                            <tr>



                                                <th scope="row">{{ $log->id }}</th>
                                                <td>{{ $log->action }}</td>
                                                <td>{{ $log->vehicle_id }}</td>
                                                @foreach ($brands as $brand)
                                                    @if ($brand->id == $log->vehicle->brand_id)
                                                        <td>{{ $brand->name }}</td>
                                                    @endif
                                                @endforeach



                                                <td>{{ $log->client_id }} </td>
                                                <td>{{ $log->client->username }}</td>
                                                <td>{{ $log->date }}</td>



                                            </tr>


                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 mt-30">
										<nav aria-label="...">
										  <ul class="text-center">
											{{$logs->links()}}
										  </ul>
										</nav>
									</div>
								</div>
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
                <h4 class="___class_+?12___">T`H`E`M`E`L`O`C`K`.`C`O`M`</h4>
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
