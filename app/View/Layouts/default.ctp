<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of fi             must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gentallela Alela! | </title>
    	<!-- favicon -->
    	<link rel="icon" href="<?php echo $this->webroot;?>app/webroot/production/images/favicon.ico" />
		<!-- Bootstrap -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

		<!-- bootstrap-wysiwyg -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
		<!-- Select2 -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
		<!-- Switchery -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/switchery/dist/switchery.min.css" rel="stylesheet">


		<!-- Datatables -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?php echo $this->webroot;?>app/webroot/build/css/custom.min.css" rel="stylesheet">
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="<?php echo $this->webroot;?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
						</div>
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<?php  echo $this->element('menu-profile-quick-info'); ?>
						<!-- /menu profile quick info -->
						<br />
						<!-- sidebar menu -->
						<?php  echo $this->element('sidebar-menu'); ?>
						<!-- /sidebar menu -->
						<!-- /menu footer buttons -->
						<?php  echo $this->element('menu-footer-buttons'); ?>
						<!-- /menu footer buttons -->
					</div>
				</div>
				<!-- top navigation -->
				<?php  echo $this->element('top-navigation'); ?>
				<!-- /top navigation -->

				<!-- page content -->
				<div class="right_col" role="main">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>	

				<?php //echo $this->element('sql_dump'); ?>	
				</div>
				<!-- /page content -->   			

				<!-- footer content -->
				<?php  echo $this->element('footer-content'); ?>
				<!-- /footer content -->

			</div>
		</div>

		<!-- jQuery -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/nprogress/nprogress.js"></script>

    <!-- bootstrap-progressbar -->
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

		<!-- iCheck -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/iCheck/icheck.min.js"></script>
		<!-- Parsley -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/parsleyjs/dist/parsley.min.js"></script>

    <!-- Switchery -->
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/select2/dist/js/select2.full.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo $this->webroot;?>app/webroot/build/js/custom.min.js"></script>

		<!-- Datatables -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/jszip/dist/jszip.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/pdfmake/build/pdfmake.min.js"></script>
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/pdfmake/build/vfs_fonts.js"></script>

		<!-- Datatables -->
    <?php echo $this->Html->script('/app/webroot/vendors/js/datatables.js'); ?>
		<!-- /Datatables -->

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          placeholder: "Sélectionner...",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

	</body>
</html>