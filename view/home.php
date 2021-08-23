<?php
  require('./components/slideShow.php');
  require('./db/connection.php');

  $query = "SELECT * 
        FROM `product`
        WHERE product.status_id = 1";

  $results = $conn->query($query);

  if ($results) {
    ?>
    <div class="grid-container">
      <?php
      while ($row = mysqli_fetch_assoc($results)) {
      ?>     
        <div class="grid-item" style="background-image: url(<?php echo './asset/' . $row['image']; ?>)">
          <div>
            <h4><?php echo $row['name']; ?></h4>
            <p><?php echo $row['price']; ?>$</p>
            <small><?php echo $row['description']; ?></small>
            <br>
            <br>
            <a href="#" class="btn">
                <span class="btn-inner">Buy Now</span>
            </a>
          </div>
        </div> 
      <?php 
      };
      ?>
    </div>
    <?php
  }
  
?>
