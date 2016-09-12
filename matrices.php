<?php
$operaciones = $_POST["evaluar"];
$operacion = $operaciones;

//Variables matriz A

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

//Variables matriz B

$numeroB1 = $_POST["b1"];
$numB1 = intval($numeroB1);

$numeroB2 = $_POST["b2"];
$numB2 = intval($numeroB2);

$numeroB3 = $_POST["b3"];
$numB3 = intval($numeroB3);

$numeroB4 = $_POST["b4"];
$numB4 = intval($numeroB4);

$numeroB5 = $_POST["b5"];
$numB5 = intval($numeroB5);

$numeroB6 = $_POST["b6"];
$numB6 = intval($numeroB6);

$numeroB7 = $_POST["b7"];
$numB7 = intval($numeroB7);

$numeroB8 = $_POST["b8"];
$numB8 = intval($numeroB8);

$numeroB9 = $_POST["b9"];
$numB9 = intval($numeroB9);

//suma de las matrices

switch ($operacion) {
	case 'sumar':

    $r1 = $numA1 + $numB1;
    $r2 = $numA2 + $numB2;
    $r3 = $numA3 + $numB3;
    $r4 = $numA4 + $numB4;
    $r5 = $numA5 + $numB5;
    $r6 = $numA6 + $numB6;
    $r7 = $numA7 + $numB7;
    $r8 = $numA8 + $numB8;
    $r9 = $numA9 + $numB9;

    echo "La suma de las matrices es: "."<br><br><br>";
    
    break;
?>
    <table border="1" width="30%" align="center">
    	<tr>
    		<td><?php echo $r1; ?></td>
    		<td><?php echo $r2; ?></td>
    		<td><?php echo $r3; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r4; ?></td>
    		<td><?php echo $r5; ?></td>
    		<td><?php echo $r6; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r7; ?></td>
    		<td><?php echo $r8; ?></td>
    		<td><?php echo $r9; ?></td>
    	</tr>
    </table>
 
<?php
   
//resta de las matrices

	case 'resta':
		 
    	$r1 = $numA1 - $numB1;
    	$r2 = $numA2 - $numB2;
    	$r3 = $numA3 - $numB3;
    	$r4 = $numA4 - $numB4;
   	 	$r5 = $numA5 - $numB5;
    	$r6 = $numA6 - $numB6;
    	$r7 = $numA7 - $numB7;
    	$r8 = $numA8 - $numB8;
    	$r9 = $numA9 - $numb9;
    	

    	echo "La resta de las matrices es: "."<br><br>";
   // echo $r1." ".$r2." ".$r3." ".$r4." ".$r5." ".$r6." ".$r7." ".$r8." ".$r9;
  	 break;
    ?>

    <table border="1" width="30%" align="center">
    	<tr>
    		<td><?php echo $r1; ?></td>
    		<td><?php echo $r2; ?></td>
    		<td><?php echo $r3; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r4; ?></td>
    		<td><?php echo $r5; ?></td>
    		<td><?php echo $r6; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r7; ?></td>
    		<td><?php echo $r8; ?></td>
    		<td><?php echo $r9; ?></td>
    	</tr>
    </table>

    <?php 
	
// multiplicacion de las matrices

	case 'multiplicacion':
			
        $r1 = $numA1*$numB1 + $numA2*$numB4 + $numA3*$numB7;
    	$r2 = $numA1*$numB2 + $numA2*$numB5 + $numA3*$numB8;
    	$r3 = $numA1*$numB3 + $numA2*$numB6 + $numA3*$numB9;
    	$r4 = $numA4*$numB1 + $numA5*$numB4 + $numA6*$numB7;
    	$r5 = $numA4*$numB2 + $numA5*$numB5 + $numA6*$numB8;
        $r6 = $numA4*$numB3 + $numA5*$numB6 + $numA6*$numB9;
        $r7 = $numA7*$numB1 + $numA8*$numB4 + $numA9*$numB7;
    	$r8 = $numA7*$numB2 + $numA8*$numB5 + $numA9*$numB8;
    	$r9 = $numA7*$numB3 + $numA8*$numB6 + $numA9*$numB9;
    	 

    	echo "La suma de las matrices es: "."<br><br>";
    	//echo $r1." ".$r2." ".$r3." ".$r4." ".$r5." ".$r6." ".$r7." ".$r8." ".$r9;

    break;

}
 ?>   
 <table border="1" width="30%" align="center">
    	<tr>
    		<td><?php echo $r1; ?></td>
    		<td><?php echo $r2; ?></td>
    		<td><?php echo $r3; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r4; ?></td>
    		<td><?php echo $r5; ?></td>
    		<td><?php echo $r6; ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $r7; ?></td>
    		<td><?php echo $r8; ?></td>
    		<td><?php echo $r9; ?></td>
    	</tr>
    </table>
