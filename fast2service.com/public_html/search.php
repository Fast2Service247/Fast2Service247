﻿<!DOCTYPE html>
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
					<a href="ome" class="navbar-brand logo">
						<img src="assets/img/logo.jpeg" class="img-fluid" alt="Logo">
					</a>
					<a href="home" class="navbar-brand logo-small">
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
								<li><a href="provider-wallet">provider-wallet</a></li>
								<li><a href="provider-subscription.php">Subscription</a></li>
								<li><a href="provider-availability.php">Availability</a></li>
								<li><a href="provider-reviews">reviews</a></li>
								<li><a href="provider-payment.php">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="user-dashboard.php">Customers</a>
							<ul class="submenu">
								<li><a href="user-dashboard.php">Dashboard</a></li>
								<li><a href="user-bookings.php">Bookings</a></li>
								<li><a href="user-settings.php">Profile Settings</a></li>
								<li><a href="user-wallet.php">Wallet</a></li>
								<li><a href="user-reviews.php">Reviews</a></li>
								<li><a href="user-payment.php">Payment</a></li>
							</ul>
						</li>
						<li class="has-submenu active">
							<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li class="active"><a href="search.php">Search</a></li>
								<li><a href="service-details.php">Service Details</a></li>
								<li><a href="add-service.php">Add Service</a></li>
								<li><a href="edit-service.php">Edit Service</a></li>
								<li><a href="chat.php">Chat</a></li>
								<li><a href="notifications.php">Notifications</a></li>
								<li><a href="about-us.php">About Us</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="faq.php">FAQ</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</li>
						<li>
							<a href="admin/index.php" target="_blank">Admin</a>
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
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Find a Professional</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 theiaStickySidebar">
						<div class="card filter-card">
							<div class="card-body">
								<h4 class="card-title mb-4">Search Filter</h4>
								<form id="search_form">
									<div class="filter-widget">
										<div class="filter-list">
											<h4 class="filter-title">Keyword</h4>
											<input type="text" class="form-control" placeholder="What are you looking for?">
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Sort By</h4>
											<select class="form-control selectbox select">
												<option>Sort By</option>
												<option>Price Low to High</option>
												<option>Price High to Low</option>
												<option>Newest</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Categories</h4>
											<select class="form-control form-control selectbox select">
												<option>All Categories</option>
												<option>Home Appliance</option>
												<option selected="">Men's Saloon</option>
												<option>Female Saloon's</option>
												<option>Car Wash</option>
												<option>Cleaning & Disinfection</option>
												<option>Electrical</option>
												<option>Plumber</option>
												<option>Carpenter</option>
												<option>Pest Control</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Location</h4>
											<input class="form-control" type="text" placeholder="Search Location">
										</div>
									</div>
									<button class="btn btn-primary pl-5 pr-5 btn-block get_services" type="button">Search</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row align-items-center mb-4">
							<div class="col-md-6 col">
								<h4><span>118</span> Services</h4>
							</div>
							<div class="col-md-6 col-auto">
								<div class="view-icons">
									<a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-01.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-01.jpg" alt="">
													</a>	
													<span class="service-price">$25</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Cleaning</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Toughened Glass Fitting Services</a>
											</h3>
											<div class="rating">	
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>		
												<span class="d-inline-block average-rating">(4.3)</span>
											</div>
											<div class="user-info">
												<div class="row">	
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> 
														<span>xxxxxxxx49</span>
													</span>
													<span class="col ser-location">
														<span>Wayne, New Jersey</span> <i class="fas fa-map-marker-alt ml-1"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-02.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-02.jpg" alt="">
													</a>
													<span class="service-price">$50</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Automobile</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Car Repair Services</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">(5)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx85</span></span>
													<span class="col ser-location"><span>Hanover, Maryland</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-03.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-03.jpg" alt="">
													</a>
													<span class="service-price">$45</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Electrical</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Electric Panel Repairing Service</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4.5)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx30</span></span>
													<span class="col ser-location"><span>Kalispell, Montana</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-04.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-04.jpg" alt="">
													</a>
													<span class="service-price">$14</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Car Wash</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Steam Car Wash</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(0)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx74</span></span>
													<span class="col ser-location"><span>Electra, Texas</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-05.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-05.jpg" alt="">
													</a>
													<span class="service-price">$100</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Cleaning</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">House Cleaning Services</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(0)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx91</span></span>
													<span class="col ser-location"><span>Sylvester, Georgia</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-06.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-06.jpg" alt="">
													</a>
													<span class="service-price">$80</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Computer</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Computer & Server AMC Service</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(0)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx92</span></span>
													<span class="col ser-location"><span>Los Angeles, California</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-07.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-07.jpg" alt="">
													</a>
													<span class="service-price">$5</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Interior</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Interior Designing</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx28</span></span>
													<span class="col ser-location"><span>Hanover, Maryland</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-08.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-08.jpg" alt="">
													</a>
													<span class="service-price">$75</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Construction</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Building Construction Services</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx62</span></span>
													<span class="col ser-location"><span>Burr Ridge, Illinois</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-09.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-09.jpg" alt="">
													</a>
													<span class="service-price">$500</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Painting</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Commercial Painting Services</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(3)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx75</span></span>	
													<span class="col ser-location"><span>Huntsville, Alabama</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-10.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-10.jpg" alt="">
													</a>
													<span class="service-price">$150</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Plumbing</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Plumbing Services</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(3)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx13</span></span>
													<span class="col ser-location"><span>Richmond, Virginia</span> <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-11.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-01.jpg" alt="">
													</a>
													<span class="service-price">$32</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Carpentry</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Wooden Carpentry Work</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">(5)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx68</span></span>
													<span class="col ser-location"><span>Columbus, Alabama</span> <i class="fas fa-map-marker-alt ml-1"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="service-details.php">
												<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-12.jpg">
											</a>
											<div class="item-info">
												<div class="service-user">
													<a href="#">
														<img src="assets/img/customer/user-02.jpg" alt="">
													</a>
													<span class="service-price">$54</span>
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="service-details.php">Appliance</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="service-details.php">Air Conditioner Service</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(3)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx71</span></span>
													<span class="col ser-location"><span>Vancouver, Washington</span> <i class="fas fa-map-marker-alt ml-1"></i></span>
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
		</div>﻿
				
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
										<a href="about-us.php">About Us</a>
									</li>
									<li>
										<a href="contact-us.php">Contact Us</a>
									</li>
									<li>
										<a href="faq.php">FAQ</a>
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
										<a href="search.php">Cleaning </a>
									</li>
									<li>
										<a href="search.php">Saloon's</a>
									</li>
									<li>
										<a href="search.php">Car Wash</a>
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
									<p><i class="fas fa-headphones"></i> 7230879549</p>
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
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-google"></i></a>
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
									<p class="mb-0">&copy; 2021 <a href="index.php">Fast2Service</a>. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition.php">Terms and Conditions</a>
										</li>
										<li>
											<a href="privacy-policy.php">Privacy</a>
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

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>
</html>