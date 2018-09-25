<?php
	require("functions.php");
	$notice = readallmessages();
	
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Anonüümse Sõnumi</title>
   </head>
   <body>
   <h1> Sõnumid</h1>
	
   <p> Listen. Strange women lying in ponds distributing swords is no basis for a system of government.<br /> Supreme executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.<br />You can't expect to wield supreme executive power just 'cause some watery tart threw a sword at you! <br />I mean, if I went around saying I was an emperor just because some moistened bint had lobbed a scimitar at me, they'd put me away!</p>
   <hr>

  <hr>
	<?php echo $notice; ?>
  
</body>   
</html>