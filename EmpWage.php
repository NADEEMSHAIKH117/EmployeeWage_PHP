<?php 
echo "Welcome to Employee Wage Problem"."\n";

$WAGE_PER_HR = 20;
$MAX_WORKING_DAYS = 20;
$TOTAL_WORKING_DAYS = 0;
$TOTAL_EMP_HRS = 0;
$EMP_HRS;

while ($TOTAL_WORKING_DAYS < $MAX_WORKING_DAYS) {
    $num = rand(0,2);
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

    $TOTAL_EMP_HRS = $TOTAL_EMP_HRS + $EMP_HRS;
    $TOTAL_WORKING_DAYS++;
}

$TOTAL_SALARY = $WAGE_PER_HR * $TOTAL_EMP_HRS;
echo "Total Salary : " . $TOTAL_SALARY;
?>