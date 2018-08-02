<?php  
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Reset Password</h2>
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
											<h3>Reset Password</h3>
											<div class="form-group">
												<span class="addon"><i class="fa fa-user"></i></span>
												<input type="text" name="uname" class="form-control" placeholder="Username or email">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default site-btn">
													Send <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
											<div class="form-group">
												<p class="sign-up-link">Do you already have an account? <a href="login.php">Sign In</a></p>
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