<?php

  session_start();
  
  $base_url = '/Y4-ORM-Webservices/Final/';

  require('./components/slideShow.php');
  require('./db/connection.php');

  $query = "SELECT * 
        FROM `product`
        LIMIT 4";

  $results = $conn->query($query);

  if ($results) {
    ?>
    <div class="container">
    <div class="row">
      <?php
      while ($row = mysqli_fetch_assoc($results)) {
      ?>   
      <div class="col-md-6 col-sm-12 mt-4">
        <div class="card" style="border: none;">
          <img src="<?php echo './asset/' . $row['image']; ?>" class="img-thumbnail mx-auto d-block">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <h6><?php echo $row['price']; ?>$</h6>
            <h6><?php echo $row['description']; ?></h6>
            <?php
            if (!isset($_SESSION['uname'])) {
              ?>
                <a href="<?php echo $base_url."?link=account"; ?>" class="btn btn-primary">Add To Cart</a>
              <?php
            } else {
            ?>
            <button onclick="addToCart(<?php echo $row['id'];?>)" class="btn btn-primary">Add To Cart</button>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php 
      };
      ?>
    </div>
    </div>
    <?php
  }
  
?>

<script>

    function addToCart (id) {
        $.ajax({
            url: "./process/product_process.php",
            method: "POST",
            data: {
                id: id,
                p_number: 1,
                action: 'add'
            },
            success: function(data) {
              alert('Product has been added into cart.')
            }
        })
    }

</script>
