<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Framework</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		#logo{
			display: block;
			width: 179px;
			height: 45px;
			position: relative;
			top: 15px;
		}
		header{
			height: 75px;
			width: 100%;
			margin-bottom: 40px;
		}
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}
		body { margin: 0px 0px 40px 0px; }
	</style>
</head>
<body>
	<header>
		<div class="container">
			BBS TEST
		</div>
	</header>
	<div class="container">
		<div class="jumbotron">
			<h1>DB Version!</h1>
			<p><?php var_dump($rows); ?></p>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
