<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Florent - A propos</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('entete.inc.html'); ?>
            <?php include('banniere.inc.html'); ?>

       		<section>
                <article>
                    <h2>The best : Made in Abyss !!</h2>
                    
                    <p>
                        <a href="https://www.youtube.com/watch?v=eZmdwOxbSWQ" target="_blank"><img src="images/madeInAbyss.jpg" alt="Made In Abyss" id="madeInAbyss" height=300 weight=300 /></a>
                    </p>
                    <p>
                        Notre coup de coeur absolu, parmis les milliers d'anime qu'on a pu voir, c'est celui-ci qui s'est démarqué haut la main ! Bravo à l'auteur, et à toute l'équipe !
                    </p>
                    
                    <table id="tableAbyss">
                        <caption>Nos notes :</caption>
                        
                        <thead> <!-- En-tête du tableau -->
                            <tr>
                               <th>Critères</th>
                               <th>Note sur 100</th>
                            </tr>
                        </thead>
                        
                        <tfoot> <!-- Pied de tableau -->
                           <tr>
                               <th>Moyenne</th>
                               <th>95</th>
                           </tr>
                       </tfoot>

                        <tbody> <!-- Corps du tableau -->
                            <tr>
                               <td>Qualité de l'histoire</td>
                               <td>96</td>
                            </tr>
                            <tr>
                               <td>Profondeur de l'histoire</td>
                               <td>90</td>
                            </tr>
                            <tr>
                               <td>Musique</td>
                               <td>97</td>
                            </tr>
                            <tr>
                               <td>Dessins</td>
                               <td>98</td>
                            </tr>
                            <tr>
                               <td>Chara-design</td>
                               <td>92</td>
                            </tr>
                            <tr>
                               <td>Travail des personnages</td>
                               <td>96</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            
                <?php include('aside.inc.html'); ?> 
            
            </section>
		</div>
	</body>
</html>