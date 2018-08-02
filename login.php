<?php  
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Login</h2>
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
											<h3>Login</h3>
											<div class="form-group">
												<span class="addon"><i class="fa fa-user"></i></span>
												<input type="text" name="uname" class="form-control" placeholder="Username or email">
											</div>
											<div class="form-group">
												<span class="addon"><i class="fa fa-lock"></i></span>
												<input type="password" name="pass" class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
											<p class="lost-pass-link"><a href="lost-password.php">Lost your password?</a></p>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default site-btn">
													Login <i class="fa fa-sign-in"></i>
												</button>
											</div>
											<div class="form-group">
												<p class="sign-up-link">Don't have account? <a href="signup.php">Sign Up</a></p>
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