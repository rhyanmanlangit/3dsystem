<?php $this->load->view('include/header.php'); ?>
<!-- load the body -->
<div class="container-fluid">
  <div class="row">
   	<div class="col-md-2">
   		<?php echo $this->load->get_section('sidebar'); ?>
   	</div>
   	<div class="col-md-10">
   		<div class="row">
			<?php $this->load->view('default/sub-header'); ?>
   			<?php echo $output;?>
   		</div>
   	</div>
  </div>
</div>
<!-- /container fluid-->
<?php $this->load->view('include/footer.php'); ?>