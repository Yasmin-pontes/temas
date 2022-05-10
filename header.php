<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title> <?php wp_title();  ?></title>


	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap-5.1.3-dist/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet"  href="<?php  bloginfo('stylesheet_url') ?>" type="text/css" />

	<?php wp_head();  ?>


	<div class="container geral">
		<div class="row">
			<div class="col-md-3 logo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class = "logo">
			</a>
		</div>
		<div class="col-md-9 titulo">
		<h1><i>ARTICUNO NOTICIAS</i></h1>
		<p>as maiores noticias em primeira mão</p>

	</div>
	</div>














	<style type="text/css">

	</style>











</head>
<body>

</body>
</html>
