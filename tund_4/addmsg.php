<?php
	require("functions.php");

	$notice = null;
	
	if (isset($_POST["submitMessage"])){
	 if ($_POST["message"]!= "Kirjuta Sõnum Siia..." and !empty($_POST["message"])){
	   $message = test_input($_POST["message"]);
	   $notice = saveamsg($message);
	 } else {
		$notice = "Palun kirjuta sõnum!";
	 }
	}
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Anonüümse Sõnumi lisamine</title>
   </head>
   <body>
   <h1> Sõnumi lisamine</h1>
	
   <p> Listen. Strange women lying in ponds distributing swords is no basis for a system of government.<br /> Supreme executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.<br />You can't expect to wield supreme executive power just 'cause some watery tart threw a sword at you! <br />I mean, if I went around saying I was an emperor just because some moistened bint had lobbed a scimitar at me, they'd put me away!</p>
   <hr>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <label> Sõnum (max 256 märki):</label>
   <br>
   <textarea name="message" rows="4" cols="64">Kirjuta Sõnum Siia... </textarea>
   <br>
   
   <input type="submit" name="submitMessage" value="Salvesta Sõnum">
   </form>
  <hr>
	<p><?php echo $notice; ?></p>
  
</body>   
</html>