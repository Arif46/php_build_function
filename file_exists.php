<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// checking whether file exists or not 
$file_pointer = '/user01/work/gfg.txt'; 
  
if (file_exists($file_pointer))  
{ 
    echo "The file $file_pointer exists"; 
} 
else 
{ 
    echo "The file $file_pointer does 
                             not exists"; 
} 
 