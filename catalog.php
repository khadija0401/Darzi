<div id="myModal<?php echo $row['tailor_id']?>"  class="modal fade" role="dialog">
                <div style="margin-top:20%;" class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                    <form method="POST" action="upload.php"  enctype=multipart/form-data>
                        <div class="modal-header">
                        <input type="hidden" name="tailor_id" value="<?php echo $row['tailor_id']?>"/>
                                <h3 class="modal-title">ADD CATALOGUE</h3>
                        </div>
                        <div style="align-items: center;" class="modal-body">
                        
					
                            <div class="drag-area">
                            <div class="form-group">
							 <label>Profile Photo</label>
					         <input type="file" name="image" accept=".jpeg,.jpg,.png" id="image" class="form-control">
						 </div>
                                
                                    
                           
                        
                            </div>
                            <div class="form-group">
							 <label>Name</label>
					         <input style="font-size: 100%" type="text" name="cat_name"  class="form-control" required="required" />
						 </div>
                         <div class="form-group">
							 <label>Description</label>
					         <input style="font-size: 100%" type="text" name="cat_desc"  class="form-control" required="required" />
						 </div>

                
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button name="upload" class="btn btn-dark btn-default"><span><i class="fa fa-upload" aria-hidden="true"></i></span> Upload</button>
                            <!-- <input type="submit" name="upload" class="btn btn-dark btn-radius" value="Upload" >  -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="script.js"></script>