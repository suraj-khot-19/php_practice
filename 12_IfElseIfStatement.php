<?php
$x=4;
//method 1
if($x==0){
    echo "<br> x is equals to 0";
}
elseif($x==1){
    echo "<br> x is equals to 1";
}
elseif($x==2){
    echo "<br> x is equals to 2";
}
else{
    echo "<br> x is equals to $x";
}  

//method 2
if($x==0):
    echo "<br> x is equals to 0";
elseif($x==1):
    echo "<br> x is equals to 1";
elseif($x==2):
    echo "<br> x is equals to 2";
else:
    echo "<br> x is equals to $x";  
endif;
?>