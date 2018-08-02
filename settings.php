<?php 
	include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Dashboard</h2>
	</div>
</div>

<section class="user-site-main-content">
	<main class="site-main">
		<div class="container">
			<div class="primary-single-content">
				<div class="content-area">
					<div class="dashboard-content-wrap">
						<div class="row">
							<div class="col-sm-3">
								<div class="db-listing-wrap">
									<ul>
										<li><a href="db-index.php"><i class="fa fa-home"></i> My Trendy Shpopin</a></li>
										<li><a href="my-purchase.php"><i class="fa fa-credit-card"></i> My Purchase</a></li>
										<li><a href="my-wishlist.php"><i class="fa fa-heart"></i> My Wishlist</a></li>
										<li><a href="my-sales.php"><i class="fa fa-tags"></i> My Sales</a></li>
										<li><a href="my-products.php"><i class="fa fa-database"></i> My Products</a></li>
										<li class="active"><a href="javascript:void(0);"><i class="fa fa-cog"></i> Settings</a></li>
										<li><a href=""><i class="fa fa-sign-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="db-content-wrap">
									<div class="purches-counter">
										<ul>
											<li class="active"><a href=""><i class="fa fa-user"></i> My Account</a></li>
											<li><a href=""><i class="fa fa-money"></i> Payment Settings</a></li>
											<li><a href=""><i class="fa fa-book"></i> Address Book</a></li>
										</ul>
									</div>
									<div class="pending-product-listing">
										<div class="row">
											<div class="col-sm-6">
												<div class="user-setting-block">
													<h4>Personal Information</h4>
													<form action="" method="post">
														<div class="personal-profile-pic-upload">
															<div class="profile-pic">
																<img src="images/golden-gate.jpg" alt="golden-gate.jpg">
															</div>
															<span class="upload-pro-action">
																<i class="fa fa-pencil-square-o"></i>
																<input name="profile_picture" type="file" id="inputFile">
															</span>
														</div>
														<div class="form-group">
															<input type="text" name="fname" class="form-control" placeholder="Full Name">
														</div>
														<div class="form-group">
															<input type="text" name="uname" class="form-control" placeholder="Username">
														</div>
														<div class="form-group">
															<input type="email" name="email" class="form-control" placeholder="Email">
														</div>
														<div class="form-group">
															<input type="text" name="phone" class="form-control" placeholder="Phone">
														</div>
														<div class="form-group">
															<input type="text" name="tel" class="form-control" placeholder="Tel">
														</div>
														<div class="form-group">
															<input type="date" name="birthday" class="form-control">
														</div>
														<div class="form-group">
															<button type="submit" class="btn btn-default site-btn">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="user-setting-block">
													<h4>Change Password</h4>
													<form action="" method="post">
														<div class="form-group">
															<input type="password" name="opass" class="form-control" placeholder="Old Password">
														</div>
														<div class="form-group">
															<input type="password" name="npass" class="form-control" placeholder="New Password">
														</div>
														<div class="form-group">
															<input type="password" name="cnpass" class="form-control" placeholder="Confirm New Password">
														</div>
														<div class="form-group">
															<button type="submit" class="btn btn-default site-btn">
																Save
															</button>
														</div>
													</form>
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
		</div>
	</main>
</section>


<?php 
	include('footer.php');
 ?>