<?php
//arithmetic operators:
$i=20;
$j=30.60;
$k=9;

echo "<br>arithmetic opeartor";
echo $i+$j;
echo $i-$j;
echo $i/$j;
echo $i*$j;
echo $i%$j;
echo $i++;
echo $i--;
echo ++$i;
echo --$i;
echo "it returns $i raise to $k".$i**$k;

//assignment operators:
echo "<br>assingnment opeartor";
echo $i=$j;
echo $i==$j;
echo $i+=$j;
echo $i-=$j;
echo $i/=$j;
echo $i*=$j;
echo $i**=$k;

//comparision opeartor
/*
==   Equal to
===  Equal value and equal data type
!=  Not equal
<>  Not equal
!==     Not equal value or not equal type
>   Greater than
<   Less than
>=      Greater than or equal to
<=  Less than or equal to
<=> spacishio (return 0:equals to ,1:grater than ,-1:less than)
*/
echo "<br>comparision opeartor";
$a=1;
$b="1";
echo " $a == $b:".$a==$b;
echo "<br> $a === $b",$a===$b;

?>