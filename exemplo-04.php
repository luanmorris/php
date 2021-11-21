<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exemplo 04 - aula15</title>
</head>
<body>
<?php

	//add in the URL localhost/exemple-04.php?a=1234
	//add in the URL localhost/exemple-04.php?a=1234&b=asdf
	$name = $_GET[ "a" ];
	$last = $_GET[ "b" ];
	echo $last;
	echo "<br>";
	$ip = $_SERVER[ "REMOTE_ADDR" ];
	echo $ip;
	echo "<br>";
	$sc = $_SERVER[ "SCRIPT_NAME" ];
	echo $sc;
	echo "<br>";
	var_dump($name);
?>
</body>
</html>
