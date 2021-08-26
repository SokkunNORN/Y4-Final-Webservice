<?php
  require('./components/slideShow.php');
  require('./db/connection.php');
	$base_url = '/Y4-ORM-Webservices/Final/';
  $query = "SELECT * 
        FROM `product`
        WHERE product.status_id = 1
        LIMIT 4";

  $statement = $conn->prepare($query);

  if ($statement->execute()) {
    $result = $statement->fetchAll();
    ?>
    <div class="container">
    <div class="row">
      <?php
      foreach ($result as $row) {
      ?>   
      <div class="col-md-6 col-sm-12 mt-4">
        <div class="card" style="border: none;">
          <img name="image_file" src="<?php echo './asset/' . $row['image']; ?>" class="img-thumbnail mx-auto d-block">
          <div class="card-body">
            <h5 class="card-title" name="product_name" id="product_name"><?php echo $row['name']; ?></h5>
            <h6 name="total_amount" id="total_amount"><?php echo $row['price']; ?>$</h6>
            <h6 name="description"><?php echo $row['description']; ?></h6>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy Now</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="js/jquery.creditCardValidator.js"></script>
<script>
  function validate_form() {
        var valid_card = 0;
        var valid = false;
        var card_cvc = $('#card_cvc').val();
        var card_expiry_month = $('#card_expiry_month').val();
        var card_expiry_year = $('#card_expiry_year').val();
        var card_holder_number = $('#card_holder_number').val();
        var email_address = $('#email_address').val();
        var customer_name = $('#customer_name').val();
        var customer_address = $('#customer_address').val();
        var customer_city = $('#customer_city').val();
        var customer_pin = $('#customer_pin').val();
        var customer_country = $('#customer_country').val();
        var name_expression = /^[a-z ,.'-]+$/i;
        var email_expression = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
        var month_expression = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
        var year_expression = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
        var cvv_expression = /^[0-9]{3,3}$/;
 
        if (valid_card == 1) {
            if (!month_expression.test(card_expiry_month)) {
                $('#card_expiry_month').addClass('require');
                $('#error_card_expiry_month').text('Invalid Data');
                valid = false;
            } else {
                $('#card_expiry_month').removeClass('require');
                $('#error_card_expiry_month').text('');
                valid = true;
            }
 
            if (!year_expression.test(card_expiry_year)) {
                $('#card_expiry_year').addClass('require');
                $('#error_card_expiry_year').error('Invalid Data');
                valid = false;
            } else {
                $('#card_expiry_year').removeClass('require');
                $('#error_card_expiry_year').error('');
                valid = true;
            }
 
            if (!cvv_expression.test(card_cvc)) {
                $('#card_cvc').addClass('require');
                $('#error_card_cvc').text('Invalid Data');
                valid = false;
            } else {
                $('#card_cvc').removeClass('require');
                $('#error_card_cvc').text('');
                valid = true;
            }
            if (!name_expression.test(customer_name)) {
                $('#customer_name').addClass('require');
                $('#error_customer_name').text('Invalid Name');
                valid = false;
            } else {
                $('#customer_name').removeClass('require');
                $('#error_customer_name').text('');
                valid = true;
            }
 
            if (!email_expression.test(email_address)) {
                $('#email_address').addClass('require');
                $('#error_email_address').text('Invalid Email Address');
                valid = false;
            } else {
                $('#email_address').removeClass('require');
                $('#error_email_address').text('');
                valid = true;
            }
 
            if (customer_address == '') {
                $('#customer_address').addClass('require');
                $('#error_customer_address').text('Enter Address Detail');
                valid = false;
            } else {
                $('#customer_address').removeClass('require');
                $('#error_customer_address').text('');
                valid = true;
            }
 
            if (customer_city == '') {
                $('#customer_city').addClass('require');
                $('#error_customer_city').text('Enter City');
                valid = false;
            } else {
                $('#customer_city').removeClass('require');
                $('#error_customer_city').text('');
                valid = true;
            }
 
            if (customer_pin == '') {
                $('#customer_pin').addClass('require');
                $('#error_customer_pin').text('Enter Zip code');
                valid = false;
            } else {
                $('#customer_pin').removeClass('require');
                $('#error_customer_pin').text('');
                valid = true;
            }
 
            if (customer_country == '') {
                $('#customer_country').addClass('require');
                $('#error_customer_country').text('Enter Country Detail');
                valid = false;
            } else {
                $('#customer_country').removeClass('require');
                $('#error_customer_country').text('');
                valid = true;
            }
 
 
        }
        return valid;
    }
 
    Stripe.setPublishableKey('pk_test_51Hc3WOFDPuwTsMlmwXOUR70EzNPz0vf7wvizPSboRKJeYz6EIDX8czW8wMCcu3bPC9BZLbDfKFI12z2byT8nWyg0004pjZ4ral');
  
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#button_action').attr('disabled', false);
            // $('#message').html(response.error.message).show();
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
                number: $('#card_holder_number').val(),
                cvc: $('#card_cvc').val(),
                exp_month: $('#card_expiry_month').val(),
                exp_year: $('#card_expiry_year').val()
            }, stripeResponseHandler);
            return false;
    }
 
 
    function only_number(event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode != 32 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>