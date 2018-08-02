<!-- je cree des Array dans un  Array  -->


<?php $articles = [ 
		[
			'title' => 'Mon super poney qui saute une barriere',
			'image' => 'http://blog.chevalmag.com/media/users/-/--Laurene--/IMG_0291_201206300520.JPG',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eveniet culpa, officiis iure incidunt praesentium, laborum qui. Aspernatur, eos quod molestiae quia possimus illum, dolorem quidem obcaecati reiciendis nesciunt neque!',
			'date' => '22/10/2017'
		],
		[
			'title' => 'Mon super poney qui saute une seconde barriere',
			'image' => 'http://blog.chevalmag.com/media/users/-/--Laurene--/IMG_0291_201206300520.JPG',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eveniet culpa, officiis iure incidunt praesentium, laborum qui. Aspernatur, eos quod molestiae quia possimus illum, dolorem quidem obcaecati reiciendis nesciunt neque!',
			'date' => '22/10/2017'
		],
		[
			'title' => 'ATTENTION Mon super poney qui saute une troisieme barriere',
			'image' => 'http://blog.chevalmag.com/media/users/-/--Laurene--/IMG_0291_201206300520.JPG',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eveniet culpa, officiis iure incidunt praesentium, laborum qui. Aspernatur, eos quod molestiae quia possimus illum, dolorem quidem obcaecati reiciendis nesciunt neque!',
			'date' => '22/10/2017'
		],
		[
			'title' => 'Mon super poney qui saute une barriere',
			'image' => 'http://blog.chevalmag.com/media/users/-/--Laurene--/IMG_0291_201206300520.JPG',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eveniet culpa, officiis iure incidunt praesentium, laborum qui. Aspernatur, eos quod molestiae quia possimus illum, dolorem quidem obcaecati reiciendis nesciunt neque!',
			'date' => '22/10/2017'
		]
	];
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

<div>
	<?php foreach ($articles as $article) {?>
		<h1><?php echo $article['title']; ?></h1>
		<img src='<?php echo $article ['image'] ?>'</>
		<p><?php echo $article['content']; ?></p>
		<h3><?php echo $article ['date'] ; ?></h3>


	<?php } ?>

</div>

