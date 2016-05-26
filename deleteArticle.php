
<h1>Delete Article</h1>

<?php
require '_header.php';
if (isset($_POST['nameArticle']))
{
	$name = $_POST['nameArticle'];
	$product = $DB->query('DELETE FROM products WHERE name=:name', array('name' => $name));
	echo 'Le jeu a été supprimé !'; 
}

?>

<p>© A small ecommerce website • maked for php courses in Apiit
<a href="AdminAuthentification.php" class="logo">El-Kenz</a> </p>