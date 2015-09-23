<?php

$words = array();

// Open the file
$fp = @fopen("word_list.txt", 'r'); 

// Add each line to an array
if ($fp) 
{
   $words = explode("\n", fread($fp, filesize('word_list.txt')));
}
//setting up some globals

$z = count($words);
//sanity check

$how_many = preg_replace('/[^0-9]/', '', $_POST['request']);
if(strlen($how_many) < 2) 
{
$how_many = ($_POST['request']);

//establishing arrays for char, num, and the password
$char = array("!", "@", "#", "$", "^", "&", "*", ":)", ":(");
$num = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
$key = array();

//randomly select desired number of words from $words	
for ($i = 0; $i < ($how_many); $i++)
	{
		$chooser = rand(0, $z);
		array_push ($key, ($words[$chooser]));
	}
//tandomly select a character if desired
if ($_POST["character"] == 'yes')
{
	
	$x = rand(0, 8);
	array_push($key, $char[$x]);
	
}

//randomly select number if desired

if ($_POST["number"] == 'yes')
{
	for($i = 0; $i < 2; $i++)
	{
		$y = rand(0,9);
		array_push($key, $num[$y]);
	}
}
}

else
{
	print "You may select a number up to 9";
	return 500;
}
?>