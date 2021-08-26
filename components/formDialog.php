
<div class="modal" id="myModal">
    <div class="modal-dialog">
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
