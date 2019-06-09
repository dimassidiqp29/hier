<center><h4>MENGURUTKAN ANGKA DENGAN METODE BUBBLE</h4></center>
<hr>
<center>
<div>
<?php
define ("n", 7);
$A = range(1,20);
shuffle($A);

echo "<h1>ANGKA MURNI</h1>";
for ($I=0; $I <= n-1; $I++)
	echo "$A[$I] ";
 
$K=0;
while($K<=n-2)
{
	$I=0;
	while($I<=n-2 - $K)
	{
		if ($A[$I] > $A[$I+1])
		{
			$X = $A[$I];
			$A[$I] = $A[$I+1];
			$A[$I+1] = $X;
		}
		$I++;
	}
	$K++;
}
echo "<h1>SESUDAH DI SORTIR</h1>";
for ($I=0; $I<= n-1; $I++)
	echo "$A[$I] ";
?>
</div>
</center>