<?php 
include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Single Product Page</h2>
		<div class="bread-crumb-wrap">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Single Product Page</li>
			</ol>
		</div>
	</div>
</div>

<main class="site-main">
	<div class="container">
		<div class="row">
			<div class="primary-single-content col-sm-9">
				<div class="content-area">
					<div class="product-view-content">
						<div class="row">
							<div class="col-sm-6">
								<div class="single-product-image">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										<div class="images-slide-wrap">
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
												</div>
												<div class="item">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
												</div>
												<div class="item">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
												</div>
												<div class="item">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
												</div>
												<div class="item">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
												</div>
											</div>
										</div>
										<!-- Indicators -->
										<ol class="carousel-indicators clearfix">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active">
												<img src="images/polo-shirt.png" alt="polo-shirt.png">
											</li>
											<li data-target="#carousel-example-generic" data-slide-to="1">
												<img src="images/polo-shirt.png" alt="polo-shirt.png">
											</li>
											<li data-target="#carousel-example-generic" data-slide-to="2">
												<img src="images/polo-shirt.png" alt="polo-shirt.png">
											</li>
											<li data-target="#carousel-example-generic" data-slide-to="3">
												<img src="images/polo-shirt.png" alt="polo-shirt.png">
											</li>
											<li data-target="#carousel-example-generic" data-slide-to="4">
												<img src="images/polo-shirt.png" alt="polo-shirt.png">
											</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="single-product-info">
									<div class="product-more-info">
										<div class="media-bx">
											<i class="fa fa-truck"></i>
											<div class="pro-media-body">
												<h3>Free Shipping</h3>
												<p>
													This product qualifies for free air shipping.
												</p>
											</div>
										</div>
									</div>
									<h2 class="product-title">Gaten Mazo Pika</h2>
									<div class="star-rating"></div>
									<span class="price old-price">$35.00</span>
									<span class="price">$35.00</span>
									<div class="product-desc">
										<p>
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
										</p>	
									</div>
									<form action="" method="post" class="cart clearfix">
										<div class="form-group">
											<ul>
												<li>
													<input type="number" class="form-control" name="quantity" step="1" min="1" max="" value="1">
												</li>
												<li>
													<button type="submit" class="btn btn-default site-btn">Add to Cart</button>
												</li>
												<li>
													<div class="add-to-links">
														<a href="" class="site-btn">
															<i class="fa fa-heart"></i>
															<div class="tooltip left" role="tooltip"> 
																<div class="tooltip-arrow"></div> 
																<div class="tooltip-inner"> Wishlist</div> 
															</div>
														</a>
														<a href="" class="site-btn">
															<i class="fa fa-retweet"></i>
															<div class="tooltip left" role="tooltip"> 
																<div class="tooltip-arrow"></div> 
																<div class="tooltip-inner"> Compare</div> 
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
									</form>
									<div class="product-meta">
										<span class="posted-in">
											Categories: <a href="">T-shirts</a>
										</span>
									</div>
									<div class="social-links">
										<ul>
											<li>
												<a href=""><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href=""><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href=""><i class="fa fa-linkedin"></i></a>
											</li>
											<li>
												<a href=""><i class="fa fa-envelope"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="site-tab-content-wrap">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab-description" aria-controls="tab-description" role="tab" data-toggle="tab">Description</a></li>
							<li role="presentation"><a href="#tab-reviews" aria-controls="tab-reviews" role="tab" data-toggle="tab">Reviews(1)</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="tab-description">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
								</p>
							</div>
							<div role="tabpanel" class="tab-pane" id="tab-reviews">
								<div class="reviews">
									<div class="comments">
										<h3>1 review for Accumsan Elit</h3>
										<ul>
											<li>
												<img src="images/profile-placeholder.png" alt="profile-placeholder.png">
												<div class="comment-text">
													<div class="star-rating"></div>
													<p class="meta">
														<span>admin</span> - <time>October 27, 2015</time>
													</p>
													<div class="desc-review">
														<p>
															Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue placerat pretium, augue erat accumsan lacus
														</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<form action="" method="post" class="comment-form">
										<h3>Add a review</h3>
										<div class="form-group">
											<label>Your Rating</label>
											<div class="star-off"></div>
										</div>
										<div class="form-group">
											<label>Your Review</label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label>Name *</label>
											<input type="text" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label>Email *</label>
											<input type="email" name="email" class="form-control">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-default site-btn">Submit</button>
										</div>
									</form>
								</div>	
							</div>
						</div>
					</div>
					<div class="related-products">
						<h2 class="entry-title"><span>Related Products</span></h2>
						<div class="row">
							<div class="col-sm-3 col-item-list">
								<div class="product-thumbnail">
									<div class="label label-default label-sale">Sale</div>
									<div class="label label-default label-new">New</div>	
									<figure class="thumbnail-img">
										<a href="">
											<img src="images/polo-shirt.png" alt="polo-shirt.png">
										</a>
										<figcaption class="thumbnail-caption">
											<a href="" class="add-btn">
												<i class="fa fa-heart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Wishlist</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-shopping-cart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Add to Cart</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-retweet"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Compare</div> 
												</div>
											</a>
										</figcaption>
									</figure>
									<div class="item-detail">
										<h3 class="product-title">Gaten Mazo Pika</h3>
										<div class="star-rating"></div>
										<div class="product-price">
											<span class="price old-price">$50.00</span>
											<span class="price">$35.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-item-list">
								<div class="product-thumbnail">
									<div class="label label-default label-new">New</div>	
									<figure class="thumbnail-img">
										<a href="">
											<img src="images/jeans.png" alt="jeans.png">
										</a>
										<figcaption class="thumbnail-caption">
											<a href="" class="add-btn">
												<i class="fa fa-heart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Wishlist</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-shopping-cart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Add to Cart</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-retweet"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Compare</div> 
												</div>
											</a>
										</figcaption>
									</figure>
									<div class="item-detail">
										<h3 class="product-title">Gaten Mazo Pika</h3>
										<div class="star-rating"></div>
										<div class="product-price">
											<span class="price">$35.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-item-list">
								<div class="product-thumbnail">
									<div class="label label-default label-sale">Sale</div>
									<div class="label label-default label-new">New</div>	
									<figure class="thumbnail-img">
										<a href="">
											<img src="images/jacket.png" alt="jacket.png">
										</a>
										<figcaption class="thumbnail-caption">
											<a href="" class="add-btn">
												<i class="fa fa-heart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Wishlist</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-shopping-cart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Add to Cart</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-retweet"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Compare</div> 
												</div>
											</a>
										</figcaption>
									</figure>
									<div class="item-detail">
										<h3 class="product-title">Gaten Mazo Pika</h3>
										<div class="star-rating"></div>
										<div class="product-price">
											<span class="price old-price">$50.00</span>
											<span class="price">$35.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-item-list">
								<div class="product-thumbnail">
									<div class="label label-default label-new">New</div>	
									<figure class="thumbnail-img">
										<a href="">
											<img src="images/leather-jacket.png" alt="leather-jacket.png">
										</a>
										<figcaption class="thumbnail-caption">
											<a href="" class="add-btn">
												<i class="fa fa-heart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Wishlist</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-shopping-cart"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Add to Cart</div> 
												</div>
											</a>
											<a href="" class="add-btn">
												<i class="fa fa-retweet"></i>
												<div class="tooltip left" role="tooltip"> 
													<div class="tooltip-arrow"></div> 
													<div class="tooltip-inner"> Compare</div> 
												</div>
											</a>
										</figcaption>
									</figure>
									<div class="item-detail">
										<h3 class="product-title">Gaten Mazo Pika</h3>
										<div class="star-rating"></div>
										<div class="product-price">
											<span class="price">$35.00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="secondary-right-sidebar col-sm-3">
				<div class="sidebar">
					<aside class="widget-block">
						<h3 class="widget-title"><span>Categories</span></h3>
						<ul>
							<li class="item-has-children"><a href="">Kid's & Baby Clothing (12)</a>
								<ul>
									<li><a href="">Boy's Clothing (3)</a></li>
									<li><a href="">Girl's Clothing (8)</a></li>
								</ul>
							</li>
							<li><a href="">Men's Accessories (0)</a></li>
							<li><a href="">Men's Clothing (8)</a></li>
							<li><a href="">Singles (10)</a></li>
							<li><a href="">Women's Accessories (18)</a></li>
							<li><a href="">Women's Clothing (6)</a></li>
						</ul>
					</aside>
					<aside class="widget-block">
						<h3 class="widget-title"><span>Products</span></h3>
						<div class="product-list-widget-slider">
							<div id="carousel-product-list" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<div class="row">
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/jacket.png" alt="jacket.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/jeans.png" alt="jeans.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/leather-jacket.png" alt="leather-jacket.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/jacket.png" alt="jacket.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/jeans.png" alt="jeans.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/leather-jacket.png" alt="leather-jacket.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
											<div class="col-sm-12 product-list-widget">
												<a href="">
													<img src="images/polo-shirt.png" alt="polo-shirt.png">
													<span class="product-title">Mazo Pika</span>
												</a>
												<div class="star-rating"></div>
												<span class="amount">$48.00</span>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control left" href="#carousel-product-list" role="button" data-slide="next">
									<span class="fa fa-angle-right" aria-hidden="true"></span>
								</a>
								<a class="carousel-control right" href="#carousel-product-list" role="button" data-slide="prev">
									<span class="fa fa-angle-left" aria-hidden="true"></span>
								</a>
							</div>	
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</main>

<?php 
include('footer.php');
?>