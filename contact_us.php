<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Fast2Service</title>

	<!-- Favicons -->
	
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="home" class="navbar-brand logo">
						<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
					</a>
					<a href="index.php" class="navbar-brand logo-small">
						<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="home" class="menu-logo">
							<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li>
							<a href="home">Home</a>
						</li>
						<li>
							<a href="categories">Categories</a>
						</li>
						<li class="has-submenu">
							<a href="provider-dashboard">Providers</a>
							<ul class="submenu">
								<li><a href="provider-dashboard">Dashboard</a></li>
								<li><a href="my-services">Services</a></li>
								<li><a href="provider-bookings">Bookings</a></li>
								<li><a href="provider-settings">Profile Settings</a></li>
								<li><a href="provider-wallet">Wallet</a></li>
								<li><a href="provider-subscription">Subscription</a></li>
								<li><a href="provider-availability">Availability</a></li>
								<li><a href="provider-reviews">Reviews</a></li>
								<li><a href="provider-payment">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="user-dashboard">Customers</a>
							<ul class="submenu">
								<li><a href="user-dashboard">Dashboard</a></li>
								<li><a href="user-bookings">Bookings</a></li>
								<li><a href="user-settings">Profile Settings</a></li>
								<li><a href="user-wallet">Wallet</a></li>
								<li><a href="user-reviews">Reviews</a></li>
								<li><a href="user-payment">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu active">
							<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="search">Search</a></li>
								<li><a href="service-details">Service Details</a></li>
								<li><a href="add-service">Add Service</a></li>
								<li><a href="edit-service">Edit Service</a></li>
								<li><a href="chat">Chat</a></li>
								<li><a href="notifications">Notifications</a></li>
								<li><a href="about-us">About Us</a></li>
								<li class="active"><a href="contact-us">Contact Us</a></li>
								<li><a href="faq">FAQ</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</li>
						<li>
							<a href="admin" target="_blank">Admin</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#provider-register">Become a Professional</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#user-register">Become a User</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item">
						<a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">Login</a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->
		
		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Contact Us</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="home">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<section class="contact-us">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-8">
							<div class="contact-queries">
								<h4 class="mb-4">Drop your Queries</h4>
								<div class="row">
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">First Name</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">Last Name</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">Email</label>
										<input class="form-control" type="email" >
									</div>
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">Mobile Number</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-12">
										<label class="mr-sm-2">Message</label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
									<div class="col-xl-12 mt-4">
										<button class="btn btn-primary btn-lg pl-5 pr-5" type="submit">Update</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="contact-details">
								<div class="contact-info">
									<i class="fas fa-map-marker-alt"></i>
									<div class="contact-data">
										<h4>Address</h4>
										<p>Near shiv mandir Pratapnagar Udaipur Rajsthan - 313001</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="fas fa-phone-alt"></i>
									<div class="contact-data">
										<h4>Phone</h4>
										<p>+91 7230879549</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="fab fa-skype"></i>
									<div class="contact-data">
										<h4>Skype</h4>
										<p>Fast2Service</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="far fa-envelope"></i>
									<div class="contact-data">
										<h4>Email</h4>
										<p>info@fast2service.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="map-grid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.920510517326!2d73.74619051495522!3d24.591939362023595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e7e6a48fb9fb%3A0x8c5f7fcb13379839!2sFast2Service!5e0!3m2!1sen!2sin!4v1619354961994!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0" class="contact-map"></iframe>
		</div>
		
		<!-- Footer -->
				
								
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		
	</div>

	<!-- Provider Register Modal -->
	<div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a Provider</h3>
					</div>
					
					<!-- Register Form -->
					<form action="index.html">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" placeholder="johndoe@exapmle.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="text" class="form-control" placeholder="986 452 1236">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" placeholder="********">
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /Provider Register Modal -->
	
	<!-- User Register Modal -->
	<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a User</h3>
					</div>
					
					<!-- Register Form -->
					<form action="index.html">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" placeholder="johndoe@exapmle.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="text" class="form-control" placeholder="986 452 1236">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" placeholder="********">
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /User Register Modal -->
	
	<!-- Login Modal -->
	<div class="modal account-modal fade" id="login_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login <span>Truelysell</span></h3>
					</div>
					<form action="index.html">
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="email" class="form-control" placeholder="truelysell@example.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" class="form-control" placeholder="********">
						</div>
						<div class="text-right">	
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
						<div class="login-or">	<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">	<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">	<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
						<div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Login Modal -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>
		</div>
		
		<!-- Footer -->
		<footer class="footer">
		
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Quick Links  </h2>
								<ul>
									<li>
										<a href="about-us">About Us</a>
									</li>
									<li>
										<a href="contact-us">Contact Us</a>
									</li>
									<li>
										<a href="faq">FAQ</a>
									</li>
									<li>
										<a href="#">Help</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Categories</h2>
								<ul>
									<li>
										<a href="Cleaning">Cleaning</a>
									</li>
									<li>
										<a href="Saloon's">Saloon's</a>
									</li>
									<li>
										<a href="Car-Wash">Car Wash</a>
									</li>
									<li>
										<a href="search.php">Electrician</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<span><i class="far fa-building"></i></span>
										<p>Near shiv mandir Pratapnagar Udaipur Rajsthan - 313001</p>
									</div>
									<p><i class="fas fa-headphones"></i>7230879549</p>
									<p class="mb-0"><i class="fas fa-envelope"></i> info@fast2service.com</p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">Follow Us</h2>
								<div class="social-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/fast2service" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="https://twitter.com/Fast2Service" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCQlerlaFEySb6MruFzN6iKA" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="https://www.instagram.com/fast2service" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                    <button type="submit" class="btn footer-btn">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2021 <a href="home">Fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy-policy">Privacy</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		
	</div>

	<!-- Provider Register Modal -->
	<div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a Provider</h3>
					</div>
					
					<!-- Register Form -->
					<form action="index.php">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" placeholder="Enter your name">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="text" class="form-control" placeholder="000 000 0000">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" placeholder="Create password">
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /Provider Register Modal -->
	
	<!-- User Register Modal -->
	<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a User</h3>
					</div>
					
					<!-- Register Form -->
					<form action="index.php">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" class="form-control" placeholder="Enter your name">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Email-Id</label>
							<input type="text" class="form-control" placeholder="Enter your email">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="text" class="form-control" placeholder="000 000 0000">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" placeholder="Create password">
						</div>
						<div class="text-right">
							<a class="forgot-link" href="#">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">
								<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /User Register Modal -->
	
	<!-- Login Modal -->
	<div class="modal account-modal fade" id="login_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login <span>Fast2Service</span></h3>
					</div>
					<form action="index.php">
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="email" class="form-control" placeholder="info@fast2service.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" class="form-control" placeholder="********">
						</div>
						<div class="text-right">	
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
						<div class="login-or">	<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						<div class="row form-row social-login">
							<div class="col-6">	<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
							</div>
							<div class="col-6">	<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
							</div>
						</div>
						<div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Login Modal -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>