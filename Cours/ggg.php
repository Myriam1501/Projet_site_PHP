<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TD2</title>
</head>
<body>

<?php
$idcon= new mysqli($un,$user,$mdp,$deux);
//ouvre une connexion à la base de donnée $deux du serveur $un
$idcon->query($sql);
$a=0;
for($a=7; $a<=8; $a++){echo $a;};

$a=9;
$e="9";
unset($a);
echo $a.$e;
echo substr('voici un \"test\" php',1);
// FAUX AU 6
$tab = array("a");
echo $tab;
?>








</body>
</html>
