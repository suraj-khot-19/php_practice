<?php
//syntax
//define(name,value,case-insensitivity);
//                       it is false indefault


/*
define(num, 500, true); 
define(_num, 500, true);
Can't use $ sign with constant variable name.
Constant Variables are Global Variables.
*/

define("name",20);
echo name;
//echo Name;


define("name2",20,true);
echo Name2;

?>