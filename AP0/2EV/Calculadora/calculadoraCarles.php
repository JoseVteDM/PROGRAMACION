<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$num1 = $_GET['operando1'];
	$num2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $num1 + $num2;
	}else if($operador == "-"){
		$solucion = $num1 - $num2;
	}else if($operador == "*"){
		$solucion = $num1 * $num2;
	}else if($operador == "/"){
		$solucion = $num1 / $num2;
	}
	
?>
<form method="get" action="calculadora.php">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="">
			</option>
			<option value="/">/
			
		</select>
		<input type="text" name="operando2">
		<input type="submit" value="enviar">
        <input type="text" value="<?php echo $solucion ?>">

	</form>
    
</body>
</html>