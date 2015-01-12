<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		 Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link					http://cakephp.org CakePHP(tm) Project
 * @since				 0.10.0
 * @license			 http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= 'ONECOIN: 歩いて寄付するお散歩マーケットプレイス' ?>
	</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Tempus - Modern Landing Page">
		<meta name="author" content="Shy Design">

		<!-- Le styles -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!--[if lt IE 10]>
			<link rel="stylesheet" href="css/ie-fix.css">
		<![endif]-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!--[if IE 7]>
			<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/favicon.ico">

		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/script.js"></script>
		<script src="/js/jquery.bgswitcher.js"></script>
		<script src="/js/jquery.jrumble.js"></script>
</head>
<body>
	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>

	<div class="footer">
		<div class="container">
			<div class="row-fluid">
				<h3 class="footer-title pull-left"><a href="#"><img src="img/onecoin-logo-bk.png" style="height:50px;"></a></h3>
				<p class="pull-right footer-copyright">&copy; All Right Reserved.</p>
			</div> <!-- /row-fluid -->
		</div> <!-- /container -->
	</div> <!-- /footer -->
	<p id="page-top"><a href="#wrap"><img src="img/dog-paw.png"></a></p>
	<script>
		var $page_top = $("#page-top");
		$page_top.jrumble({
			speed: 100
		});
		$page_top.hover(function(){
			//$(this).trigger('startRumble');
		}, function(){
			//$(this).trigger('stopRumble');
		});
	</script>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
