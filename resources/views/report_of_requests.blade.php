@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">

								Your Previous Request
							</h1>
							<p class="text-white link-nav mt-3"><a href="\"> Home  </a>  <span class="lnr lnr-arrow-right"></span></p>
						</div>

					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start Shopping Cart Area -->
			<section class="cart_area mb-30 pt-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="cart_content col-lg-10">
							<div class="cart-top-border">
<<<<<<< HEAD
								<h2 class="mb-30">Report Of Requests</h2>
=======
								<h2 class="mb-30">Your Request Table</h2>
>>>>>>> mohamad
								<div class="progress-table-wrap">
									<div class="progress-table">
										<div class="table-head">

											<div class="image">Id</div>
											<div class="product-details">Status</div>
											<div class="price">Date</div>
											<div class="quantity">vehicle_ID</div>
											
<<<<<<< HEAD
											<div class="image">ID</div>
											<div class="product-details">Car Brand</div>
											<div class="quantity">Model</div>
											<div class="price">Price</div>
											<div class="total">Date</div>
											<div class="remove">Status</div>
										</div>
										<div class="table-row">
											
											<div class="image"> <img src="img/shopping-cart1.jpg" alt="flag"></div>
											<div class="product-details">	Chomok Website Mock Up</div>
											<div class="price">$15.00</div>
											<div class="quantity">2</div>
											<div class="total">$30.00</div>
											<div class="remove"><a href="#"><i class="fa fa-times"></i></a></div>
										</div>
										<div class="table-row">
											
											<div class="image"> <img src="img/shopping-cart1.jpg" alt="flag"></div>
											<div class="product-details">	Chomok Website Mock Up</div>
											<div class="price">$15.00</div>
											<div class="quantity">2</div>
											<div class="total">$30.00</div>
											<div class="remove"><a href="#"><i class="fa fa-times"></i></a></div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End Shopping Cart Area -->

			<!-- <section class="blog-posts-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="cart_content col-lg-10">
							<div class="row">
								<div class="col-lg-8 post-list blog-post-list">
									<div class="single-widget category-widget">
										<h3 class="title text-center">Cart Totals</h3>
										<ul>
											<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Cart Subtotal</h6> <span>$74.00</span></a></li>
											<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Shipping</h6> <span>$15.00</span></a></li>
											<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Cart Total</h6> <span>$89.00</span></a></li>
											<li><button class="btn btn-success btn-block">Proceed to Checkout</button></li>
										</ul>
									</div>																					
								</div>
								<div class="col-lg-4 sidebar">
									<div class="single-widget search-widget">
										  <h4 class="title">Redeem Coupon</h4>
										  <input type="text" placeholder="Enter Coupon Code" class="form-control mb-3">
										  <button type="submit" class="btn-block btn btn-primary">Apply Coupon Code</button>								
									</div>
=======

										</div>
                                        @foreach ( $report as $rep)


										<div class="table-row">

											<div class="image"> {{$rep->id}}</div>
											<div class="product-details">{{$rep->status}}</div>
											<div class="price">{{$rep->date}}</div>
											<div class="quantity">{{$rep->vehicle_id}}</div>
>>>>>>> mohamad


										</div>

                                        @endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<<<<<<< HEAD
			
 -->
@stop
=======

@stop
>>>>>>> mohamad
