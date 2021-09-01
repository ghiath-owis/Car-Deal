@extends('master')
@section('content')

			<!-- start banner Area -->
			  <div class="banner-area relative">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="banner-content col-lg-10">
							<h1 class="text-white">
								Buy your new car or used car.		
							</h1>
							<p class="text-capitalize">We Have more than a thousand cars for you to choose</p>	
							
						</div>											
					</div>
				</div>
			</div>
			<!-- End banner Area -->	
			<div class="banner_form">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="banner_content rounded">
								<h3 class="text-capitalize text-white mb-3">Find Your Dream Car</h3>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-6 mb-3">
													<select class="form-control-lg">
													  <option>Select Location</option>
													  <option>Location 1</option>
													  <option>Location 2</option>
													</select>
												</div>

												<div class="col-lg-3 col-md-3 col-sm-6 mb-3">
													<select class="form-control-lg">
													  <option>Select Brand</option>
													  <option>Audi</option>
													  <option>BMW</option>
													  <option>Nissan</option>
													  <option>Toyota</option>
													</select>
												</div>

												<div class="col-lg-3 col-md-3 col-sm-6 mb-3">
													<select class="form-control-lg">
													  <option>Select Model</option>
													  <option>Series 1</option>
													  <option>Series 2</option>
													  <option>Series 3</option>
													  <option>Series 4</option>
													</select>
												</div>

												<div class="col-lg-3 col-md-3 col-sm-6 mb-3">
													<select class="form-control-lg">
													  <option>Year Of Model</option>
													  <option>2018</option>
													  <option>2017</option>
													  <option>2016</option>
													</select>
												</div>
										</div>

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												    	<h4 class="mb-3 text-white">Price Range</h4>
												<div class="demo">
												    <div class="range-slider">
												        <input type="range" value="150" min="0" max="500" range="true">
												        <span class="range-value">150 $</span>
												    </div>
												</div>
											</div>

											<div class="col-lg-3 col-md-6 col-sm-6">
												<select class="form-control-lg mb-3">
													  <option>Type Of Car</option>
													  <option>New Car</option>
													  <option>Used Car</option>
													</select>
											</div>

											<div class="col-lg-3 col-md-6 col-sm-6">
												<div class="section_search">
													<a class="btn btn-block btn-lg bg-dark text-white"><i class="mr-3 fa fa-search"></i><span>Search Car</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<section id="welcome" class="section-full">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="section_heading">
							<h3 class="">Welcome To Car Deal</h3>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-12">
						<div class="section_image mt-5">
							<img class="img-fluid" src="img/welcome/welcome1.png" alt="">
						</div>
					</div>
				</div>

				<div class="row text-center">
					<div class="col-lg-6 col-md-6 col-sm-6 mb">
						<div class="section_service text-center">
							<div class="section_image">
								<img class="img-fluid w-25" src="img/welcome/vehicle1.png" alt="">
							</div>
							<div class="section_content">
								<h3 class="text-capitalize">new vehicles</h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
							</div>

						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 mb">
						<div class="section_service text-center">
							<div class="section_image">
								<img class="img-fluid w-25" src="img/welcome/discount.png" alt="">
							</div>
							<div class="section_content">
								<h3 class="text-capitalize">special offers</h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
							</div>

						</div>
					</div>

					

					
				</div>
			</div>
		</section>

		
		<!-- Start product Area -->
			<section class="product-area section-full">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Our vehicles</h1>
								<hr class="lines">
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center mb-30">
						@foreach($vehicles as $vehicle)
						<div class="col-md-4 col-sm-6 col-12 gp_products_item">
							<div class="gp_products_inner">
								<div class="gp_products_item_image">
									<a href="#">
										@foreach($gallery as $image)
										@if($image->vehicle_id==$vehicle->id)
										<img src="Uploaded/image/{{$image->image}}" alt="gp product 001" />
										@break;
										@endif

										@endforeach
									</a>
								</div>
								<div class="gp_products_item_caption">
											<ul class="gp_products_caption_name">

												<li>
													@foreach($brands as $brand)
													@if($brand->id==$vehicle->brand_id)
												<a href="#">{{$brand->name}} {{$brand->model}}</a>
												@endif
												@endforeach
													<a href="#" class="pull-right"><span class="mr-1">$</span>{{$vehicle->price}}</a>
												</li>
												<li><a href="#">Model {{$vehicle->year}} , </a>
													<a href="#" class=""><i class="fa fa-map-marker mr-1"></i>{{$vehicle->origin_country}}</a>
												</li>
												<li>
												<li><a href="#"><i class="fa fa-road mr-1"></i>{{$vehicle->kilometrage}} Km</a>
													<a class="ml-2" href="#"><i class="fa fa-tachometer mr-1"></i>{{$vehicle->max_speed}} Miles</a>
													<a class="ml-2" href="#"><i class="fa fa-car mr-1"></i>{{$vehicle->fuel}}</a>
												</li>
											</ul>
											<ul class="gp_products_caption_rating mt-2">
												<li class=""><a class="" href="#">book now</a></li>
												<li class="pull-right"><i class="fa fa-star-half-o"></i></li>
												<li class="pull-right"><i class="fa fa-star"></i></li>
												<li class="pull-right"><i class="fa fa-star"></i></li>
												<li class="pull-right"><i class="fa fa-star"></i></li>
												<li class="pull-right"><i class="fa fa-star"></i></li>
												
											</ul>
										</div>
							</div>
						</div>
						@endforeach
					
						
				</div>	
			</section>
			<!-- End products Area -->

			<!-- Start callto-action Area -->
			<section class="callto-action-area" id="join">
				<div class="container">
		            <div class="row">
		                <div class="col-md-3 col-sm-6">
		                    <div class="single-promo">
		                        <span class="promo-icon"><img class="img-fluid" src="img/cta/medal.png" alt=""></span>
		                        <h3 class="promo-heading">Top Dealer Award</h3>
		                        <p>Luxury car made BY professionals with 5 years of work experience.</p>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-6">
		                    <div class="single-promo">
		                        <span class="promo-icon"><img class="img-fluid" src="img/cta/award.png" alt=""></span>
		                        <h3 class="promo-heading">Best Selling Dealer</h3>
		                        <p>Our Customer Services Managers will always help you.</p>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-6">
		                    <div class="single-promo">
		                        <span class="promo-icon"><img class="img-fluid" src="img/cta/award-2.png" alt=""></span>
		                        <h3 class="promo-heading">Best Customer Service</h3>
		                        <p>In case you are not satisfied with the purchased product, we’ll change it.</p>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-6">
		                    <div class="single-promo">
		                        <span class="promo-icon"><img class="img-fluid" src="img/cta/award-3.png" alt=""></span>
		                        <h3 class="promo-heading">Best Dealer Award</h3>
		                        <p>We have a Rank in the industry and got high awards.</p>
		                    </div>
		                </div>
		            </div>
		        </div>	
			</section>
			<!-- End calto-action Area -->

			<!-- start Our Services Area -->
			<section class="our_services section-full">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Our Services</h1>
								<hr class="lines">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-car fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>All Brands</h3>
									<p>Printin lorem Ipsum is simply dummy text of the k a galley of type and car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-comments fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Free Support</h3>
									<p>Aliquid illo similique minima magni quidem sequi corporis fugiat type car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-key fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>DealerShip</h3>
									<p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-money fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Affordable</h3>
									<p>Magni quidem aliquid illo sequi similique minima corporis fugiat type and car.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-shower fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Oil Changes</h3>
									<p>The printin lorem Ipsum is simply dummy text of k a galley of type and car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-bath fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Air Conditioning</h3>
									<p>Galley of type lorem Ipsum is simply dummy text of the printin k a type and car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-empire fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Auto Electric</h3>
									<p>Simply dummy lorem Ipsum is text of the printin k a galley of type and car.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-subway fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Transmission</h3>
									<p>Simply dummy lorem Ipsum is text of the printin k a galley of type and car.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- End Our Services Area -->

		
@stop