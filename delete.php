<?php

require_once "classes/Employee.php";
$employee = new Employee();
$employee->delete($GET{'id'});

header("location : index.php");
?>