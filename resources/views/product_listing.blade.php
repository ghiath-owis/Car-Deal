@extends('master')
@section('content')
			

			<!-- start banner Area -->
			<section class="banner-area relative">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Product Listing			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Products</a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Product List</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start item detail Area -->
			<section class="item-product-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12= mb-30 sidebar">
							<div class="listing-sidebar">
							      <div class="widget">
							         <div class="widget-search">
							           <h5>Advanced Search</h5>
							           <ul class="list-style
							           -none">
							             <li><i class="fa fa-star"> </i> Results Found <span class="float-right">(39)</span></li>
							             <li><i class="fa fa-shopping-cart"> </i> Compare Vehicles <span class="float-right">(10)</span></li>
							           </ul>
							       </div>
							       <div class="clearfix">
							       	<div class="accordion" id="accordionExample">
									  <div class="card">
									    <div class="card-header" id="headingOne">
									      <h5 class="mb-0">
									        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									          Year
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>

									    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									      <div class="card-body">
									        <ul>
									        <li>
							                	<span class="checkbox">
							                  		<label>
							                    		<input type="checkbox"> All Years
							                    	</label>
							                  </span>
							              </li>
							              <li>
							                <span class="checkbox">
							                  	<label>
							                   		<input type="checkbox"> 2009
							                   	</label>
							                 </span>
							              </li>
							              <li>
							               	<span class="checkbox">
							               		<label>
							                   		<input type="checkbox"> 2010
							                   	</label>
							                </span>
							              </li>
							              <li>
							                	<span class="checkbox">
							                  		<label>
							                    		<input type="checkbox"> 2011
							                    	</label>
							                  </span>
							              </li>
							              <li>
							                	<span class="checkbox">
							                  		<label>
							                    		<input type="checkbox"> 2012
							                    	</label>
							                  </span>
							              </li>
							              <li>
							                <span class="checkbox">
							                  	<label>
							                    	<input type="checkbox"> 2013
							                    </label>
							                  </span>
							              </li>
							              <li>
							                <span class="checkbox">
							                	<label>
							                   		<input type="checkbox"> 2014
							                   	</label>
							                 </span>
							              </li>
							              <li>
							                	<span class="checkbox">
							                  		<label>
							                    		<input type="checkbox"> 2015
							                    	</label>
							                  </span>
							              </li>
							              <li>
							                	<span class="checkbox">
							                  		<label>
							                    		<input type="checkbox"> 2016
							                    	</label>
							                  </span>
							              </li>
							          		</ul>
									      </div>
									    </div>
									  </div>

									  <div class="card">
									    <div class="card-header" id="headingTwo">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									          Conditions
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									      <div class="card-body">
									      	<ul>
									        <li><span class="checkbox">
								                  <label>
								                    <input type="checkbox"> All Conditions
								                    </label>
								                  </span>
								              </li>
								              <li>
								                <span class="checkbox">
								                  <label>
								                    <input type="checkbox"> Brand New
								                  </label>
								                </span>
								              </li>
							                  <li>
							                  	<span class="checkbox">
								                    <label>
								                      <input type="checkbox"> Slightly Used
								                    </label>
								                  </span></li>
								                  <li>
								                  	<span class="checkbox">
								                    <label>
								                      <input type="checkbox"> Used
								                    </label>
							                	</span>
							            	</li>
							            	</ul>
									      </div>
									    </div>
									  </div>

									   <div class="card">
									    <div class="card-header" id="headingThree">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									          Body
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									      <div class="card-body">
									        <ul>
									        <li><span class="checkbox">
							                  <label>
							                    <input type="checkbox"> All Body Styles
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 2dr Car
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 4dr Car
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Convertible
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Sedan
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Sports Utility Vehicle
							                    </label>
							                </span></li>
							                </ul>
									      </div>
									    </div>
									  </div>

									  <div class="card">
									    <div class="card-header" id="headingFour">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									          Models
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
									      <div class="card-body">
									      	<ul>
									        <li><span class="checkbox">
							                  <label>
							                    <input type="checkbox"> All Models
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 3-Series
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Boxster
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Carrera
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Cayenne
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> F-type
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> GT-R
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> GTS
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> M6
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Macan
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Mazda6
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> RLX
							                    </label>
							                  </span></li>
							                  </ul>
									      </div>
									    </div>
									  </div>

									  <div class="card">
									    <div class="card-header" id="headingFive">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									          Transmission
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
									      <div class="card-body">
									      	<ul>
									        <li><span class="checkbox">
							                  <label>
							                    <input type="checkbox"> All Transmissions
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 5-Speed Manual
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 6-Speed Automatic
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 6-Speed Manual
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 6-Speed Semi-Auto
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 7-Speed PDK
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 8-Speed Automatic
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> 8-Speed Tiptronic
							                    </label>
							                  </span></li>
							                  </ul>
									      </div>
									    </div>
									  </div>

									  <div class="card">
									    <div class="card-header" id="headingSix">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									          Exterior Color
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
									      <div class="card-body">
									      	<ul>
									        <li><span class="checkbox">
							                  <label>
							                    <input type="checkbox"> Ruby Red Metallic
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Racing Yellow
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Guards Red
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Aqua Blue Metallic
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> White
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Dark Blue Metallic
							                    </label>
							                  </span></li>
							                  </ul>
									      </div>
									    </div>
									  </div>

									  <div class="card">
									    <div class="card-header" id="headingSeven">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									          Interior Color
									        </button>
									        <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
									          <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
									      <div class="card-body">
									      	<ul>
									        <li><span class="checkbox">
							                  <label>
							                    <input type="checkbox"> Platinum Grey
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Agate Grey
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Marsala Red
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Alcantara Black
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Black
							                    </label>
							                  </span></li>
							                  <li><span class="checkbox">
							                    <label>
							                      <input type="checkbox"> Luxor Beige
							                    </label>
							                  </span></li>
							                  </ul>
									      			</div>
									    		</div>
									  		</div>
										</div>    
							          </div>
							         </div>
							        <div class="widget-banner">
							          <img class="img-fluid center-block" src="img/featured/banner.jpg" alt="">
							       </div>
							      </div>		
						</div>

						<div class="col-lg-9 post-list blog-post-list">
							<div class="single-post">
                                <div class="sorting-options-main"> 
							        <div class="row">
							        <div class="col-lg-8">

							          	<span class="">Price Range</span>
							          <div class="demo">
												    <div class="range-slider">
												        <input type="range" value="150" min="0" max="500" range="true">
												        <span class="range-value">150$</span>
												    </div>
												</div>
							         </div>
							         
							         <div class="col-lg-4">
							           <div class="price-search">
							            <span>Price search</span>
							             <div class="search">
							              <i class="fa fa-search"></i>
							             <input type="search" class="form-control placeholder" placeholder="Search....">
							            </div>
							           </div>
							         </div>
							        </div> 
							        <div class="row sorting-options">
							          <div class="col-lg-5">
							           <div class="change-view-button">
							             <a class="active" href="#"> <i class="fa fa-th"></i> </a>
							             <a href="listing-02.html"> <i class="fa fa-list-ul"></i> </a>
							           </div>
							          </div> 
							         <div class="col-lg-3">
							         	<div class="form-group">
									      <select id="inputState" class="form-control">
									        <option selected>Show</option>
									        <option>1</option>
									        <option>2</option>
									        <option>3</option>
									        <option>4</option>
									        <option>5</option>
									      </select>
									    </div>

							         </div>
							         <div class="col-lg-4">
							            <div class="form-group">
									      <select id="inputState1" class="form-control">
									        <option selected>Sort By</option>
									        <option>Price: Lowest First</option>
									        <option>Price: Highest First</option>
									        <option>Product Name: A To Z</option>
									        <option>Product Name: Z To A</option>
									        <option>In Stock</option>
									      </select>
									    </div>
							         </div>
							        </div>
							       </div>
                            
							       <div class="row d-flex justify-content-center pt-30 mb-30">
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
																<a href="#">Hyundai Sante <span class="mr-1 pull-right">$ 268</span></a>
																
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
													<img src="img/featured/product3.jpg" alt="gp product 001" />
												</a>
											</div>
											<div class="gp_products_item_caption">
														<ul class="gp_products_caption_name">
															<li>
																<a href="#">Hyundai Fe Sport <span class="mr-1 pull-right">$ 278</span></a>
																
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

								<div class="row d-flex justify-content-center mb-30">
									<div class="col-md-4 col-sm-6 col-12 gp_products_item">
										<div class="gp_products_inner">
											<div class="gp_products_item_image">
												<a href="#">
													<img src="img/featured/pic1.jpg" alt="gp product 001" />
												</a>
											</div>
											<div class="gp_products_item_caption">
														<ul class="gp_products_caption_name">
															<li>
																<a href="#">Lexus G S <span class="mr-1 pull-right">$ 300</span></a>
																
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
													<img src="img/featured/pic2.jpg" alt="gp product 001" />
												</a>
											</div>
											<div class="gp_products_item_caption">
														<ul class="gp_products_caption_name">
															<li>
																<a href="#">Acura Rxs Sport <span class="mr-1 pull-right">$ 288</span></a>
																
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
													<img src="img/featured/pic3.jpg" alt="gp product 001" />
												</a>
											</div>
											<div class="gp_products_item_caption">
														<ul class="gp_products_caption_name">
															<li>
																<a href="#">Hyundai Fe Sport <span class="mr-1 pull-right">$ 298</span></a>
																
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

								<div class="row d-flex justify-content-center mb-30">
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
																<a href="#">Gta Low Riders <span class="mr-1 pull-right">$ 310</span></a>
																
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
																<a href="#">Acura Rxs Sport <span class="mr-1 pull-right">$ 320</span></a>
																
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
													<img src="img/featured/pic3.jpg" alt="gp product 001" />
												</a>
											</div>
											<div class="gp_products_item_caption">
														<ul class="gp_products_caption_name">
															<li>
																<a href="#">Toyota Hybrid <span class="mr-1 pull-right">$ 350</span></a>
																
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

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 mt-30">
										<nav aria-label="...">
										  <ul class="pagination justify-content-center">
										    <li class="page-item disabled">
										      <span class="page-link">Previous</span>
										    </li>
										    <li class="page-item active"><a class="page-link" href="#">1</a></li>
										    <li class="page-item"><a class="page-link" href="#">2</a></li>
										    <li class="page-item"><a class="page-link" href="#">3</a></li>
										    <li class="page-item"><a class="page-link" href="#">4</a></li>
										    <li class="page-item"><a class="page-link" href="#">5</a></li>
										    <li class="page-item">
										      <a class="page-link" href="#">Next</a>
										    </li>
										  </ul>
										</nav>
									</div>
								</div>

							</div>																		
						</div>
					</div>
				</div>	
			</section>
			<!-- End item detail Area -->
			
        
@stop