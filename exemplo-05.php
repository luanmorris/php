<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exemplo 05 - aula16</title>
</head>
<body>
<?php

	$name = "luan";
	function test() {
		global $name;
		echo $name;
	}

	test();

	echo "<hr>";

	function setMessage() {
		global $message;
		$message = "hello world";

	}

	setMessage();

	echo $message;

?>
</body>
</html>
