<?php
 //Logical Operator
$a = 50;
$b = 30;

//Logical AND
//we use also  Logical NOT
if (!(($a > $b) && ($a != $b))) // !(a=50 > b=30) is False && (a=50 != b=30) is True; Therefore this statement is False.
                               // when both statement are True then result will be True.
                              // '!'not is True statement consider False and False statement consider to True.
{
	echo "this statement is true <br>";
} else {
	echo "this is statement is false <br>";
}

//Logical OR
if (($a < $b) || ($a != $b)) // (a=50 < b=30) is False || (a=50 != b=30) is True; therefore this statement is True.
                        //if one(or both) statement is True then result will be True, Otherwise it returns False.
{
	echo "this staement is true <br>"; //"echo" use for print line.
} else {
	echo "this staement is false <br>"; //"<br>" use for linebreak.
}



//Output
/*
//Logical AND
First statement is false

//Logical OR
Second statement is true
*/




                                                    //Prashant Dasnur
  ?>