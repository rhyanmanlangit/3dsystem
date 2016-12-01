<div class="col-md-12" id="dashboard">
	<div class="section-title">Manufacturer List</div>
	<div class="content-box">
		<div class="panel">
			<div class="panel-body">
				<div class="content-title">Toolbox</div>
				<div class="row">
					<div class="col-md-6">
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
					<div class="col-md-6 text-right">
						<div class="tool-search">
							<div class="btn-group cont">
							  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addManufacturer"><i class="fa fa-plus" aria-hidden="true"></i> Add Manufacturer</button>
							  <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Manufacturer</button>
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
									<th width="20%">Name</th>
									<th width="20%">Complete Address</th>
									<th width="5%" class="text-center">Zipcode</th>
									<th width="5%" class="text-center">Country</th>
									<th width="10%">Phone</th>
									<th width="5%">Fax</th>
									<th width="10%">Email</th>
									<th width="10%" class="text-center">In-charge</th>
								</tr>
								<?php 
									foreach ($manufacturer_list as $key => $value) {
										echo '<tr>';
										echo '<td>'.$value['manufacturer_name'].'</td>'.
											 '<td>'.$value['manufacturer_addrs'].'</td>'.
											 '<td class="text-center">'.$value['manufacturer_zip'].'</td>'.
											 '<td class="text-center">'.$value['manufacturer_country'].'</td>'.
											 '<td>'.$value['manufacturer_phone_nos'].'</td>'.
											 '<td>'.$value['manufacturer_fax_nos'].'</td>'.
											 '<td><a href="mailto:'.$value["manufacturer_email"].'" title="Send Email" >'.$value['manufacturer_email'].'</a></td>'.
											 '<td>'.$value['manufacturer_incharge'].'</td>';
										echo '</tr>';
									}
								 ?>
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
<?php $this->load->view('vw_manufacturer/modal_add_manufacturer'); ?>