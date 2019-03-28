<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Florent - Connexion</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('includes/entete.inc.html'); ?> 
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Connectez-vous sur cete page</div>
                <img src="images/akihabara.jpg" alt="Photo de bannière" />
            </div>
            
            <section>
                <article>
                    <form method="post" action="traitementlog.php">
                        <label for="pseudolog">Pseudo : </label><input type="text" name="pseudolog" id="pseudolog" /><br />
                        <label for="mdplog">Mot de passe : </label><input type="password" name="mdplog" id="mdplog" /><br />
                        <input type="submit" name="submitlog" id="submitlog" />
                    </form>

                    <p>
                        A moins que... Vous n'ayez pas encore votre compte ?<br />
                        <a href="inscription.php">cliquez ici</a> pour un creer un.
                    </p>
                </article>
                
                <?php include('includes/aside.inc.html'); ?>
                
        	</section>
		</div>
	</body>
</html>