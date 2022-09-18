<?php 
//Switch Integer:- In Switch Integer we use Numbers(integers)

$a = 30; //variable def
$b = 20;
$c;
$int = '1'; //which case you want to execute 'Enter' case value.

switch($int) 
{
	case '1': //the case label must end with colon(:)
	{	
		//Addition
		$c = $a + $b;
		echo "the addition of a+b is:".$c."<br>"; //"echo" use for print line.
		break; //It's necessary to use break after each block.
	}

case '2': //case label must be unique.
	{
		//Subtract
		$c = $a - $b;
		echo "the subtraction of a+b is:".$c."<br>"; //"<br>" use for linebreak.
		break; //if you don't use it, then all cases executed.
	}

case '3':
	{
		//Multiplication
		$c = $a * $b;
		echo "the mulitiplication of a+b is:".$c."<br>";
		break;
	}

case '4':
	{
		//Division
		$c = $a / $b;
		echo "the division of a+b is:".$c."<br>";
		break;
	}

case '5':
	{
		//Modulusc
		$c = $a % $b;
		echo "the modulos of a+b is:".$c."<br>";
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