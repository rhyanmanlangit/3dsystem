<div class="col-md-12" id="dashboard">
	<div class="section-title">Dashboard</div>
	<div class="row">
		<div class="col-md-4">
			<div class="content-box">
				<div class="content-wrapper">
					//display critical stocks here
				</div>
				<div class="content-bottom">
					<div class="content-wrapper">
						<a href="#" class="content-md">View Critical Stocks</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="content-box">
				<div class="content-wrapper">
					//display critical stocks here
				</div>
				<div class="content-bottom">
					<div class="content-wrapper">
						<a href="#" class="content-md">View Critical Stocks</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="content-box">
				<div class="content-wrapper">
					//display critical stocks here
				</div>
				<div class="content-bottom">
					<div class="content-wrapper">
						<a href="#" class="content-md">View Critical Stocks</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-8">
			<div class="content-box">
				<div class="panel">
					<div class="panel-body">
						<div class="content-title">Component Listing</div>
						<p class="content-sub">place sub caption here for the title.</p>
					</div>
				</div>
				<div class="content-wrapper pt0 table-listing">
					<table class="table table-bordered table-striped table-condensed">
						<tr>
							<th>Barcode</th>
							<th>Component Name</th>
							<th>Component Type</th>
							<th>Min. Stock Quantity</th>
							<th>Production Stocks</th>
							<th class="text-center">Status</th>
						</tr>
						<tr>
							<?php 
								for ($i=0; $i < 7; $i++) { 
									echo '<tr>';
									echo '<td>0001 </td>' .
										 '<td>sample component</td>' .
										 '<td>sample type</td>' .
										 '<td>10</td>' .
										 '<td>20</td>' .
										 '<td>Good</td>';
									echo '</tr>';
								}
							 ?>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="content-box">
				<div class="panel">
					<div class="panel-body">
						<div class="content-title">Product Order List</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>