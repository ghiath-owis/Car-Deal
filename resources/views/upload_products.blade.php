@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Upload Products				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Upload Products</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-full">
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
									<h3> Car Specifications</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Select Company *</h5>
												<select class="form-control">
												  <option>Select Company</option>
												  <option>Hyundai</option>
												  <option>Toyota</option>
												  <option>BMW</option>
												  <option>Audi</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Name of Product *</h5>
												<input class="form-control" type="text" placeholder="Product Name">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Description of Products *</h5>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!"></textarea>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Upload Main Image *</h5>
												<div class="careerfy-fileUpload">
		                                            <span class="clr_b"><i class="fa fa-plus careerfy-add"></i> Upload Photo</span>
		                                            <input type="file" class="careerfy-upload">
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Upload Main File *</h5>
												<div class="careerfy-fileUpload">
		                                            <span class="clr_b"><i class="fa fa-plus careerfy-add"></i> Upload File</span>
		                                            <input type="file" class="careerfy-upload">
		                                        </div>
		                                    </div>
		                                </div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Car Price *</h5>
												<input class="form-control" type="text" placeholder="Product Price">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Car Model *</h5>
												<input class="form-control" type="text" placeholder="Car Model">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Car Horse Power *</h5>
												<select class="form-control">
												  <option>1000cc</option>
												  <option>2000cc</option>
												  <option>3000cc</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Transmission *</h5>
												<select class="form-control">
												  <option>Automatic</option>
												  <option>Manual</option>
												</select>
											</div>
										</div>	
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Car Tags *</h5>
												<input class="form-control" type="text" placeholder="Tags">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="add_job_btn col-lg-12 mt-5">
								<div class="submit-field">
									 <button type="submit" class="job_detail_btn">Submit</button>
								</div>
							</div>															

						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->

@stop