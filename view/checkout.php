<?php
require('./db/connection.php');

$buyer_id = $_SESSION['id'];

if (isset($_SESSION['id'])) {

	$query = "SELECT product.*, product.id as product_id, 
			product_process.*, 
            SUM(product_process.number_product) as 'p_total'
            FROM `product_process`,`product`
            WHERE product.id = product_process.pid
			AND product_process.status_id = 2
            AND product_process.buyer_id = $buyer_id
            GROUP BY product_process.pid";

	$results = $conn->query($query);
	if ($results) {
		$isExit = false;
?>

		<div class="container">
			<div class="row mt-4">
				<div class="col-3"></div>
				<div class="col-6">
					<table class="table table-lg table-striped">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_assoc($results)) {
								$isExit = true;
							?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['p_total']; ?></td>
									<td>$ <?php echo $row['price']; ?></td>
									<td>$ <?php echo $row['price'] * $row['p_total']; ?></td>
									<td>
										<form action="./process/product_process.php" method="post">
											<input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
											<button type="submit" name="remove-product" class="btn btn-outline-danger btn-sm">Delete</button>
										</form>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
					<?php
					if ($isExit) {
					?>
						<form id="order_process_form" method="post" action="./process/product_process.php">
							<div class="modal-footer" style="border: none;">
								<button type="submit" class="btn btn-outline-danger btn-sm" name="btn_clear_checkout">Clear</button>
								<button type="submit" id="button_action" class="btn btn-primary btn-sm" onclick="stripePay(event)" name="btn_pay_checkout">Pay Now</button>
							</div>
						</form>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	<?php
	}

	$query = "SELECT product.*, product.id as product_id, 
			product_process.*, 
			SUM(product_process.number_product) as 'p_total'
			FROM `product_process`,`product`
			WHERE product.id = product_process.pid
			AND product_process.status_id != 2
			AND product_process.buyer_id = $buyer_id
			GROUP BY product_process.pid, product_process.status_id";

	$results_history = $conn->query($query);
	if ($results_history) {
	?>
		<div class="container mt-4">
			<div class="row">
				<div class="col-3"></div>

				<div class="col-6">
					<hr>
					<h4>Product History</h4>
					<table class="table table-lg mt-4 table-striped">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_assoc($results_history)) {
							?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['p_total']; ?></td>
									<td>$ <?php echo $row['price']; ?></td>
									<td>$ <?php echo $row['price'] * $row['p_total']; ?></td>
									<td>
										<?php
										if ($row['status_id'] == 3) {
											echo 'Ordering';
										} else if ($row['status_id'] == 4) {
											echo 'Sold';
										}
										?>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
<?php
	}
} else {
	echo '<h2 class="mt-4 text-center">Please login...</h2>';
}
?>
<script src="https://js.stripe.com/v2/"></script>
<script>
	Stripe.setPublishableKey('pk_test_51Hc3WOFDPuwTsMlmwXOUR70EzNPz0vf7wvizPSboRKJeYz6EIDX8czW8wMCcu3bPC9BZLbDfKFI12z2byT8nWyg0004pjZ4ral');

	function stripeResponseHandler(status, response) {
		if (response.error) {
			$('#message').html(response.error.message).show();
		} else {
			var token = response['id'];
			$('#order_process_form').append("<input type='hidden' name='token' value='" + token + "' />");

			$('#order_process_form').submit();
		}
	}

	function stripePay(event) {
		event.preventDefault();
		$('#button_action').attr('disabled', 'disabled');
		$('#button_action').val('Payment Processing....');
		Stripe.createToken({
			number: <?php echo $_SESSION['cardNumber'] ?>,
			cvc: <?php echo $_SESSION['cvc'] ?>,
			exp_month: <?php echo $_SESSION['expiryMonth'] ?>,
			exp_year: <?php echo $_SESSION['expiryYear'] ?>
		}, stripeResponseHandler);
		return false;
	}
</script>