<!-- START PAGE COMPANY POPUP -->
<div id="makechanges" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-body">
				<form action="" method="post" name="changeProductImagePopup" enctype="multipart/form-data" id="changeProductImagePopup">			
				<div class="col-md-12">
					<h3 class="modal-title">Change product data</h3>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="p_prname">Product name <font color="red">*</font></label>
						<input type="text" name="p_prname" id="p_prname" class="form-control" value="" autocomplete="off" />
						<div class="error_message p_prname_required">Product name is required !</div>
					</div>
					<div class="form-group" style="position:relative">
						<label>HS Code <font color="red">*</font></label>
						<input type="hidden" name="hscode_id" class="hscode_id" value="">
						<input type="text" name="hscode" class="form-control hscode" id="p_hscode" value="" placeholder="Type minimum 3 letter..">
						<div class="results"><ul></ul></div>
						<font class="error-msg" id="p_hscode_required">HS code is required !</font>
					</div>
					<div class="form-group">
						<label for="p_shelf_life">Shelf Life</label>
						<input type="text" name="p_shelf_life" id="p_shelf_life" class="form-control" value="" autocomplete="off" />
					</div>
					<div class="form-group">
						<label for="p_image">Product Analysis <span style="font-size:9px; color:#555555">PDF, DOC, DOCX, XLS, XLSX, JPG</span></label>
						<input type="file" name="pa_product_analysis" id="pa_product_analysis" class="form-control" value="" autocomplete="off" />
					</div>
				</div>

				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="p_packaging">Packaging</label>
						<input type="text" name="p_packaging" id="p_packaging" class="form-control" value="" autocomplete="off" />
					</div>

					<div class="form-group">
						<label for="p_awards">AWards</label>
						<input type="text" name="p_awards" id="p_awards" class="form-control" value="" autocomplete="off" />
						<div class="error_message p_awards_required">Product name is required !</div>
					</div>

					<div class="form-group">
						<label for="p_image">Image <span style="font-size:10px; color:#555555">JPG (Dimensions 300x170)</span></label>
						<input type="hidden" name="p_id" id="p_pid" valiue="" />
						<input type="file" name="p_image" id="p_image" class="form-control" value="" autocomplete="off" />
						<div class="error_message p_image_required">Product name is required !</div>
					</div>

					<div class="form-group">
						<label for="production_capacity">Product Capacity</label>
						<input type="text" name="p_production_capacity" id="p_production_capacity" class="form-control" value="" autocomplete="off" />
					</div>

				</div>
					
				<div class="col-sm-12">
					<div class="form-group">
						<label>Describe what are you offering or looking for <font color="red">*</font></label>
						<textarea class="form-control p_describe" id="p_describe" name="p_describe"></textarea>
						<div class="error_message p_describe_required">Description field is required !</div>
						<div class="error_message p_describe_lngz">Description is too long !</div>
						<div id="maxlengthproductpopup" style="width:100%; text-align:left; color:#555555">0 / 350</div>
					</div>	

					<div style="clear:both"></div>
					<div class="btn btn-block btn-yellow" style="font-size:19px; margin-top:15px;" id="change_product">Change</div>
					<font color="red" style="width:100%; margin:10px 0; font-weight:bold">If you change anything product will became unaprooved again !</font>
				</div>	
			</form>
		</div> 
    </div>
  </div>
</div>
<!-- END PAGE COMPANY POPUP -->
