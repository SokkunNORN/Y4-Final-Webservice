<?php
	$base_url = '/Y4-ORM-Webservices/Final/';
?>

<!-- <demo:responsive-website-header> -->
<div class="dc-global-header-wrapper is-hidden-small" 
    data-dc-global-header="clone-apple"
    data-dc-target="large"
    data-dc-source="default"
    data-dc-layout="default"
    data-dc-appearance="scheme-default"
    data-dc-action="default"
    data-dc-state="default">
	<div class="dc-global-header">
		
		<div class="dc-section-wrapper">
			<div class="dc-section">
				
				<div class="dc-section-body-wrapper">
					<div class="dc-section-body">
						
						<div class="dc-cell-wrapper" data-dc-cell="primary">
							<div class="dc-cell">
								
								<!-- <dc-element:nav-menu> -->
								<div class="dc-element-wrapper" 
                                    data-dc-element="nav-menu-justify"
                                    data-dc-source="default"
                                    data-dc-layout="horizontal"
                                    data-dc-appearance="default"
                                    data-dc-action="default"
                                    data-dc-state="default"
                                >
									<ul class="dc-element">
										
										<li class="dc-element-item"><a href="<?php echo $base_url; ?>"><i class="dc-icon-glyph dc-icon-glyph-small dc-icon-glyph-home"></i></a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=apple"; ?>">Apple</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=msi"; ?>">MSI</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=dell"; ?>">Dell</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=asus"; ?>">Asus</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=contact"; ?>">Contact</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=about"; ?>">About</a></li>
										<li class="dc-element-item"><a href="<?php echo $base_url."?link=account"; ?>"><i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-user"></i></a></li>
										
										<!-- ... -->
										
										<li class="dc-element-item justify"></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="dc-global-header-wrapper is-hidden-large" 
    data-dc-global-header="clone-apple"
    data-dc-target="small"
    data-dc-source="default"
    data-dc-layout="default"
    data-dc-appearance="scheme-default"
    data-dc-action="default"
    data-dc-state="default">
	<div class="dc-global-header">
		
		<div class="dc-section-wrapper">
			<div class="dc-section">
				
				<div class="dc-section-body-wrapper">
					<div class="dc-section-body">
						
						<div class="dc-cell-wrapper" data-dc-cell="primary">
							<div class="dc-cell">
								
								<!-- <dc-element:nav-menu> -->
								<div class="dc-element-wrapper" 
                                    data-dc-element="nav-menu"
                                    data-dc-source="default"
                                    data-dc-layout="horizontal"
                                    data-dc-appearance="default"
                                    data-dc-action="default"
                                    data-dc-state="default"
                                >
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#"><i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-bars"style="line-height: 48px;"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="dc-cell-wrapper" data-dc-cell="secondary">
							<div class="dc-cell">
								
								<!-- <dc-element:nav-menu> -->
								<div class="dc-element-wrapper" 
                                    data-dc-element="nav-menu"
                                    data-dc-source="default"
                                    data-dc-layout="horizontal"
                                    data-dc-appearance="default"
                                    data-dc-action="default"
                                    data-dc-state="default"
                                >
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#"><i class="dc-icon-glyph dc-icon-glyph-small dc-icon-glyph-home"style="line-height: 48px;"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="dc-cell-wrapper" data-dc-cell="tertiary">
							<div class="dc-cell">
								
								<!-- <dc-element:nav-menu> -->
								<div class="dc-element-wrapper" 
                                    data-dc-element="nav-menu"
                                    data-dc-source="default"
                                    data-dc-layout="horizontal"
                                    data-dc-appearance="default"
                                    data-dc-action="default"
                                    data-dc-state="default"
                                >
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#"><i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-user"style="line-height: 48px;"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
	  <form action="#">
      <div class="modal-content">
		  
        <div class="modal-body">
          	<h4 class="modal-title">Customer Detail</h4>
			<br>
			<br>
		  	<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Username" required>
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
          <button type="submit" class="btn btn-primary btn-sm" data-dismiss="modal">Sing In</button>
        </div>
        
      </div>
	  </form>
    </div>
</div>