<?php
require '_header.php';
?><!DOCTYPE html>
<html>
<head>
	<title>El-Kenz E-commerce website</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

<div id="header">
	<div class="wrap">
		<div class="menu">
				<a href="index.php" class="logo">El-Kenz</a>
				<h1>The best online store, for real.</h1>
				<ul class="panier">
					<li class="caddie"><a href="panier.php">Caddie</a></li>
					<li class="items">
						ITEMS
						<span id="count"><?= $panier->count(); ?></span>
					</li>
					<li class="total">
						TOTAL
						<span><span id="total"><?= number_format($panier->total(),2,',',' '); ?></span> €</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<?php
if($_SESSION['affich'] == 0)
{
	echo' <div id="subheader">
		<div class="wrap">
			<h2>Welcome visitor you can <a href="Gestion d\'un espace membre/login.php">login</a> or <a href="Gestion d\'un espace membre/register.php">create an account</a> .</h2>
		</div>
	</div>';
}
else
{
	echo '<div id="subheader">
		<div class="wrap">
			<h2>You can leave there <a href="Gestion d\'un espace membre/logout.php">logout</a></h2>
		</div>
	</div>';
}
?>

<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="index.php">All Categories</a> </li>
			<li> <a href="indexElec.php">Electronics</a> </li>
			<li> <a href="indexFashion.php">Fashion</a> </li>
			<li> <a href="indexJewelry.php">Jewelry</a> </li>
			<li> <a href="indexShoes.php">Shoes</a> </li>
		</ul>
	</div>
	<div id="main" class="clearfix">
