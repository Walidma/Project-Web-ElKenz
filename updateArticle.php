
<h1>Update Article :</h1>

<?php
require '_header.php';
if (isset($_POST['nameArticle']) && isset($_POST['idArticle']) && isset($_POST['priceArticle']))
{
	$name =  $_POST['nameArticle'];
	$id = $_POST['idArticle'];
	$price =  $_POST['priceArticle'];
	$product = $DB->query('UPDATE products SET name = :name, price = :price WHERE id = :id', array('id' => $id, 'name' => $name, 'price' => $price));
	echo 'Le jeu a bien été bien modifié !'; 
}

?>
<p>© A small ecommerce website • maked for php courses in Apiit
<a href="AdminAuthentification.php" class="logo">El-Kenz</a> </p>