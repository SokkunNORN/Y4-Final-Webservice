<?php
  require('./components/slideShow.php');
  require('./db/connection.php');

  $query = "SELECT * 
        FROM `product`
        WHERE product.status_id = 1";

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
            <a href="#" class="btn btn-primary">Buy Now</a>
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
