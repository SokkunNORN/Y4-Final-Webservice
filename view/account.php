
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <?php  
                if (!isset($_SESSION['uname'])) {
            ?>
        
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
                </li>
                <li role="presentation">
                    <a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a>
                </li>
            </ul>
            <br>
            <br>

            <div class="tab-content">
                <!-- LOGIN -->
                <div role="tabpanel" class="tab-pane active" id="login">
                
                    <form action="./process/auth_process.php" method="post">
                        <div class="form-group">
                            <input type="text" name="l-uname" class="form-control form-control-sm" placeholder="Username" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="l-pass" class="form-control form-control-sm" placeholder="Password" required>
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="submit" name="l-btn-login" class="btn btn-primary btn-sm">Login</button>
                        </div>
                    </form>

                </div>

                <!-- REGISTER -->
                <div role="tabpanel" class="tab-pane" id="register">

                    <form action="./process/auth_process.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is-seller" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Register as seller
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="r-uname" class="form-control form-control-sm" placeholder="Username" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="r-pass" class="form-control form-control-sm" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" name="r-email" class="form-control form-control-sm" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea type="text" name="r-address" class="form-control form-control-sm" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="r-city" class="form-control form-control-sm" placeholder="City" required>
                                </div>
                            </div>
                            <br>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="number" name="r-zip" class="form-control form-control-sm" placeholder="Zip" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="r-state" class="form-control form-control-sm" placeholder="State">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="r-country" class="form-control form-control-sm" placeholder="Country" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6 class='text-center'>Payment Detail</h6>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="number" name="r-card-number" class="form-control form-control-sm" placeholder="Card Number" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="number" name="r-expiry-month" class="form-control form-control-sm" placeholder="Expiry Month" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="number" name="r-expiry-year" class="form-control form-control-sm" placeholder="Expiry Year" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="number" name="r-cvc" class="form-control form-control-sm" placeholder="CVC" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="modal-footer" style="border: none;">
                                    <button type="submit" name="r-btn-register" class="btn btn-primary btn-sm">Reginster</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <?php 
                } else {
            ?>
            
            <table class="table table-lg table-striped">
                <thead>
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td><?php echo $_SESSION['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><?php echo $_SESSION['uname']; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><?php echo $_SESSION['address']; ?></td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td><?php echo $_SESSION['city']; ?></td>
                    </tr>
                    <tr>
                        <td>Zip:</td>
                        <td><?php echo $_SESSION['zip']; ?></td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td><?php echo $_SESSION['state']; ?></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><?php echo $_SESSION['country']; ?></td>
                    </tr>
                    <tr>
                        <td>Card Number:</td>
                        <td><?php echo $_SESSION['cardNumber']; ?></td>
                    </tr>
                    <tr>
                        <td>Expiry Month:</td>
                        <td><?php echo $_SESSION['expiryMonth']; ?></td>
                    </tr>
                    <tr>
                        <td>Expiry Year:</td>
                        <td><?php echo $_SESSION['expiryYear']; ?></td>
                    </tr>
                    <tr>
                        <td>CVC:</td>
                        <td><?php echo $_SESSION['cvc']; ?></td>
                    </tr>
                </tbody>
            </table>
            <form action="./process/auth_process.php" method="post">
                <button type="submit" name="btn-logout" class="btn btn-primary btn-sm">Logout</button>
            </form>

            <?php
                }
            ?>
        </div>
    </div>
</div>

<?php

