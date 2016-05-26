
<h1>NEW ARTICLE :</h1>

<?php
require '_header.php';
$id = $_POST['idArticle'];
if ($_FILES['picArticle']['error'] <= 0)
{
	$extensions_valides = array( 'jpg' , 'jpeg' , 'png' );
	$extension_upload = strtolower(  substr(  strrchr($_FILES['picArticle']['name'], '.')  ,1)  );
	$mignature = $id . '.' .$extension_upload;
	if (in_array($extension_upload , $extensions_valides))
		echo "Extension correcte";
	$source = imagecreatefromjpeg($_FILES['picArticle']['name']);
	$destination = imagecreatetruecolor(261, 255);
	$largeur_source = imagesx($source);
	$hauteur_source = imagesy($source);
	$largeur_destination = imagesx($destination);
	$hauteur_destination = imagesy($destination);
	imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
	imagejpeg($destination, $mignature);
	$nom = "img/{$id}.{$extension_upload}";
	$resultat = move_uploaded_file($_FILES['picArticle']['tmp_name'],$nom);
	if ($resultat) echo "Transfert réussi";
}

if (isset($_POST['nameArticle']) && isset($_POST['idArticle']) && isset($_POST['priceArticle']))
{
	$id = $_POST['idArticle'];
	$name =  $_POST['nameArticle'];
	$price =  $_POST['priceArticle'];
	/*$req = $DB->prepare('INSERT INTO products(id, name, price) VALUES(:id, :name, :price)');
	$req->execute(array('id' => $id, 'name' => $name, 'price' => $price));*/
	$product = $DB->query('INSERT INTO products(id, name, price) VALUES(:id, :name, :price)', array('id' => $id, 'name' => $name, 'price' => $price));
	echo 'Le jeu a bien été ajouté !'; 
}
?>

<p>© A small ecommerce website • maked for php courses in Apiit
<a href="AdminAuthentification.php" class="logo">El-Kenz</a> </p>