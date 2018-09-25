<?php
	//echo "See on minu PHP!";
	$firstName = "Rasmus";
	$lastName = "Aron";
	$dateToday = date("d");
	$dateTodayYear = date("Y");
	$weekdayToday = date("N");
	$weekdayNamesET = ["Esmaspäev", "Teisipäev", "Kolmapäev", "Neljapäev", "Reede", "Laupäev", "Pühapäev"];
	$monthToday = date("n");
	$monthNames = ["Jaanuar", "Veebruar", "Märts", "Aprill", "Mai", "Juuni", "Juuli", "August", "September", "Oktoober", "November", "Detsember"];
	//var_dump($weekdayNamesET);
	//echo $weekdayNamesET[1];
	//echo $weekdayNamesET;
	//echo $weekdayToday;
	$hourNow = date("G");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "Varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "Koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "Vaba aeg";
	}
	//Juhusliku pildi valimine
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picNUM = mt_rand(2,43);
	//echo $picNUM;
	$picFILE = $picURL .$picNUM .$picEXT
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
   </h1>
   <p>Minu <a href = "https://www.tlu.ee/en" >TLÜ</a>  </p>
   <?php 
	//echo"<p>Tänane kuupäev on: ". $dateToday .".</p> \n";
	echo"<p>Täna on " .$weekdayNamesET[$weekdayToday - 1]."  ".$dateToday."  ".$monthNames[$monthToday -1]." " .$dateTodayYear.".</p> \n";
	echo"<p>Lehe avamise hetkel oli kell ".date("H:i:s") .", käes oli " .$partOfDay .".</p>\n";
   ?>
   
   <p> Listen. Strange women lying in ponds distributing swords is no basis for a system of government.<br /> Supreme executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.<br />You can't expect to wield supreme executive power just 'cause some watery tart threw a sword at you! <br />I mean, if I went around saying I was an emperor just because some moistened bint had lobbed a scimitar at me, they'd put me away!</p>

   <p>Teised Lehed: <a href ="photo.php">photo.php</a></p>
   <p>Teised Lehed: <a href ="page.php">page.php</a></p>
   <img src="<?php echo $picFILE; ?>" alt="TLÜ Terra õppehoone" align = "right" >
   <p>Minu sõber teeb ka <a href = "../../../~raitvai" target ="_blank">veebi<a></p>
   </body>
</html>