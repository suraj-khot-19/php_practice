<?php
$x=1;
//method 1
if($x==0){
    echo "<br>x is equals to 0";
}
else{
    echo "<br> x is not equals to 0 it is equals to $x";
}

//method 2
if($x==0):
    echo "<br> x is equals to 0";
else:
    echo "<br> x is not equals to 0 it is equals to $x";
endif;
?>