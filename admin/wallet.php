<?php 
include('config.php');
session_start();
if($_SESSION['id']=="")
{

 echo '<script> 
 window.location="index.php";
 </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Fast2Service</title>

	<!-- Favicons -->
	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>
	<div class="main-wrapper">
	
		<!-- Header -->
			<?php include('a_header.php'); ?>
		<!-- /Header -->
		
		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-logo">
				<a href="index.php">
					<img src="assets/img/logo.jpeg" class="img-fluid" alt="">
				</a>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li>
							<a href="index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="categories.php"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
						</li>
						<li>
							<a href="subcategories.php"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
						</li>
						<li>
							<a href="service-list.php"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
						</li>
						<li>
							<a href="total-report.php"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
						</li>
						<li>
							<a href="payment_list.php"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
						</li>
						<li>
							<a href="ratingstype.php"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
						</li>
						<li>
							<a href="review-reports.php"><i class="fas fa-star"></i> <span>Ratings</span></a>
						</li>
						<li>
							<a href="subscriptions.php"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
						</li>
						<li class="active">
							<a href="wallet.php"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
						</li>
						<li>
							<a href="service-providers.php"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
						</li>
						<li>
							<a href="users.php"><i class="fas fa-user"></i> <span>Users</span></a>
						</li>
						<li>
							<a href="settings.php"><i class="fas fa-cog"></i> <span> Settings</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->
		
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Wallet</h3>
						</div>
						<div class="col-auto text-right">
							<a class="btn btn-white filter-btn" href="javascript: void(0);" id="filter_search">
								<i class="fas fa-filter"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- Search Filter -->
				<div class="card filter-card" id="filter_inputs">
					<div class="card-body pb-0">
						<form>
							<div class="row filter-row"> 
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" type="text">
									</div>
								</div> 
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>From Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>To Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /Search Filter -->
				
				<ul class="nav nav-tabs menu-tabs">
					<li class="nav-item active">
						<a class="nav-link" href="wallet.php">Wallet Report</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="wallet-history.php">Wallet History</a>
					</li>
				</ul>
				
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0 datatable">
										<thead>
											<tr>
												<th>#</th>
												<th>Date</th>
												<th>Name</th>
												<th>Mobile</th>
												<th>Wallet Amt</th>
												<th>Role</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>13 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
														</a>
														<a href="javascript:void(0);">Thomas Herzberg</a>
													</h2>
												</td>
												<td>832-212-0082</td>
												<td>$3885</td>
												<td>
													<label class="badge badge-success">Provider</label>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>12 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-01.jpg">
														</a>
														<a href="javascript:void(0);">Jeffrey Akridge</a>
													</h2>
												</td>
												<td>850-847-0459</td>
												<td>$1047</td>
												<td>
													<label class="badge badge-primary">User</label>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>11 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
														</a>
														<a href="javascript:void(0);">Matthew Garcia</a>
													</h2>
												</td>
												<td>918-454-4561</td>
												<td>$500</td>
												<td>
													<label class="badge badge-success">Provider</label>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>11 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-03.jpg">
														</a>
														<a href="javascript:void(0);">Yolanda Potter</a>
													</h2>
												</td>
												<td>360-281-3619</td>
												<td>$183</td>
												<td>
													<label class="badge badge-success">Provider</label>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>10 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-02.jpg">
														</a>
														<a href="javascript:void(0);">Nancy Olson</a>
													</h2>
												</td>
												<td>901-690-8272</td>
												<td>$960</td>
												<td>
													<label class="badge badge-primary">User</label>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>9 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-03.jpg">
														</a>
														<a href="javascript:void(0);">Ramona Kingsley</a>
													</h2>
												</td>
												<td>608-712-2413</td>
												<td>$718</td>
												<td>
													<label class="badge badge-primary">User</label>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>8 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-04.jpg">
														</a>
														<a href="javascript:void(0);">Ricardo Flemings</a>
													</h2>
												</td>
												<td>631-374-3243</td>
												<td>$699</td>
												<td>
													<label class="badge badge-success">Provider</label>
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>7 Sep 2020</td>
												<td>
													<h2 class="table-avatar">
														<a href="#" class="avatar avatar-sm mr-2">
															<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user-04.jpg">
														</a>
														<a href="javascript:void(0);">Ricardo Lung</a>
													</h2>
												</td>
												<td>714-564-6443</td>
												<td>$4422</td>
												<td>
													<label class="badge badge-primary">User</label>
												</td>
											</tr> 
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>