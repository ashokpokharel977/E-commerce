<?php 
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Sell Product</h2>
		<div class="bread-crumb-wrap">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Categories</li>
			</ol>
		</div>
	</div>
</div>

<section class="user-site-main-content">
	<main class="site-main">
		<div class="container">
			<div class="row">
				<div class="primary col-sm-12">
					<div class="content-area">
						<div class="row">
							<div class="col-sm-6 post-content">
								<h2>Would you like to sell product as well ?</h2>
								<div class="fusion-content-box">
									<form action="" method="post">
										<div class="form-group">
											<textarea name="address" class="form-control" placeholder="Address 1"></textarea>
										</div>
										<div class="form-group">
											<input type="text" name="phone-num" class="form-control" placeholder="Phone">
										</div>
										<div class="form-group">
											<input type="text" name="org-name" class="form-control" placeholder="Name of Organization">
										</div>
										<div class="form-group">
											<div class="select-appearance">
												<select name="select-region" class="form-control selectpicker">
													<option selected="selected" disabled="disabled">Select state/region</option>
													<option value="">Bagmati</option>
													<option value="">Rapti</option>
													<option value="">Dhaulagiri</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-appearance">
												<select name="select-city" class="form-control selectpicker">
													<option selected="selected" disabled="disabled">Select City</option>
													<option value="">Dang</option>
													<option value="">Tulsipur</option>
													<option value="">Chitwan</option>
													<option value="">Dhangadhi</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="site-btn-right-alignment">
												<a href="" class="skip-link">Skip this step</a>
												<button type="submit" class="btn btn-default site-btn">Add</button>
											</div>
										</div>
									</form>
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