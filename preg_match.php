<?php

$string="this is small product";
 
if(preg_match('/ /',$string)){
    echo "string match";
}  else {
   echo "string not match";    
}