<?php
	$valorTotal = 0;
	$valorTotal += 100;
	$valorTotal += 25;
	$valorTotal -= 10;
	$desconto = $valorTotal * .1;
	$valorTotal -= $desconto;

	echo $valorTotal;
?>