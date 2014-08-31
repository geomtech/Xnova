<html>
	<head>
		<title>Connexion - {title} </title>
		<link rel="stylesheet" href="../../../css/styles.css" type="text/css">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<header>
		<div id="top-nav">
			<center>
				<a href="../../../login.php" class="bouton">Accueil</a>
				<a href="#" class="bouton">Forum</a>
				<a href="#" class="bouton">Contact</a>
				<a href="#" class="bouton">Crédits</a>
			</center>
		</div>		
	</header>
	<body>		
		<center>
		<img src="../../../img/xnova.png" id="logo"/>
			<div id="panel">
				<h2>{servername}</h2>
				</br>
				<p><strong>{servername}</strong> est un jeu de stratégie gratuit</p>
				<p>dans l'espace. Pour jouer, il suffit d'un navigateur internet.</p>
				<p>Inscrivez-vous et découvrez le monde fantastique de <strong>{servername}</strong>.</p>
				</br>
				<a href="reg.php" class="reg">Jouer Maintenant !</a>
			</div>
		</center>
		<center>
		<form name="formular" action="" method="post" onsubmit="changeAction('login');">
			<div id="connexion">
				<h2>Connexion</h2>
				<p>Pseudo</p> <input required name="username" value="" type="text" class="textbox">
				<p>Mot de passe</p> <input required name="password" value="" type="password" class="textbox">
				<p>Se rappeller de moi ?</p>	
				<input type="checkbox" value="None" id="check" name="rememberme" />
				</br>
				</br>
				<script type="text/javascript">document.formular.Uni.focus(); </script><input name="submit" value="Se connecter !" type="submit" class="btn-connect">
			</div>
			</form>
		</center>
	</body>
</html>