  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <script scr="<?php echo base_url();?>assets/themes/default/css/bootstrap.js"></script>
  <?php 
      foreach($js as $file){
        echo "\n\t\t";
        ?><script type="text/javascript" src="<?php echo $file; ?>"></script><?php
    } echo "\n\t";
  ?>
</body></html>