<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="css3/index.css">
    <script src="js3/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('ul li:nth-child(3) > a').addClass('active');
        });
    </script>
</head>
<body>

	<div>
        <?php include "menu.php";   ?>
    </div><br><br>

	<section class="menu" id="livres">
		<div class="titre">
			<h2 >Quelques livres</h2><br>
			<p>Parmi ces livres, on a entre autre : </p>
		</div>
		<div class="contenu">
			<div class="box">
				<div class="imbox">
					<a href="https://amzn.to/36xE77G"><img src="images2/Robert KIYOZAKI2.png" alt="Robert KIYOZAKI"></a>
				</div>
				<div class="text">
					<p>C'est un livre qui vous enseignera les bases de l'éducation financière. <strong>Robert KIYOZAKI</strong> y a détaillé tout ce que vous devez savoir à propos de l'argent. Ce livre vous fera comprendre dans quel système vous vivez. </p>
				</div>
			</div>
			<div class="box">
				<div class="imbox">
					<img src="images2/Maxime Victor2.jpg" alt="Maxime Victor">
				</div>
				<div class="text">
					<p>Si vous voulez savoir comment gérer votre business pour l'amener à un niveau supérieur et atteindre vos objectifs, alors ce livre est celui qu'il vous convient le mieux. <strong>Maxime Victor</strong>  y a détaillé tout ce dont vous avez besoins pour réussir en entreprenariat. </p>
				</div>
			</div>
			<div class="box">
				<div class="imbox">
					<a href="https://amzn.to/3uVuokT"><img src="images2/Olivier.jpg" alt="Olivier Roland"></a>
				</div>
				<div class="text">
					<p>Dans son livre <strong>Olivier Roland</strong> explique comment le système éducatif classique endicape pleins de personnes et montre comment hacker ce système (en devenant <strong>Rebelle Intelligent</strong>) et créer une entreprise au service de votre vie.</p>
				</div>
			</div><br>
			<p class="mot">Par ailleurs, plusieurs personnes pourtant passionnées par l'entreprenariat n'arrivent pas à satisfaire cette envie de lire -de s'éduquer à travers ces livres- par manque de temps. Voilà ainsi une plateforme <strong>(audible)</strong>  qui leur permettra de satisfaire leur envie de lecture d'une manière plus simple et efficace.</p>
		</div>
	</section>

</body>
</html>