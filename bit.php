<?php 
// Birwise Operator

$a = 50; //00110010 in binary. 
$b = 30; //00011110 in binary.
$c = 0;
$d = 0;// $ use for variables
$e = 0;
$f = 0;
$g = 0;
$h = 0;

//Bitwise AND
$c = $a & $b; // 00110010 & 00011110 = 00010010 i.e means is '18'.
echo ("The value of AND is:- $c <br>");

//Bitwise OR
$d = $a | $b; // 00110010 | 00011110 = 00111110 i.e means is '62'.
echo ("The value of OR is:- $d <br>");  // <br> use for linebreake

//Bitwise Exclusive XOR
$e = $a ^ $b; //00110010 ^ 00011110 = 00101100 i.e means is '44'.
echo ("The value of Exclusive OR is:- $e <br>"); // echo use for print line.

//Bitwise Complement
$f = ~$a; // -(50+1)= i.e means is '-51'.
echo ("The value of Complement is:- $f <br>");  // .$c. is used to indicate which value should be print.

//Bitwise Shift Left
$g = $a << 2; //50=00110010 << 2 :- 11001000 i.e means is '200'. //Shift with 2 zero to left side.
echo ("The value of Shift Left is:- $g <br>");

//Bitwise Shift Right
$h = $a >> 2; // 50=00110010 >> 2 :-  001100 i.e means os '12'. //Shift with 2 zero to right side.
echo ("The value of Shift Right  is:- $h <br>");

//Output
/*
The value of AND is:- 18
The value of OR is:- 62
The value of Exclusive OR is:- 44
The value of Complement is:- -51
The value of Shift Left is:- 200
The value of Shift Right is:- 12
*/





												//Prashant Dasnur
?>