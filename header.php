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

.geral{
	background-color: #fff;
}

.titulo{
	text-align: center;

}

.titulo h1{
	margin-top: 8%;
	text-transform: uppercase;
}

h3{
	position: absolute;
	color: white;
	top: 50%;
	left: 2%;

}

h2{
	color: black;
}

.logo{
	width: 130px;
	height: 130px;
	text-align: center;
	margin-top: 1%;

}

.rodape{
	background: #666;
	color: #fff;
	width: 100%;
	height: 100%;
	text-align: left;
	padding-top: 30px;
}

.rodape{
	margin-top: 10px;
}

.hrodape1{
	color: black;
}
 
 h2{
 	text-align: center;
 }

 hr{
 	border: 2px solid;
 }

 h4{
 	color: black;
 }

 p{
 	color: gray;
 }

 A{
 	text-decoration: none;
 }
	</style>











</head>
<body>

</body>
</html>
