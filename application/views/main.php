<!DOCTYPE html>
<html lang="en">
  <head><title>Zona REPLIKA'S</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <link href='<?php echo base_url();?>assets/img/zona.png' rel='icon shortcut-icon' />
  <!--Stylesheet-->
  <link href='<?php echo base_url();?>assets/css/bootstrap.min.css' rel='stylesheet' />
  <link href='<?php echo base_url();?>assets/css/style.css' rel='stylesheet' />
  <base href='<?php echo base_url();?>' src='<?php echo base_url();?>' />
<body class='page-index'>
<?php $this->load->view('part/nav');?>
	<div class="container" id="container">
	<div class="row bottom">
	  <div class="col-lg-8 col-md-8 col-sm-7 col-left">
		<?php $this->load->view($page);?>
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-5 col-right">
		<?php $this->load->view($content);?>
	  </div>
	</div>
	</div>
</body>
  <!---Javascript-->
  <script src='<?php echo base_url();?>assets/js/jquery.js'></script>
  <script src='<?php echo base_url();?>assets/js/bootstrap.js'></script>
  <script src='<?php echo base_url();?>assets/js/plugins/fastclick/fastclick.js'></script>
  <script src='<?php echo base_url();?>assets/js/plugins/mixitup/jquery.mixitup.min.js'></script>
  <script src='<?php echo base_url();?>assets/js/plugins/smooth-scroll/jquery.smooth-scroll.min.js'></script>
  <script src='<?php echo base_url();?>assets/js/main.js'></script>
  <script src='<?php echo base_url();?>assets/js/autogrow.js'></script>
  <script src='<?php echo base_url();?>assets/js/my.js'></script>
</html>
