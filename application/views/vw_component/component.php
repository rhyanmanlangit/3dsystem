<div class="col-md-12" id="dashboard">
	<div class="section-title">Components</div>
	<div class="content-box">
		<div class="panel">
			<div class="panel-body">
				<div class="content-title">Toolbox</div>
				<div class="row">
					<div class="col-md-4">
						<form class="form-inline" action="">
							<div class="form-group">
								<select class="form-control" id="pagenos">
								    <option>10</option>
								    <option>15</option>
								    <option>20</option>
								    <option>30</option>
								</select>
								<label for="recordpetpage" class="data-info">record per page</label>
							</div>
						</form>
					</div>
					<div class="col-md-8 text-right">
						<div class="tool-search">
							<div class="btn-group cont">
							  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addComponent"><i class="fa fa-plus" aria-hidden="true"></i> Add Component</button>
							  <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Component</button>
							  <a href="<?php echo base_url('component_controller/component_type'); ?>" type="button" class="btn btn-primary btn-sm"><i class="fa fa-asterisk" aria-hidden="true"></i> Add Component Type</a>
							</div>
							<div class="cont">
								<form action="" class="form-inline">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search...">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<div class="table-listing mt20">
							<table class="table table-striped table-bordered dataTable">
								<tr>
									<th>Barcode</th>
									<th>Name</th>
									<th>Type</th>
									<th>Dimension</th>
									<th>Min Stock</th>
									<th>Production Stocks</th>
									<th>US Price/Order</th>
									<th>US Price/Pc</th>
									<th>Peso Price</th>
								</tr>
								<tr>
									<!-- test data -->
									<td>SPC001</td>
									<td><a href="#">Aluminum Spacer</a></td>
									<td>Spacer</td>
									<td>255 / 255 / 255</td>
									<td>10</td>
									<td>20</td>
									<td>$2.10</td>
									<td>$0.02</td>
									<td>₱120.00</td>
								</tr>
							</table>
						</div>
						<div class="control-tool-box">
							<p class="data-info">Showing 1 to 10 of total entries</p>
						</div>
					</div> <!--col-md-12 -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('vw_component/modal_add_component'); ?>