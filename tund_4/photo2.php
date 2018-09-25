<?php
	//echo "See on minu PHP!";
	$firstName = "Rasmus";
	$lastName = "Aron";

	//loeme kataloogi sisu
	$dirToRead = "../../pics/";
	$allFile = scandir($dirToRead);
	//var_dump($allFile);
	$picFiles = array_slice($allFile,2);
	//var_dump($picFiles);
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>
	<?php
		echo $firstName;
		echo " ";
		echo $lastName;
	?>
	, õppetöö</title>
   </head>
   <body>
   <h1> <?php
	echo $firstName ." " .$lastName;
	?>

   <p> Listen. Strange women lying in ponds distributing swords is no basis for a system of government.<br /> Supreme executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.<br />You can't expect to wield supreme executive power just 'cause some watery tart threw a sword at you! <br />I mean, if I went around saying I was an emperor just because some moistened bint had lobbed a scimitar at me, they'd put me away!</p>
   
   <?php
   //<img src = "pilt" alt = "pilt" >
   //for($i = 0; $i < count($picFiles); $i++ ){
   //echo '<img src="' .$dirToRead .$picFiles[$i] .'" alt = "pilt">';
   $imagesDir = '../../pics/';

	$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

	$randomImage = $images[array_rand($images)];
   //}
   echo '<img src="' .$randomImage.'" alt ="pilt">';
   ?>
  
   
</body>   
</html>