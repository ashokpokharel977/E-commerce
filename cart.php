<?php 
	include('header.php');
?>

<div class="entry-header">
	<div class="container">
		<h2 class="page-title">Cart</h2>
		<div class="bread-crumb-wrap">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Cart</li>
			</ol>
		</div>
	</div>
</div>

<main class="site-main">
	<div class="container">
		<div class="row">
			<div class="entry-content">
				<table class="table">
					<thead>
						<tr>
							<th class="col-sm-2">&nbsp;</th>
							<th class="col-sm-3">Product</th>
							<th class="col-sm-2">Price</th>
							<th class="col-sm-2">Quantity</th>
							<th class="col-sm-2">Total</th>
							<th class="col-sm-1">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href=""><img src="images/leather-jacket.png" alt="leather-jacket.png"></a></td>
							<td><a href="">Donec Ac Tempus</a></td>
							<td><span class="amount">$180.00</span></td>
							<td><div class="quantity"><input type="number" name="quantity" class="form-control" step="1" min="1" max="" value="1"></div></td>
							<td><span class="amount">$180.00</span></td>
							<td><div class="remove-item"><a href=""><i class="fa fa-trash"></i></a></div></td>
						</tr>
						<tr>
							<td><a href=""><img src="images/leather-jacket.png" alt="leather-jacket.png"></a></td>
							<td><a href="">Donec Ac Tempus</a></td>
							<td><span class="amount">$180.00</span></td>
							<td><div class="quantity"><input type="number" name="quantity" class="form-control" step="1" min="1" max="" value="1"></div></td>
							<td><span class="amount">$180.00</span></td>
							<td><div class="remove-item"><a href=""><i class="fa fa-trash"></i></a></div></td>
						</tr>
					</tbody>
				</table>
				<div class="actions">
					<div class="row">
						<div class="col-sm-6">
							<div class="coupon">
								<h3>Coupon</h3>
								<p>Enter your coupon code if you have one.</p>
								<form action="" method="post">
									<div class="form-group">
										<input type="text" name="coupon" class="form-control" placeholder="Coupon code">
									</div>
									<div class="form-group">
										<button type="submit" name="apply=coupon" class="btn btn-default site-btn">Apply Coupon</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="cart_totals">
								<ul>
									<li><span>Subtotal:</span> $180.00</li>
									<li><span>Shipping:</span> Free Shipping</li>
									<li><span>Total:</span> $180.00</li>
								</ul>
								<button type="submit" name="checkout" class="btn btn-default site-btn">Proceed To Checkout</button>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
</main>


<?php 
	include('footer.php');
?>

