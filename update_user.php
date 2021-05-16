<div class="modal fade" id="update_modal<?php echo $row['tailor_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<form method="POST" action="update_query.php" style="margin-top:50%;" enctype= multipart/form-data>
				<div class="modal-header">
					<h3 class="modal-title">Update User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
					 
				         <div class="form-group">
							<label>Shop Name</label>
							<input type="hidden" name="tailor_id" value="<?php echo $row['tailor_id']?>"/>
							<input style="font-size: 100%" type="text" name="shop_name" value="<?php echo $row['shop_name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Owner Name</label>
							<input style="font-size: 100%" type="text" name="owner_name" value="<?php echo $row['owner_name']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							 <label>Profile Photo</label>
					         <input type="file" name="image" accept=".jpeg,.jpg,.png" id="image" class="form-control">
						 </div>
						<div class="form-group">
							<label>Address</label>
							<input style="font-size: 100%" type="text" name="shop_street_address" value="<?php echo $row['shop_street_address']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input style="font-size: 100%" type="text" name="contact_no" value="<?php echo $row['contact_no']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>State</label>
							<input style="font-size: 100%" type="text" name="shop_state" value="<?php echo $row['shop_state']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Description:</label>
							<input style="font-size: 100%" type="text" name="bio" value="<?php echo $row['bio']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-dark btn-default"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-default" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="scripts.js"></script>