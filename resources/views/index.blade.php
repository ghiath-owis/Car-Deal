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
							<h3 >Welcome To Car Deal</h3>
							<h4 >* Build Your Deal</h4>
							<h4 >* Create a personalized deal</h4>
							<h4 >* Buy a Car</h4>
							<h4 >* Rent a Car</h4>
							<h4 >* evaluate your trade-in – all online</h4>
							<h4 >* Choose Your Favourite Cars</h4>
							<h4 >* You can search all kind of Cars</h4>
							
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
					<a  href="/product_listing">
						<div class="section_service text-center">
							<div class="section_image">
								<img  class="img-fluid w-25" src="img/welcome/vehicle1.png" alt="">
							</div>
							<div  class="section_content">
								<h3 class="text-capitalize">Our vehicles</h3>
							</div>
                     </a>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 mb">
					<a  href="/product_listing">
						<div class="section_service text-center">
							<div class="section_image">
								<img class="img-fluid w-25" src="img/welcome/discount.png" alt="">
							</div>
							<div class="section_content">
								<h3 class="text-capitalize">special offers cars</h3>
							</div>

						</div>
						</a>
					</div>

					

					
				</div>
			</div>
		</section>

		
		
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
									<p>We have a variety group of all brands and logo galley of type and car.</p>
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
									<p>You Can contact with Admin by Info in the below and we will contact with you.</p>
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
									<p>We present deal and Comunication between seler and customer who want to buy.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 text-center">
							<div class="service_item">
								<div class="section_icon">
									<i class="fa fa-money fa-2x"></i>
								</div>
								<div class="service_item_content">
									<h3>Transmission</h3>
									<p>We provid all new kind of trasmission models like Hybrid and Electric cars.</p>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</section>
			<!-- End Our Services Area -->

		
@stop