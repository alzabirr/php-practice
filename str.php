
<?php
// string 

$first_name = "Al";
$last_name = "Zabir";

// printf function

printf("hi i am %s %s", $first_name, $last_name); 
// 

// sprintf output  kre na just return kre

// printf VS sprintf 
 $output =  sprintf("hi i am %s %s", $first_name, $last_name);

 echo $output;
//  

// leapyear 
$year = 24;
if ($year % 4 == 0){
    printf("this is leapyear %d", $year);
}
else{
    printf("this is not leapyear %d", $year);
}





?>