<?php

    require('./db/connection.php');

    $id = $_SESSION['id'];

	$query = "SELECT product.*, product.id as pid, brand.name as brand_name
			FROM `product`, `brand`, `user`
			WHERE product.brand_id = brand.id
			AND user.id = product.uid
            AND user.id = $id";

    $results = $conn->query($query);
?>

<div class="container mt-4">
    <div class="row">
    <div class="col-12">

    <h4>Product List</h4>

    <div class="modal-footer" style="border: none;">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Create
        </button>
    </div>

    <table class="table table-lg mt-4 table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($results)) {
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td>$ <?php echo $row['price']; ?></td>
                <td><?php echo $row['discount']; ?>%</td>
                <td><?php echo $row['brand_name'] ?></td>
                <td>
                <form action="./process/product_process.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row['pid']; ?>">
                    <button type="submit" name="remove" class="btn btn-outline-danger btn-sm">Remove</button>
				</form>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="./process/product_process.php" method="post">
            <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="pname" placeholder="Name">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="pdescription" placeholder="Description">
                </div>
                <div class="form-group mt-2">
                    <input type="number" class="form-control" name="pprice" placeholder="Price">
                </div>
                <div class="form-group mt-2">
                    <input type="number" class="form-control" name="pdiscount" placeholder="Discount">
                </div>
                <div class="form-group mt-2">
                <select class="form-control" name="pbrand" id="exampleFormControlSelect1">
                    <option value="1">Apple</option>
                    <option value="2">MSI</option>
                    <option value="3">Dell</option>
                    <option value="4">Asus</option>
                </select>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button type="submit" name="btn-add-product" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
