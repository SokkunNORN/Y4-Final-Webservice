
<div class="modal" id="myModal">
    <div class="modal-dialog">
	  <form method="post" action="#">
      <div class="modal-content">
		  
        <div class="modal-body">
          	<h4 class="modal-title">Customer Detail</h4>
			<br>
			<br>
		  	<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Card holder name" required>
			</div>
				<br>
		  	<div class="form-group">
				<input type="email" class="form-control form-control-sm" placeholder="Email" required>
			</div>
				<br>
		  	<div class="form-group">
				<textarea type="text" class="form-control form-control-sm" placeholder="Address"></textarea>
			</div>
				<br>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="City" required>
					</div>
				</div>
				<br>
				<div class="col-6">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Zip" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="State" required>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<input type="text" class="form-control form-control-sm" placeholder="Country" required>
					</div>
				</div>
			</div>
			<hr>
			<h6 class='text-center'>Payment Detail</h6>
			<div class="form-group">
				<input type="number" class="form-control form-control-sm" placeholder="Card Number" required>
			</div>
			<br>

			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Expiry Month" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="Expiry Year" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<input type="number" class="form-control form-control-sm" placeholder="CVC" required>
					</div>
				</div>
			</div>
        </div>
        
        <div class="modal-footer" style="border: none;">
          <button type="submit" class="btn btn-primary btn-sm" name="btn_paynow">Pay Now</button>
        </div>
        
      </div>
	  </form>
    </div>
</div>
