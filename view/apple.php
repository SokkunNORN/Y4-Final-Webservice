<?php
    require('./db/connection.php');

    $query = "SELECT product.* 
        FROM `product`, `brand`
        WHERE brand.id = product.brand_id
        AND brand.name LIKE 'Apple'";

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
                        <div class="row mt-3">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="number" value='1' id="<?php echo 'quantity-'.$row['id'] ?>" class="form-control form-control-sm" name="" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <?php
                                if (!isset($_SESSION['uname'])) {
                                ?>
                                    <a class="btn btn-block btn-sm btn-warning" href="<?php echo $base_url."?link=account"; ?>" style="width: 100%;">
                                        <i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-shopping-cart"></i>
                                    </a>
                                <?php
                                } else {
                                ?>
                                <button class="btn btn-block btn-sm btn-warning" onclick="addToCart(<?php echo $row['id'];?>)" style="width: 100%;" type="submit">
                                    <i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-shopping-cart"></i>
                                </button> 
                                <?php } ?>
                            </div>
                        </div>
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

<script>

    function addToCart (id) {

        const pNumber = document.getElementById('quantity-' + id).value
        $.ajax({
            url: "./process/product_process.php",
            method: "POST",
            data: {
                id: id,
                p_number: pNumber,
                action: 'add'
            },
            success: function(data) {
              alert('Product has been added into cart.')
            }
        })
    }

</script>

