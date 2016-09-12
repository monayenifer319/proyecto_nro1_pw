<?php
$operaciones = $_POST["evaluar"];
$operacion = $operaciones;

$numeroA1 = $_POST["a1"];
$numA1 = intval($numeroA1);

$numeroA2 = $_POST["a2"];
$numA2 = intval($numeroA2);

$numeroA3 = $_POST["a3"];
$numA3 = intval($numeroA3);

$numeroA4 = $_POST["a4"];
$numA4 = intval($numeroA4);

$numeroA5 = $_POST["a5"];
$numA5 = intval($numeroA5);

$numeroA6 = $_POST["a6"];
$numA6 = intval($numeroA6);

$numeroA7 = $_POST["a7"];
$numA7 = intval($numeroA7);

$numeroA8 = $_POST["a8"];
$numA8 = intval($numeroA8);

$numeroA9 = $_POST["a9"];
$numA9 = intval($numeroA9);
//declaracion de la variable n por la cual se va a multiplicar  y a elevar la matriz
$numeron = $_POST["mul"];
$numn = intval($numeron);

switch ($operacion) {
	case 'determinante':
		$x = $numA1*$numA5*$numA9 + $numA4*$numA8*$numA3 + $numA7*$numA2*$numA6;
		$z = $x - $numA3*$numA5*$numA7 - $numA6*$numA8*$numA1 - $numA9*$numA2*$numA4;
		echo $z;
			
		break;
	
	case 'inversa':
    $inre1 = $numA5*$numA9;
    $inre2 = $numA8*$numA6;
    $resul1 = $inre1-$inre2;
    echo $resul1;

    $inre3 = $numA4*$numA9;
    $inre4 = $numA7*$numA6;
    $resul2 = $inre3-$inre4;
    echo $resul2;

    $inre5 = $numA4*$numA8;
    $inre6 = $numA7*$numA5;
    $resul3 = $inre5-$inre6;
    echo $resul3;

    $inre7 = $numA2*$numA9;
    $inre8 = $numA8*$numA3;
    $resul4 = $inre7-$inre8;
    echo $resul4;
    $inre9 = $numA1*$numA9;
    $inre10 = $numA7*$numA3;
    $resul5 = $inre9-$inre10;
    echo $resul5;

    $inre11 = $numA1*$numA8;
    $inre12 = $numA7*$numA2;
    $resul6 = $inre11-$inre12;
    echo $resul6;
    
    $inre13 = $numA2*$numA6;
    $inre14 = $numA5*$numA3;
    $resul7 = $inre13-$inre14;
    echo $resul7;

    $inre15 = $numA1*$numA6;
    $inre16 = $numA4*$numA3;
    $resul8 = $inre15-$inre16;
    echo $resul8;

    $inre17 = $numA1*$numA5;
    $inre18 = $numA4*$numA2;
    $resul9 = $inre17-$inre18;
    echo $resul9;
    
    $resul1 = $resul1*+1;
    $resul4 = $resul4*-1;
    $resul7 = $resul7*+1;
    $resul2 = $resul2*-1;
    $resul5 = $resul5*+1;
    $resul8 = $resul8*-1;
    $resul3 = $resul3*+1;
    $resul6 = $resul6*-1;
    $resul9 = $resul9*+1;

	break;
	case 'transpuesta':

		echo "la transpuesta de la matriz es: "."<br><br>";

	//break;
?>
		<table border="1" width="30%" align="center">
    	<tr>
    		<td><?php echo $numA1; ?></td>
    		<td><?php echo $numA4; ?></td>
    		<td><?php echo $numA7; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $numA2; ?></td>
    		<td><?php echo $numA9; ?></td>
    		<td><?php echo $numA8; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $numA3; ?></td>
    		<td><?php echo $numA6; ?></td>
    		<td><?php echo $numA5; ?></td>
    	</tr>
    </table>
<?php 
break;
	case 'multiplicar':
		$re1 = $numn*$numA1;
		$re2 = $numn*$numA2;
		$re3 = $numn*$numA3;
		$re4 = $numn*$numA4;
		$re5 = $numn*$numA5;
		$re6 = $numn*$numA6;
		$re7 = $numn*$numA7;
		$re8 = $numn*$numA8;
		$re9 = $numn*$numA9;
		echo "la matriz multiplicada es: "."<br><br><br>";
    
    //break;
?>
    <table border="1" width="30%" align="center">
    	<tr>
    		<td><?php echo $re1; ?></td>
    		<td><?php echo $re2; ?></td>
    		<td><?php echo $re3; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $re4; ?></td>
    		<td><?php echo $re5; ?></td>
    		<td><?php echo $re6; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $re7; ?></td>
    		<td><?php echo $re8; ?></td>
    		<td><?php echo $re9; ?></td>
    	</tr>
    </table>
 
<?php
	break;
    case 'elevar':
    	# code...
    	break;
	}
?>	