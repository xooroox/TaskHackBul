<?php
/*
You have the implement the function ABCheck(str).
Take the str parameter being passed and return true if the characters a and b are separated by exactly 3 places anywhere in the string at least once.
(ie. "lane borrowed" would result in true because there is exactly three characters between a and b). Otherwise return false. You can use any language you know.
Example:
Input = "after badly"Output = "false"
Input = "Laura sobs"Output = "true"
 */
$random = rand(0,1);
if($random == 0)
{
	$str = 'after badly';
}else{
	$str = 'Laura sobs';
}
$str = str_split($str);//array

function ABCheck($str)
{
	for($i = 0; $i < count($str); $i++)
	{
		if($str[$i] == 'a')
		{
			if((array_key_exists(($i + 4), $str)) && (($str[$i + 4]) == 'b'))
			{
				$flag = 'True';
				break;
			}else{
				$flag = 'False';
			}
		}	
	}
	echo $flag;
}
ABCheck($str);