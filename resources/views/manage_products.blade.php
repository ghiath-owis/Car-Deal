@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Manage Products				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Manage Products</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-3 sidebar">
							<div class="single-slidebar-profile">
								<figure>
                                    <a href="#" class="employer-dashboard-thumb"><img src="img/avatar_15.jpg" alt=""></a>
                                    <figcaption>
                                        <h2>Hellan Rebecca</h2>
                                        <p>Super Samurai Hyundai Los Angeles, Usa</p>
                                         <ul class="share_link">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
                                    </figcaption>
                                </figure>
							</div>
							<div class="single-slidebar">
								
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex text_active" href="user_profile.html"><p><i class="fa fa-user-o pr-2"></i>  User Profile</p></a></li>
									<li><a class="justify-content-between d-flex" href="upload_products.html"><p><i class="fa fa-file-word-o pr-2"></i>  Upload Products</p></a></li>
									<li><a class="justify-content-between d-flex" href="manage_products.html"><p><i class="fa fa-heart-o pr-2"></i> Manage Products</p></a></li>
									<li><a class="justify-content-between d-flex" href="product_notification.html"><p><i class="fa fa-briefcase pr-2"></i>  Notifications</p></a></li>
									<li><a class="justify-content-between d-flex" href="product_message.html"><p><i class="fa fa-bell-o pr-2"></i>  Messages</p></a></li>
									<li><a class="justify-content-between d-flex" href="favourite_products.html"><p><i class="fa fa-id-card-o pr-2"></i>  Favourite Products</p></a></li>
                                    <li><a class="justify-content-between d-flex" href="withdraw.html"><p><i class="fa fa-money pr-2"></i>   Withdraws</p></a></li>
									<li><a class="justify-content-between d-flex text-active" href="change_password.html"><p><i class="fa fa-lock pr-2"></i> Change Password</p></a></li>
									<li><a class="justify-content-between d-flex" href="index.html"><p><i class="fa fa-sign-out pr-2"></i> Logout</p></a></li>
								</ul>
							</div>							

						</div>
						<div class="col-lg-9 post-list">
							<div class="profile_job_content col-lg-12">
								<div class="headline">
									<h3>Manage Products</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-4 col-sm-6 col-12 gp_products_item">
											<div class="gp_products_inner">
												<div class="gp_products_item_image">
													<a href="#">
														<img src="img/slider4.png" alt="gp product 001" />
													</a>
												</div>
												<div class="gp_products_item_caption">
													<ul class="gp_products_caption_name text-center">
														<li><a href="#">Upload New Product</a></li>
														<li><p class="pt-2">Lorem ipsum dolor sit amet adipisicing elit,consectetur elit labore.</p></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-12 gp_products_item">
											<div class="gp_products_inner">
												<div class="gp_products_item_image">
													<a href="#">
														<img src="img/featured/product1.jpg" alt="gp product 001" />
													</a>
												</div>
												<div class="gp_products_item_caption">
													<ul class="gp_products_caption_name">
															<li>
																<a href="#">Hyundai Sport <span class="mr-1 pull-right">$ 258</span></a>
																
															</li>
															<li><a href="#">Model 2018 , <span><i class="fa fa-map-marker mr-1"> Colorada, USA</i></span></a>
															</li>
															<li><a href="#"><i class="fa fa-road mr-1"></i>500 Km <span class="pull-right"> <i class="fa fa-tachometer mr-1"></i>300 Miles</span></a>
															</li>
														</ul>
														<ul class="gp_products_caption_rating mt-2">
															<li class=""><a class="" href="#">Book Now</a></li>
															<li class="pull-right"><i class="fa fa-star-half-o"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															
														</ul>
												</div>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-12 gp_products_item">
											<div class="gp_products_inner">
												<div class="gp_products_item_image">
													<a href="#">
														<img src="img/featured/product2.jpg" alt="gp product 001" />
													</a>
												</div>
												<div class="gp_products_item_caption">
													<ul class="gp_products_caption_name">
															<li>
																<a href="#">Hyundai Sante Sport <span class="mr-1 pull-right">$ 268</span></a>
																
															</li>
															<li><a href="#">Model 2018 , <span><i class="fa fa-map-marker mr-1"> Colorada, USA</i></span></a>
															</li>
															<li><a href="#"><i class="fa fa-road mr-1"></i>500 Km <span class="pull-right"> <i class="fa fa-tachometer mr-1"></i>300 Miles</span></a>
															</li>
														</ul>
														<ul class="gp_products_caption_rating mt-2">
															<li class=""><a class="" href="#">Book Now</a></li>
															<li class="pull-right"><i class="fa fa-star-half-o"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															<li class="pull-right"><i class="fa fa-star"></i></li>
															
														</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->

@stop