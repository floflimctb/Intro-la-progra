<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Florent - Contact</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('entete.inc.html'); ?>
            <?php include('banniere.inc.html'); ?>

       		<br />
            <section>
                <article>
                    <p>
                        Soit par <a href="mailto:florent.brotons@essec.edu">un petit mailto</a>.<br /><br />
                        Soit par ce formulaire : </p>
                    	<form method="post"  action="">
                    		<p><label for="email">Adresse mail : <input type="email" name="email" id="email" placeholder="Ex : nomprenom@mail.com" /></label></p>
                            <p><label for="nom">NOM : <input type="nom" name="nom" id="nom" /></label><label for="prenom"> Prénom : <input type="prenom" name="prenom" id="prenom" /></label></p>
                    		<p>Votre mail : </p><textarea name="mail" class="mail" rows="30" cols="70" placeholder="Dites moi tout !"></textarea>
                            <p><input type="submit" /></p>
                        </form>
                </article>
                
                <?php include('aside.inc.html'); ?> 
            </section>
		</div>
	</body>
</html>