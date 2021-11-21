<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<pre>
		<?php
			echo "<p>Hello World!</p>";
		
			$name = "luan";
			$lastName = "pereira";
		
			$fullName = $name . " " . $lastName;
		
			echo $name . " " . $lastName;
		
			echo "<hr>";
		
			$nascimento = new DateTime();

			print_r($nascimento);

			echo "<hr>";

			var_dump($nascimento);
		
			exit;
		
			echo "<hr>";
		
			echo $fullName;
			echo "<hr>";
			echo $name;
			echo "<hr>";
		
			var_dump($name);
		
			phpinfo();
		?>
	</pre>
</body>
</html>