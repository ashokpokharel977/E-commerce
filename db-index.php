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
										<li><a href="javascript:void(0);"><i class="fa fa-home"></i> My Trendy Shpopin</a></li>
										<li><a href="my-purchase.php"><i class="fa fa-credit-card"></i> My Purchase</a></li>
										<li><a href="my-wishlist.php"><i class="fa fa-heart"></i> My Wishlist</a></li>
										<li><a href="my-sales.php"><i class="fa fa-tags"></i> My Sales</a></li>
										<li><a href="my-products.php"><i class="fa fa-database"></i> My Products</a></li>
										<li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
										<li><a href=""><i class="fa fa-sign-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="db-content-wrap">
									<h3 class="db-wc-title">Welcome, John Doe</h3>
									<div class="user-activities-option-wrap">
										<div class="user-activities-list">
											<h4>My Purchases</h4>
											<div class="user-activities-block">
												<div class="row">
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Pending Purchases
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Pending Purchases
															</a>
														</div>
													</div>
												</div>
											</div>					
										</div>
										<div class="user-activities-list">
											<h4>My Sales</h4>
											<div class="user-activities-block">
												<div class="row">
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Orders Awaiting Shipment
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Orders Shipped
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Pending Refunds
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Sales History
															</a>
														</div>
													</div>
												</div>
											</div>					
										</div>
										<div class="user-activities-list">
											<h4>My Products</h4>
											<div class="user-activities-block">
												<div class="row">
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Active Products
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Waiting for approval
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Cancelled Products
															</a>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="user-act">
															<a href="">
																<span>0</span>
																Sell Now
															</a>
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
			</div>
		</div>
	</main>
</section>


<?php 
	include('footer.php');
 ?>