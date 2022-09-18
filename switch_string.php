<?php 
//Switch String:- In Switch String we use words and numbers in "duble quotes".

$a = 30;  //Variable Def
$b = 20;
$c;
$string = 'five'; //which case you want to execute 'Enter' case. value.

switch($string) 
{
	case 'one': //the case label must be end with colon(:)
	{	
		//Addition
		$c = $a + $b;
		echo "the addition of a+b is:".$c."<br>"; //"echo" use for print line.
		break; //It's necessary to use break after each block.
	}

	case 'two': //case label must be unique.
	{	
		//Subtract
		$c = $a - $b;
		echo "the subtraction of a-b is:".$c."<br>"; //"<br>" use for linebreak.
		break; //if you don't use it, then all cases executed.
	}

	case 'three':
	{	
		//Multiplication
		$c = $a * $b;
		echo "the mulitiplication of a*b is:".$c."<br>";
		break;
	}

	case 'four':
	{	
		//Division
		$c = $a / $b;
		echo "the division of a / b  is:".$c."<br>";
		break;
	}

	case 'five':
	{	
		//Modulus
		$c = $a % $b;
		echo "the modulos of a % b is:".$c."<br>";
		break;
	}


default: //If none of the case label values matches to the value of the expression, then default part statement will be executed.
		echo '<i style="color:red ;"> Enter the valid value </i>';
		break;
}



//Output
/*
a = 30; b = 20;

case +: c = a + b;
the value of a+b is:50

case -: c = a - b;
the value of a-b is:10

case /: c = a / b;
the value of a/b is:1

case *: c = a * b;
the value of a*b is:600

case %: c = a % b;
the value of a%b is:10
*/





                              //Prashant Dasnur

 ?>