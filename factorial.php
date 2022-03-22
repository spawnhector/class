<?php
$a=6;
function fact($a)
{
	for($i=1;$i<$a+1;$i++)
	{
		echo "$a * $i = ".$a*$i."<br>";
	}; 
};
echo "This is the answer for question 1."."<br>";
fact($a);
echo "<br>";
echo "This is the answer for question 2."."<br>";
$num = 0;  
$n1 = 0;  
$n2 = 1;    
echo $n1.' '.$n2.' ';  
while ($num < 8 )  
{  
	$n3 = $n2 + $n1;  
    	echo $n3.' ';  
    	$n1 = $n2;  
    	$n2 = $n3;  
    	$num = $num + 1;  
}
echo "<br>";
echo "<br>";
echo "This is the answer for question 3."."<br>";
for ($i=1; $i<=8; $i++)	
{	 
	for($j=1;$j<=$i;$j++)	  
	{	  	
		echo $j." ";	 
	}	  	
	echo "<br/>";   	
} 
echo "<br>";


echo "This is the answer for question 4."."<br>";
function count_Vowels($string)
{
	$vow1=array('A','E','I','O','U');
	for($g=0;$g<5;$g++){
		$vow=$vow1[$g];
		preg_match_all("/[$vow]/i", $string, $matches);
		if(count($matches[0])>0){
    			echo $matches[0][0]."-".count($matches[0])." ";
		}else{
			echo $vow1[$g]."- 0"." "; 
		};
	};
}
print_r(count_Vowels('AMBERACADEMY'));
echo "<br>";
echo "<br>";
echo "This is the answer for question 5."."<br>";
function add(&$A, &$B, &$C)
{
    	$N = 4;
    	for ($i = 0; $i < $N; $i++)
        	for ($j = 0; $j < $N; $j++)
            		$C[$i][$j] = $A[$i][$j] +
                         $B[$i][$j];
}
 

$A = array(array(1, 1, 1, 1),
           array(2, 2, 2, 2),
           array(3, 3, 3, 3),
           array(4, 4, 4, 4));
 
$B = array(array(1, 1, 1, 1),
           array(2, 2, 2, 2),
           array(3, 3, 3, 3),
           array(4, 4, 4, 4));
 
$N = 4;
add($A, $B, $C);
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<label>Array 1</label>"."<br>";
for ($i = 0; $i < $N; $i++)
{
    	for ($j = 0; $j < $N; $j++)
    	{
        	echo $A[$i][$j];
        	echo " ";
    	}
    	echo "<br>" ;
} 
echo "<td>";
echo "<td>";
echo "<label>Array 2</label>"."<br>";
for ($i = 0; $i < $N; $i++)
{
    	for ($j = 0; $j < $N; $j++)
    	{
        	echo $B[$i][$j];
        	echo " ";
    	}
    	echo "<br>" ;
}
echo "<td>";
echo "<td>";
echo "<label>Array 3</label>"."<br>";
for ($i = 0; $i < $N; $i++)
{
    	for ($j = 0; $j < $N; $j++)
    	{
        	echo $C[$i][$j];
        	echo " ";
    	}
    	echo "<br>" ;
}
echo "<td>";
echo "<tr>";
echo "</table>";
?>