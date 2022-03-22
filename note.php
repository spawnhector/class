<?php
$car=array('BMW','toyota','Audi');
echo $car[2]," ",$car[0],"<br>";
echo $car[1]." ".$car[0]."<br>";
echo count($car)."<br>";	
$person=array(
array(array('lisa','kiesha','karen','kim')),
array('Kingston','Mobay','Portland','St Ann')
);
echo $person[0][0][1]. " a come from ". $person[1][2]."<br>";


$new=array(
'lisa'=>array('Kingston')
,'kiesha'=>array(
	'parish'=>array(
		'street'=>array('Mobay')))
,'karen'=>array(
	'parish'=>array(
		'street'=>array('portland')))
,'kim'=>array('St Ann'));
echo $new ['kiesha']['parish']['street'][0];
?>
