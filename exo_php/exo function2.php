<!-- declaration d'une fonction qui affiche 'je veux manger avec une variable $fruits '' -->
<?php function jeVeuxMangerDes($fruits){

	echo 'jeVeuxMangerDes ' . $fruits;
}

 ?>






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

<!-- Appel de la fonction -->

<div><?php jeVeuxMangerDes('pommes'); ?></div>
	

