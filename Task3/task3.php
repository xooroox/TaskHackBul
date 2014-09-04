<?php
/*
You have to implement DashInsert(num).
Insert dashes ('-') between each two odd numbers in num. Don't count zero as an odd number. You can use any language you know.
Examples:
Input = 99946 Output = "9-9-946"
Input = 56730 Output = "567-30"
 */
$random = rand(0,1);
if($random == 0)
{
	$num = '56730';
}else{
	$num = '99946';
}
$num = str_split($num);//array

function DashInsert($num)
{
	echo 'Result: ';
	for($i = 0; $i < count($num); $i++)
	{
		echo $num[$i];
		
		if (!($num[$i] % 2 == 0) && ($num[$i] != 0)) 
		{
			if (!($num[$i+1] % 2 == 0) && ($num[$i+1] != 0)) 
			{
				echo '-';
			}
			else
			{
				echo ' ';
			}
		}
		else
		{
			echo ' ';
		}
	}
}
DashInsert($num);