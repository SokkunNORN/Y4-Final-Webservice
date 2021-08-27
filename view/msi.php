<?php
    require('./db/connection.php');

    $query = "SELECT product.* 
        FROM `product`, `brand`
        WHERE brand.id = product.brand_id
        AND brand.name LIKE 'MSI'";

    $results = $conn->query($query);
    if ($results) {
?>
<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <?php
        while ($row = mysqli_fetch_assoc($results)) {
        ?>
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="<?php echo './asset/' . $row['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="clearfix mb-3">  <span class="float-start price-hp"><?php echo $row['name']; ?></span> <span class="float-end  badge rounded-pill bg-success"><?php echo $row['price']; ?>$</span> </div>
                        <h5 class="card-title"><?php echo $row['description']; ?></h5>
                        <div class="d-grid gap-2 my-4"> <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Buy Now</a> </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
    }
?>

