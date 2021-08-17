@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Sell a Product 			
							</h1>	
							<p class="text-white link-nav">
								<a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="search.html"> Sell a Product page</a>
							</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Add Job Detail Area -->
			<section class="error_area section-full">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="add_job_content col-12">
							<div class="headline">
								<h3><i class="fa fa-money"></i> Sell Product Form</h3>
							</div>
							<div class="add_job_detail">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Select Company</h5>
											<select class="form-control">
											  <option>Select Company</option>
											  <option>Hyundai</option>
											  <option>Toyota</option>
											  <option>BMW</option>
											  <option>Audi</option>
											</select>
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Name Of Product</h5>
											<input class="form-control" type="text">
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Product Category</h5>
											<select class="form-control">
											  <option>Select Product Category</option>
											  <option>Sports Car</option>
											  <option>Hybrid Car</option>
											  <option>Manual Car</option>
											  <option>Automatic Car</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Location</h5>
											<div class="input-group">
											  <div class="input-group-prepend">
											    <span class="input-group-text"><i class="fa fa-plane"></i></span>
											  </div>
											  <input type="text" class="form-control" placeholder="Type Address">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="submit-field">
											<h5>Price</h5>
											<div class="row">
												<div class="col-md-6 col-sm-6">
													<div class="input-group">
													  <input type="text" class="form-control" placeholder="Price">
													  <div class="input-group-append">
													    <span class="input-group-text">$</span>
													  </div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="input-group">
													  <input type="text" class="form-control" placeholder="Discounted Price" required="">
													  <div class="input-group-append">
													    <span class="input-group-text">$</span>
													  </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="submit-field">
											<h5>Tags <small>(optional)</small></h5>
											<input class="form-control" type="text" placeholder="e.g. Motot car, Car Inspection, Auto Car">
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="submit-field">
											<h5>Product Description</h5>
											<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="" rows="5"></textarea>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="submit-field"> 
										    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
										    <small id="fileHelp" class="form-text text-muted">Images or documents that might be helpful in describing your Product.</small>
										  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="add_job_content col-12 mt-5">
							<div class="headline">
								<h3><i class="fa fa-pencil-square-o"></i> Company Details <small>- (Optional)</small></h3><small>if you have a company</small>
							</div>
							<div class="add_job_detail">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Email</h5>
											<input class="form-control" type="email">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Phone No.</h5>
											<input class="form-control" type="tel">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Landline No.</h5>
											<input class="form-control" type="tel">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Website Link</h5>
											<input class="form-control" type="url">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Address</h5>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>City</h5>
											<select class="form-control">
											  <option>City</option>
											  <option>Mancester</option>
											  <option>New York</option>
											  <option>Washington</option>
											  <option>Beijing</option>
											  <option>HongKong</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>State</h5>
											<select class="form-control">
											  <option>State</option>
											  <option>Mancester</option>
											  <option>New York</option>
											  <option>Washington</option>
											  <option>Beijing</option>
											  <option>HongKong</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="submit-field">
											<h5>Country</h5>
											<select class="form-control">
											  <option>England</option>
											  <option>France</option>
											  <option>China</option>
											  <option>Germeny</option>
											  <option>Japan</option>
											  <option>UAE</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="submit-field">
											<h5>Zip Code</h5>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="add_job_btn col-12 mt-5">
							<div class="submit-field">
								 <button type="submit" class="job_detail_btn">Submit</button>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End Add Job Detail Area -->
		
@stop