<?php
echo "Welcome to Employee Wage Problem" . "\n";

$IS_PRESENT = 1;
$WAGE_PER_HR = 20;
$EMP_HRS;
$num = rand(0, 1);

//using if-else statement to print employee is present or absent
if ($num == $IS_PRESENT) {
    $EMP_HRS =8;
} else {
    $EMP_HRS =0;
}
$TotalWageInDay = $WAGE_PER_HR * $EMP_HRS;
echo "Total Wage in Day : " .$TotalWageInDay;
