<!--  indique les parametres que je veux dans ma fonction '' -->
<?php function tempMoyenne($tempAjd, $tempHier) {	
	echo ($tempAjd + $tempHier) / 2;

}

 ?>

<!--  '' -->




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

<div><?php tempMoyenne(22, 32); ?></div>
	

