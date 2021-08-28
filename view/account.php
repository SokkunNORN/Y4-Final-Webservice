<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
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
                
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="l-uname" class="form-control form-control-sm" placeholder="Username" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="l-pass" class="form-control form-control-sm" placeholder="Password" required>
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="submit" name="l-btn-login" class="btn btn-primary btn-sm" name="btn_paynow">Login</button>
                        </div>
                    </form>

                </div>

                <!-- REGISTER -->
                <div role="tabpanel" class="tab-pane" id="register">
                    <form action="#" method="POST"></form>
                    <div class="row">
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
                                <input type="text" name="r-state" class="form-control form-control-sm" placeholder="State" required>
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
                                <button type="submit" name="r-btn-register" class="btn btn-primary btn-sm" name="btn_paynow">Reginster</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php


