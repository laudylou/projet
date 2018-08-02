<!-- je cree un Array  -->

<?php $ObjetsSalleAManger= ['tele', 'box', 'console', 'homeCinema']; ?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,user-scalable=no,initial-scale=1.">       
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Document</title>
    <link rel="stylesheet" style="text/css" href="styles.css">
</head>	
<body>
<p> Dans ma salle a manger j'ai :
<!-- j utilise la boucle foreach poour afficher la liste des objets de mon ARRAY -->
	<ol>
	<?php foreach ($ObjetsSalleAManger as $objet) { ?>

		<li class="sam"><?php echo $objet; ?></li>

	<?php }  ?>
		


	</ol>




</p>
<!-- <?php
$profildavid = [
'age' => 28,
'metier' => 'developpeur Web',
'independant' => true, 
'competences'=>[]] -->,

</body>
</html>
