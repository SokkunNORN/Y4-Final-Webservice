<?php 
    require('./db/connection.php');

	$buyer_id = $_SESSION['id'];

    $query = "SELECT product.*, product.id as product_id, 
			product_process.*, 
            SUM(product_process.number_product) as 'p_total'
            FROM `product_process`,`product`
            WHERE product.id = product_process.pid
            AND product_process.buyer_id = $buyer_id
            GROUP BY product_process.pid;";

    $results = $conn->query($query);
    if ($results) {
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
	  <form method="post" action="#">
      <div class="modal-content">
		  
        <div class="modal-body">
          	<h4 class="modal-title">Customer Detail</h4>
			<br>
			<br>
		  	<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Card holder name" required>
			</div>
				<br>
		  	<div class="form-group">
				<input type="email" class="form-control form-control-sm" placeholder="Email" required>
			</div>
				<br>
		  	<div class="form-group">
				<textarea type="text" class="form-control form-control-sm" placeholder="Address"></textarea>
			</div>
				<br>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="City" required>
					</div>
				</div>
				<br>
				<div class="col-6">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Zip" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="State" required>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="Country" required>
					</div>
				</div>
			</div>
			<hr>
			<h6 class='text-center'>Payment Detail</h6>
			<div class="form-group">
				<input type="number" class="form-control form-control-sm" placeholder="Card Number" required>
			</div>
			<br>

			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Expiry Month" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Expiry Year" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="CVC" required>
					</div>
				</div>
			</div>
        </div>
        
        <div class="modal-footer" style="border: none;">
          <button type="submit" class="btn btn-primary btn-sm" name="btn_paynow">Pay Now</button>
        </div>
        
      </div>
	  </form>
    </div>
</div>
</div>
<?php
    }
?>