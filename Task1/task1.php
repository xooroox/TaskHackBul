<?php
/*
Implement the function ExOh(str).
Take the str parameter being passed and return true if there is an equal number of x's and o's, otherwise return false. 
Only these two letters will be entered in the string, no punctuation or numbers. You can use any language you know.
Examples:
ExOh('xoxoox') - true
ExOh('oooxoo') - false
 */
$random = rand(0,1);
if($random == 0)
{
	$str = 'xoxoox';
}else{
	$str = 'oooxoo';
}
$str = str_split($str);//array

function ExOh($str)
{
	$x = 0;
	$o = 0;
    for($i = 0; $i < count($str); $i++)
    {
    	if($str[$i] == 'x')
    	{
    		$x++;
    	}
    	if($str[$i] == 'o')
    	{
    		$o++;
    	}
    }
    if($x == $o)
    {
    	echo 'True';
    }else 
    {
    	echo 'False';
    }	
}
ExOh($str);
