<?php
//Function Arthmatic Operation

//Function Definition

//Addition
function add($a ,$b)  //function name must start with letter or underscore.
	{
		$c = $a + $b;
		echo "the addtion is:".$c."<br>" ;
	}
add (20, 40);   //Function Call:- You can many times call function.
add (45, 45);  //you can add many argumentsas you want.

//Subtraction
function sub($a, $b)
	{
		$c = $a - $b;
		echo "the subtraction is ".$c."<br>";
	}
sub (45, 25); //45, 25 this value store in 'a' and 'b', then execute operation "45 - 25 = 20".

//Division
function div($a ,$b)
	{
		$c = $a / $b;
		echo "the division is:" .$c. "<br>";
	}
div (100, 4);

//Multiplication
function multi($a ,$b)
	{
		$c = $a - $b;
		echo "the multipication is:" .$c. "<br>"; //"echo" use for print line.
	}
multi(50, 20);	

//Modulus
function mod($a ,$b)
	{
		$c = $a % $b;
		
		echo "the moddulos is:" .$c. "<br>"; //"<br>" use for linebreak. 
	
	}
mod(50, 5);




//Output
/*
the addtion is:60
the addtion is:90
the subtraction is 20
the division is:25
the multipication is:30
the moddulos is:0
*/	



                                        //Prashant Dasnur
 ?>