<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
    <meta charset="UTF-8">
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="googlebot" content="all, index, follow" />
    
	<?php
  	if(!empty($meta))
  	foreach($meta as $name=>$content){
  		echo "\n\t\t";
  		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
  			 }
  	echo "\n";

  	if(!empty($canonical))
  	{
  		echo "\n\t\t";
  		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

  	}
  	echo "\n\t";

  	foreach($css as $file){
  	 	echo "\n\t\t";
  		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
  	} echo "\n\t";
  ?>
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/0691514f65.js"></script>
    
    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap-right-offset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/novio/css/stylesheet.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/novio/css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>

</head>

  <body id="<?php echo $this->router->fetch_class(); ?>">