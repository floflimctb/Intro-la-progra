<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Florent - Inscription</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('entete.inc.html'); ?>
            <?php include('banniere.inc.html'); ?>
            <section>
                <article>
                    <form method="post" action="">
                        <p><label for="nom">Nom : </label>
                            <input type="text" name="nom" id="nom" /></p>
                        
                        <p><label for="prenom">Prénom : </label>
                            <input type="text" name="prenom" id="prenom" /><br /></p>
                        
                        <p><label for="adresse_mail">Adresse mail : </label>
                            <input type="email" name="adresse_mail" id="adresse_mail" /><br /></p>
                        
                        <p><label for="date_naissance">Date de naissance : </label>
                            <input type="datepicker" name="date_naissance" id="date_naissance" placeholder="AAAA-MM-JJ"/><br /></p>
                        
                        <p><label for="mot_de_passe">Mot de passe : </label>
                        <input type="password" name="mot_de_passe" id="mot_de_passe" /><br /></p>
                    </form>
                </article>
                
                <?php include('aside.inc.html'); ?>
                
        	</section>
		</div>
	</body>
</html>