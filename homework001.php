<?php
$c = 0;
$x = 0;
$x2 = 0;
$x3 = 0;
$a = 0;
$b = 0;
$sin_x = 0;
$exp_x = 0;
$result = 0;
$int_func = 'c';

if (isset($_POST["doit"])) 
{
	 $c = $_POST['c'];
	 $x = $_POST['x'];
	 $x2 = $_POST['x2'];
	 $x3 = $_POST['x3'];
	 $a = $_POST['a'];
	 $b = $_POST['b'];
	 $sin_x = $_POST['sin_x'];
	 $exp_x = $_POST['exp_x'];
	 $min = $c*$a + ($x/2)*$a**2 + ($x2/3)*$a**3 + ($x3/4)*$a**4 + $exp_x*exp($a) - cos($a)*$sin_x;
	 $max = $c*$b + ($x/2)*$b**2 + ($x2/3)*$b**3 + ($x3/4)*$b**4 + $exp_x*exp($b) - cos($b)*$sin_x;
	 $result = $max - $min; 
	 if ($c != 0) {$c_ = strval($c) . 'x + ';} else {$c_ = '';}
	 if ($x != 0) {$x_ = strval($x).'/2 x² + ';} else {$x_ = '';}
	 if ($x2 != 0) {$x2_ = strval($x2).'/3 x³ + ';} else {$x2_ = '';}
	 if ($x3 != 0) {$x3_ = strval($x3).'/4 x⁴ + ';} else {$x3_ = '';}
	 if ($exp_x != 0) {$exp_x_ = strval($exp_x).'exp(x) + ';} else {$exp_x_ = '';}
	 if ($sin_x != 0) {$sin_x_ = strval($sin_x).'sin(x) + ';} else {$sin_x_ = '';}
	 $int_func = $c_ . $x_ . $x2_ . $x3_ . $exp_x_ . $sin_x_ . 'c';
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf8">
<title>Definite Integral Calculation</title>
</head>

<body>
<h2>Definite Integral Calculation:</h2>
<form method='post'>
	<span>f(x)=</span>
	<input type='text' name='c' value='<?=$c?>' size='2'>
	<span>+</span>
	<input type='text' name='x' value='<?=$x?>' size='2'>
	<span>x+</span>
	<input type='text' name='x2' value='<?=$x2?>' size='2'>
	<span>x²+</span>
	<input type='text' name='x3' value='<?=$x3?>' size='2'>
	<span>x³+</span> 
	<input type='text' name='exp_x' value='<?=$exp_x?>' size='2'>
	<span>exp(x)+</span>
	<input type='text' name='sin_x' value='<?=$sin_x?>' size='2'>
	<span>sin(x)</span> <br> <br>
	<span>a=</span>
	<input type='text' name='a' value='<?=$a?>' size='2'>
	<span> b=</span>
	<input type='text' name='b' value='<?=$b?>' size='2'> <br> <br>
	<button type='submit' name="doit" >Submit</button> <br> <br>

	<span class="answers" style="position: relative;">
		<span class='textare'> &int; <small>a<sup>b</sup></small> </span>


		<span>f(x)dx = <?=$int_func?></span> <br> <br>
		<span class='textare'>&int; <small><?=$a?><sup><?=$b?></sup></small> </span>

		<span>f(x)dx = <?=$result?></span>
	</span>
	
</form>
</body>
</html>
