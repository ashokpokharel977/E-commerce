<?php 
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Add Product</h2>
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
								<h2>Add Product</h2>
								<div class="fusion-content-box">
									<form action="" method="post">
										<div class="form-group">
											<label>Add Images</label>
											<div class="upload-pro-img-bx">
												<div class="dz-up-mg"></div>
												<div class="dz-up-mg"></div>
												<div class="dz-up-mg"></div>
												<div class="dz-up-mg"></div>
												<div class="dz-up-mg"></div>
											</div>
										</div>
										<div class="form-group">
											<input type="text" name="pro-name" class="form-control" placeholder="Product Name">
										</div>
										<div class="form-group">
											<textarea name="desc" class="form-control" placeholder="Description"></textarea>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<div class="select-appearance">
														<select name="category" class="form-control selectpicker">
															<option selected="selected" disabled="disabled">Category</option>
															<option value="">Men</option>
															<option value="">Women</option>
															<option value="">Electronic</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="select-appearance">
														<select name="sub-category" class="form-control selectpicker">
															<option selected="selected" disabled="disabled">Sub Category</option>
															<option value="">Clothing</option>
															<option value="">Accessories</option>
															<option value="">Cosmetic</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<div class="select-appearance">
														<select name="brand" class="form-control selectpicker">
															<option selected="selected" disabled="disabled">Brand</option>
															<option value="">Addidas</option>
															<option value="">Nike</option>
															<option value="">Other</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<input type="text" name="color" class="form-control" placeholder="Color">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<input type="text" name="price" class="form-control" placeholder="Price">
												</div>
												<div class="col-sm-6">
													<input type="number" name="quantity" class="form-control" placeholder="Quantity">
												</div>
											</div>
										</div>
										<div class="form-group">
											<p>Return Policy for damaged or wrong product</p>
											<ul class="pro-return-policy-check">
												<li>
													<div class="radio">
														<label>
															<input type="radio" name="days" class="chk-bx">
															<span>3 days</span>
														</label>
													</div>
												</li>
												<li>
													<div class="radio">
														<label>
															<input type="radio" name="days" class="chk-bx">
															<span>7 days</span>
														</label>
													</div>
												</li>
												<li>
													<div class="radio">
														<label>
															<input type="radio" name="days" class="chk-bx">
															<span>12 days</span>
														</label>
													</div>
												</li>
												<li>
													<div class="radio">
														<label>
															<input type="radio" name="days" class="chk-bx">
															<span>15 days</span>
														</label>
													</div>
												</li>
											</ul>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-8">
													<div class="chk-trm-con">
														<div class="checkbox">
															<label>
																<input type="checkbox" name="t&c" class="chk-bx">
																<span>Accept terms and conditions</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="site-btn-right-alignment">
														<button type="submit" class="btn btn-default site-btn">Save</button>
													</div>
												</div>
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