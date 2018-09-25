<?php
	//echo "See on minu PHP!";
	//lisan teise php faili
	require("functions.php");
	$firstName = "Tundmatu";
	$lastName = "Kodanik";
	$fullname = "";
	$monthNames = ["Jaanuar", "Veebruar", "Märts", "Aprill", "Mai", "Juuni", "Juuli", "August", "September", "Oktoober", "November", "Detsember"];
	$currentMonth = date('m');
	$amountMonth = count($monthNames);
	
	//püüan posti kinni
	//var_dump($_POST);
	if (isset($_POST["firstname"])){
		$firstName = test_input($_POST["firstname"]);
	}
	if (isset($_POST["lastname"])){
		$lastName = test_input($_POST["lastname"]);
	}
	if (isset($_POST["birthyear"])){
 		$birthYear = $_POST["birthyear"];
 	}
}
	// väga mõtetu funkts.
	function stupidfunction(){
	  $GLOBALS["fullname"] = $GLOBALS["firstName"] ." " .$GLOBALS["lastName"];
	}
	stupidfunction();
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
   <hr>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <label> Eesnimi: </label>
   <input type="text" name="firstname">
   <label> Perekonnanimi: </label>
   <input type="text" name="lastname">
   <label> Sünniaasta </label>
   <input type="number" min="1914" max="2000" value="1999" name="birthyear">
   <label> Synnikuu </label>
   <select name="birthMonth">
			<?php
 				for ($i = 1; $i <= $amountMonth; $i++){
					if($i == $currentMonth){
						echo '<option value="'. $i . '" selected>' . $monthNames[$i - 1] . '</option>' . "\n";
					} else {
						echo '<option value="'. $i . '">' . $monthNames[$i - 1] . '</option>' . "\n";
					}
				}
			?>
			</select>
   <input type="submit" name="submitUserData" value="Saada andmed">
   </form>
  <hr>
  <?php
  if(isset($_POST["birthyear"])){
	  echo "<h2>" .$fullname . "</h2>";
	  echo "<p> Olete elanud järgnevatel aastatel: </p>";
	  echo "<ul> \n";
	  for($i = $_POST["birthyear"]; $i <= date("Y"); $i++){
		  echo"<li>".$i."</li>\n";
	  }
	  echo "</ul>\n";
  }
  ?>
  
  
</body>   
</html>