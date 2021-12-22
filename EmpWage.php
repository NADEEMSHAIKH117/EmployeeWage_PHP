<?php
echo "Welcome to Employee Wage Problem" . "\n";

$IS_PRESENT = 1;
$num = rand(0, 1);

//using if-else statement to print employee is present or absent
if ($num == $IS_PRESENT) {
    echo "Employee is Present";
} else {
    echo "Employee is Absent";
}
