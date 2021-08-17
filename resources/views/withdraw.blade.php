@extends('master')
@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								WithDraws				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> WithDraws</a></p>
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
                                        <h2>Hellen Rebecca</h2>
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
							<div class="profile_job_content col-lg-12 mb-5">
								<div class="headline">
									<h3> Withdraw Earnings</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Amount to Withdraw ($745.00 Maximum) *</h5>
												<input class="form-control" type="text" placeholder="Enter Amount You Want To Withdraw">
											</div>
										</div>
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Choose your Withdrawal Method *</h5>
												<form action="/action_page.php">
												    <div class="form-check mb-2">
												      <label class="form-check-label" for="radio1">
												        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked> Paypal
												      </label>
												    </div>
												    <div class="form-check mb-2">
												      <label class="form-check-label" for="radio2">
												        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Skrill
												      </label>
												    </div>
												    <div class="form-check">
												      <label class="form-check-label">
												        <input type="radio" class="form-check-input" disabled>International Transfer ($200 Minimum)
												      </label>
												    </div>
												  </form>
											</div>
										</div>
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Your Paypal Account *</h5>
												<input class="form-control" type="text" placeholder="Enter Your Paypal Account Here">
											</div>
										</div>
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Confirm your Password *</h5>
												<input class="form-control" type="password" placeholder="Confirm your Password For Security">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												 <button type="submit" class="job_detail_btn btn-block">Request WithDrawal</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="profile_job_content col-lg-12">
								<div class="headline">
									<h3>Withdrawal History</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<ul class="withdraw_detail">
											<li><h6>Mar 27th, 2014</h6></li>
											<li><a href="">example@example.com</a></li>
											<li><h6>58$</h6></li>
											<li><a href="" class="text-warning">Pending</a></li>
										</ul>

										<ul class="withdraw_detail">
											<li><h6>Mar 27th, 2014</h6></li>
											<li><a href="">example@example.com</a></li>
											<li><h6>58$</h6></li>
											<li><a href="" class="text-success">Paid</a></li>
										</ul>

										<ul class="withdraw_detail">
											<li><h6>Mar 27th, 2014</h6></li>
											<li><a href="">example@example.com</a></li>
											<li><h6>58$</h6></li>
											<li><a href="" class="text-success">Paid</a></li>
										</ul>

										<ul class="withdraw_detail">
											<li><h6>Mar 27th, 2014</h6></li>
											<li><a href="">example@example.com</a></li>
											<li><h6>58$</h6></li>
											<li><a href="" class="text-warning">Pending</a></li>
										</ul>

										<ul class="withdraw_detail">
											<li><h6>Mar 27th, 2014</h6></li>
											<li><a href="">example@example.com</a></li>
											<li><h6>58$</h6></li>
											<li><a href="" class="text-danger">Reject</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->

@stop