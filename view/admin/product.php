<?php

    require('./db/connection.php');

    $id = $_SESSION['id'];

	$query = "SELECT product.*, product.id as product_id, 
			product_process.*, 
			SUM(product_process.number_product) as 'p_total'
			FROM `product_process`,`product`, `user`
			WHERE user.id = $id
            AND user.id = product.uid
            AND product.id = product_process.pid
			AND product_process.status_id != 2
			GROUP BY product_process.pid";

    $results = $conn->query($query);
?>

<div class="container mt-4">
    <div class="row">
    <div class="col-12">

    <h4>Product Status</h4>

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
                while ($row = mysqli_fetch_assoc($results)) {
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

