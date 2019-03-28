<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Florent - Contact</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('includes/entete.inc.html'); ?>
            <?php include('includes/banniere.inc.php'); ?>

       		<br />
            <section>
                <article>
                    <p>
                        Soit par <a href="mailto:florent.brotons@essec.edu">un petit mailto</a>.
                    </p>
                    <p>
                        Soit par ce formulaire : 
                    	<form method="post"  action="traitement.php">
                    		<label for="email">Adresse mail : <input type="email" name="email" id="email" placeholder="Ex : nomprenom@mail.com" /></label><br />
                    		<label for="nom">NOM : <input type="nom" name="nom" id="nom"></label><label for="prenom"> Prénom : <input type="prenom" name="prenom" id="prenom"></label><br />
                    		<p>Votre mail : </p><textarea name="mail" class="mail" rows="30" cols="70" placeholder="Dites moi tout !"></textarea><br />
                            <input type="submit">
                    	</form>
                    </p>
                </article>
                
                <?php include('includes/aside.inc.html'); ?> 
            </section>
        	
		</div>
	</body>
</html>