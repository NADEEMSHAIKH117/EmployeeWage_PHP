<?php
echo "Welcome to Employee Wage Problem" . "\n";

//variables
$WAGE_PER_HR = 20;
$EMP_HRS;
//using rand() function which will print 0,1,2
$num = rand(0,2);

//using switch cases to print values
switch($num){
    case 1 :
        $EMP_HRS = 8;
        break;
    case 2 :
        $EMP_HRS = 4;
        break;
    default :
        $EMP_HRS = 0;         
}


$TotalWageInDay = $WAGE_PER_HR * $EMP_HRS;
echo "Total Wage in Day : " .$TotalWageInDay;
?>