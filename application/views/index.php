<!DOCTYPE>
<html lang="pl">
<head>
	<meta charset="UTF-8">
  <title>Zadanie</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/fontello.css" rel="stylesheet">
</head>
<body>
	<header id="header">
	  <?php
      echo $this->view($header);
	  ?>
  </header>
  <section id="availability">
    <?php
      //echo $this->view($availability);
    ?>
  </section>
  <section id="apartment-projections">
    <?php
      //echo $this->view($apartment_projections);
    ?>
  </section>
  <section id="contact">
    <?php 
      //echo $this->view($contact);
    ?>
  </section>
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core.js"></script>
</body>
</html>