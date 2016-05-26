<!DOCTYPE html>
<html> <head>
<meta charset="utf-8" />
<link rel="stylesheet" href="Gestion d'un espace membre/css/app.css" type="text/css" media="screen" charset="utf-8">
<style>
p {
 margin:20px;
 padding:10px;
 background-color:#FFFAFA;
 }
 </style>
<title>Back-office</title> </head>
<body>
<h1> BACK OFFICE </h1>
<div class="form-group">
<?php
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "efrei")
{
?>
	<form action="newArticle.php" method="post" enctype="multipart/form-data">
			<p>
			<strong> Add an Article : </strong>
			<input type="text" name="idArticle" value="id" />
			<input type="text" name="nameArticle" value="name" />
			<input type="text" name="priceArticle" value="price" /><br />
			<label for="picArticle">Fichier 261x255 (tous formats | max. 1 Mo) :</label><br />
     	<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
			<input type="file" name="picArticle" id= "picArticle" />
			<input type="submit" value="SUBMIT" /> 
			</p>
		</form>
		<form action="deleteArticle.php" method="post">
			<p> <strong> Delete an Article : </strong>
			<input type="text" name="nameArticle" value="name" /input>
			<input type="submit" value="SUBMIT" /> 
			</p>
		</form>
		<form action="updateArticle.php" method="post">
			<p> <strong> Update an Article : </strong>
			<input type="text" name="idArticle" value="id" /input>
			<input type="text" name="nameArticle" value="name" /input>
			<input type="text" name="priceArticle" value="price" /input>
			<input type="submit" value="SUBMIT" /> 
			</p>
		</form>
<?php
}
else
	{
	echo '<p>Mot de passe incorrect, go home <a href="index.php" class="logo">El-Kenz</a></p>';
	}
?>
<p>© A small ecommerce website • maked for php courses in Apiit
<a href="AdminAuthentification.php" class="logo">El-Kenz</a> </p>
</div>
</body> </html>