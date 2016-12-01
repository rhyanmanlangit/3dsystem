<div class="col-md-12" id="componentType">
	<div class="section-title mt20">Component Type</div>
	<div class="row">
		<div class="col-md-8">
			<div class="content-box">
				<div class="panel">
					<div class="panel-boy">
						<div class="content-wrapper">
							<div class="table-listing">
								<table class="table table-striped table-bordered">
									<tr>
										<th>ID</th>
										<th>Component Name</th>
										<th>Component Alias</th>
									</tr>
									<?php 
										foreach ($component_type_list as $key => $value) {
											echo '<tr>';
												echo '<td>'.$value['component_type_id'].'</td>'.
													 '<td>'.$value['component_type_name'].'</td>'.
													 '<td>'.$value['component_type_alias'].'</td>';
											echo '</tr>';
										}
									 ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="content-box">
				<div class="content-wrapper">
				<div class="content-title">Add Component Type</div>
					<form class="form" action="<?php echo base_url('/component_controller/add_component_type'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						<div class="form-group">
							<label for="componentName">Component Name</label>
							<input type="text" class="form-control" name="cc_name" placeholder="eg. Spacer" required>  
						</div>
						<div class="form-group">
							<label for="componentAlias">Component Alias</label>
							<input type="text" class="form-control" name="cc_alias" placeholder="eg. SPC" required pattern="[A-Za-z]{3}">
							<small id="alisHelp" class="form-text text-muted">Alias should be related to the component name. Max of <strong>(3)</strong> Characters</small>
						</div>
						<?php 
							if (isset($_SESSION['messageErr']))  {
								if (!empty($_SESSION['messageErr'])) { ?>
									<div class="alert alert-danger" id="danger-alert">
									    <button type="button" class="close closeE" data-dismiss="alert">x</button>
									    <strong>Error! </strong>
									    <?php echo $_SESSION['messageErr'] ?>
									</div>
								<?php $this->session->sess_destroy();	
								}
							}
							if (isset($_SESSION['messageSuc'])) {
								if (!empty($_SESSION['messageSuc'])) { ?>
									<div class="alert alert-success" id="success-alert">
									    <button type="button" class="close closeS" data-dismiss="alert">x</button>
									    <strong>Thank you! </strong>
									    <?php echo $_SESSION['messageSuc'] ?>
									</div>
								<?php $this->session->sess_destroy();
								}
							}
						 ?>
						<button class="btn btn-primary btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>