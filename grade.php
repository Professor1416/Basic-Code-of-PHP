<?php 

$s1 = 85;
$s2 = 84;
$s3 = 79;
$s4 = 74;
$s5 = 78;
$per;
$per2;

	$per = $s1 + $s2 + $s3 + $s4 + $s5;   // Addition of All Subject Marks
	$per2 = $per / 5;                     //Separate The Arthmatic Opration Everytime..
	echo ("Persentage:" .$per2."<br>");   

	if ($per2 >= 90) 
	{
		echo '<i style="color:green ;"> Grade:A </i>';
	} 
	
	else if($per2 >= 80) 
	{
		echo '<i style="color:green ;"> Grade:B </i>';
	}

	else if($per2 >= 70) 
	{
		echo '<i style="color:green ;"> Grade:C </i>';
	}

	else if($per2 >= 60) 
	{
		echo '<i style="color:green ;"> Grade:D </i>';
	}

	else if($per2 >= 40) 
	{
		echo '<i style="color:green ;"> Grade:E </i>';
	}

	else
	{
		echo '<i style="color:red ;"> Fail </i>';
	}
 ?>