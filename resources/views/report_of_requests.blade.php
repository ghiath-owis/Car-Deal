@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Shopping Cart			
							</h1>	
							<p class="text-white link-nav mt-3"><a href="index.html">Return To Home Page </a>  <span class="lnr lnr-arrow-right"></span></p>
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
								<h2 class="mb-30">Shopping Cart</h2>
								<div class="progress-table-wrap">
									<div class="progress-table">
										<div class="table-head">
											
											<div class="image">Image</div>
											<div class="product-details">Product Details</div>
											<div class="price">Price</div>
											<div class="quantity">Quantity</div>
											<div class="total">Total</div>
											<div class="remove">Remove</div>
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

			<section class="blog-posts-area pb-120">
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

									<div class="single-widget search-widget mb-0">
										<h4 class="title">Calculate Shipping</h4>
										<select class="form-control mb-3">
											  <option>Select Your Country</option>
											  <option>China</option>
											  <option>England</option>
											  <option>Turkey</option>
											  <option>Ireland</option>
											  <option>Russia</option>
										</select>
										<select class="form-control mb-3">
											  <option>Select State/City</option>
											  <option>London</option>
											  <option>Beijing</option>
											  <option>Istanbul</option>
											  <option>Ireland</option>
											  <option>Moscow</option>
										</select>
										<input type="text" placeholder=" PostCode/Zip" class="mb-3 form-control">
										  <button type="submit" class="btn-block btn btn-danger">Calculate Shipping</button>								
									</div>			

								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->

@stop