
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAM - Computer</title>

    <link rel="icon" href="./asset/logo.png" type="image/x-icon">

    <!-- Header -->
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/global-header.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-section.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.classes.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.css-reset.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.color.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.typography.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.icon.glyph.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-element.nav-menu.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Slide Show -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic">
    <link rel="stylesheet" href="../style/footer.css">

</head>
<body>

<?php
        require('../components/header.php');
    ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
<form method="post" id="order_process_form" action="./view/payment.php">
<div class="modal-content">

<div class="modal-body">
<h4 class="modal-title">Customer Detail</h4>
<br>
<br>
<div class="form-group">
    <input type="text" name="customer_name" id="customer_name" class="form-control form-control-sm" placeholder="Card holder name">
</div>
    <br>
<div class="form-group">
    <input type="email" name="email_address" id="email_address" class="form-control form-control-sm" placeholder="Email">
</div>
    <br>
<div class="form-group">
    <textarea type="text" name="customer_address" id="customer_address" class="form-control form-control-sm" placeholder="Address"></textarea>
</div>
    <br>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <input type="text" name="customer_city" id="customer_city" class="form-control form-control-sm" placeholder="City">
        </div>
    </div>
    <br>
    <div class="col-6">
        <div class="form-group">
            <input type="number" name="customer_pin" id="customer_pin" class="form-control form-control-sm" placeholder="Zip">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <input type="text" name="customer_state" id="customer_state" class="form-control form-control-sm" placeholder="State">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <input type="text" name="customer_country" id="customer_country" class="form-control form-control-sm" placeholder="Country">
        </div>
    </div>
</div>
<hr>
<h6 class='text-center'>Payment Detail</h6>
<div class="form-group">
    <input type="number" name="card_holder_number" id="card_holder_number" class="form-control form-control-sm" placeholder="Card Number">
</div>
<br>

<div class="row">
    <div class="col-4">
        <div class="form-group">
            <input type="number" name="card_expiry_month" id="card_expiry_month" class="form-control form-control-sm" placeholder="Expiry Month">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <input type="number" name="card_expiry_year" id="card_expiry_year" class="form-control form-control-sm" placeholder="Expiry Year">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <input type="number" name="card_cvc" id="card_cvc" class="form-control form-control-sm" placeholder="CVC">
        </div>
    </div>
</div>
</div>

<div class="modal-footer" style="border: none;">
<button type="submit" class="btn btn-primary btn-sm" onclick="stripePay(event)" name="button_action">Pay Now</button>
</div>

</div>
</form>


        
</div>
    </div>
</div>


    <?php
        require('../components/footer.php');
        if (isset($_GET['id'])) {
            echo 'This id: '.$_GET['id'];
        } 
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Slide Show -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</body>
</html>