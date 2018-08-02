<?php $titre = 'METEO';  ?>
<?php $tempday =22 ?>
<?php $tempyesteday = 25  ?>
<?php $MOYENNE = ($tempday + $tempyesteday)/2 ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,user-scalable=no,initial-scale=1.">       
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

    <title>Document</title>
</head>	
<body>

<h1><?php echo $titre ?></h1>
 
<p>T° <?php  echo $tempday ?> </p>
<p>T° HIER  <?php echo $tempyesteday ?></p>
<p>T° MOYENNE <?php echo $MOYENNE ?></p>
	

	

</body>
</html>

