<?php
include 'EmpWage.php';
echo "Welcome to Employee Wage Problem \n";

$wage = new EmpWage();
$wage->addEmpWage("D-Mart",20,22,100);
$wage->addEmpWage("Star Home",15,26,120);

$wage->showCompanyEmpWage();

?>