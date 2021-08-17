@extends('master')
@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Notifications				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Notifications</a></p>
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
							<div class="profile_job_content col-lg-12">
								<div class="headline">
									<h3>Notifications</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="profile-notification">
											<!-- NOTIFICATION CLOSE -->
											<div class="notification-close"></div>
											<!-- NOTIFICATION CLOSE -->
											<div class="profile-notification-date">
												<p>2 Hours ago</p>
											</div>
											<div class="profile-notification-body">
												<figure class="user-avatar">
													<img src="img/avatar_02.jpg" alt="user-avatar">
												</figure>
												<p><span>MeganV.</span> added <span>Pixel Diamond Gaming Shop</span> to favourites</p>
											</div>
											<div class="profile-notification-type">
												<span class="type-icon lnr lnr-heart primary"></span>
											</div>
										</div>

										<div class="profile-notification">
											<!-- NOTIFICATION CLOSE -->
											<div class="notification-close"></div>
											<!-- NOTIFICATION CLOSE -->
											<div class="profile-notification-date">
												<p>2 Hours ago</p>
											</div>
											<div class="profile-notification-body">
												<figure class="user-avatar">
													<img src="img/avatar_15.jpg" alt="user-avatar">
												</figure>
												<p><span>MeganV.</span> added <span>Pixel Diamond Gaming Shop</span> to favourites</p>
											</div>
											<div class="profile-notification-type">
												<span class="type-icon lnr lnr-heart primary"></span>
											</div>
										</div>

										<div class="profile-notification">
											<!-- NOTIFICATION CLOSE -->
											<div class="notification-close"></div>
											<!-- NOTIFICATION CLOSE -->
											<div class="profile-notification-date">
												<p>2 Hours ago</p>
											</div>
											<div class="profile-notification-body">
												<figure class="user-avatar">
													<img src="img/user.jpg" alt="user-avatar">
												</figure>
												<p><span>MeganV.</span> added <span>Pixel Diamond Gaming Shop</span> to favourites</p>
											</div>
											<div class="profile-notification-type">
												<span class="type-icon lnr lnr-heart primary"></span>
											</div>
										</div>

										<div class="profile-notification">
											<!-- NOTIFICATION CLOSE -->
											<div class="notification-close"></div>
											<!-- NOTIFICATION CLOSE -->
											<div class="profile-notification-date">
												<p>2 Hours ago</p>
											</div>
											<div class="profile-notification-body">
												<figure class="user-avatar">
													<img src="img/avatar_10.jpg" alt="user-avatar">
												</figure>
												<p><span>MeganV.</span> added <span>Pixel Diamond Gaming Shop</span> to favourites</p>
											</div>
											<div class="profile-notification-type">
												<span class="type-icon lnr lnr-heart primary"></span>
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