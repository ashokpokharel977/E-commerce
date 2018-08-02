<?php  
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Sign Up</h2>
	</div>
</div>

<section class="user-site-main-content">
	<main class="site-main">
		<div class="container">
			<div class="row">
				<div class="primary-single-content">
					<div class="content-area">
						<div class="login-content-wrap">
							<div class="row">
								<div class="col-sm-10 inner-login-content">
									<div class="user-form-wrap">
										<div class="logo-view">
											<img src="images/logo-2.png" alt="logo-2.png">
										</div>
										<form action="" method="post">
											<h3>Sign Up</h3>
											<div class="form-group">
												<span class="addon"><i class="fa fa-user"></i></span>
												<input type="text" name="fname" class="form-control" placeholder="Full Name">
											</div>
											<div class="form-group">
												<span class="addon"><i class="fa fa-user"></i></span>
												<input type="text" name="uname" class="form-control" placeholder="Username">
											</div>
											<div class="form-group">
												<span class="addon"><i class="fa fa-envelope"></i></span>
												<input type="email" name="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group">
												<span class="addon"><i class="fa fa-lock"></i></span>
												<input type="password" name="pass" class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
												<span class="addon"><i class="fa fa-lock"></i></span>
												<input type="password" name="cn-pass" class="form-control" placeholder="Confirm Password">
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="terms-condition"  class="chk-bx">
														<span>Accept terms and conditions</span>
													</label>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default site-btn">
													Sign Up <i class="fa fa-sign-in"></i>
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
	</main>
</section>

<?php 
include('footer.php');
?>