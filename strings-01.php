<?php
$name = "luan pereira";
$name2 = "ADNA CRISTINA";

echo strtoupper($name);
echo "<br>";
echo ucwords($name);
echo "<br>";
echo strtolower($name2);
echo "<br>";
echo ucfirst($name);


echo "<br>";
echo str_replace("luan", "adna", $name);

echo "<br>";
$frase = "A repetção é mãe da retenção.";
$q = strpos($frase, "mãe");
$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q, strlen($frase));
$texto3 = substr($frase, $q + strlen("mãe"), strlen($frase));
print_r($q);
echo "<br> $texto";
echo "<br> $texto2";
echo "<br> $texto3";
?>