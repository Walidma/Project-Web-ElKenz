

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>

		<title>Back office entrance</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="Gestion d'un espace membre/css/app.css" type="text/css" media="screen" charset="utf-8">
<style>
p {
 margin:20px;
 padding:10px;
 background-color:#FFFAFA;
 }
 </style>
	</head>
	<body>
	<h1>Back office entrance :</h1>
	<div class="form-group">
		<p>You're in the back-office's entrance, enter the password if you know it :</p>
		<form action="secret.php" method="post">
			<p>
			<input type="password" name="mot_de_passe" />
			<input type="submit" value="SUBMIT" />
			</p>
		</form>
		<p>Don't try to find it, if you don't know it go home <a href="index.php" class="logo">El-Kenz</a>  !</p>
	</div></body>
</html>