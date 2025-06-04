<?php

require_once "classes/Employee.php";

$employee = new Employee();
$employee = $employee->getAllEmployees();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Employee Management</title>
</head>
<body>

<table>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>Department</th>
            <th>Hire Date</th>
            <th>Salary</th>
        </tr>
    <?php while ($row = $employees->fetch_asoc()){
    echo  "<tr>
            <td>{$row['fname']}</td>
            <td>{$row['lname']}</td>
            <td>{$row['phonenumber']}</td>
            <td>{$row['email']}</td>
            <td>{$row['department']}</td>
            <td>{$row['job_title']}</td>
            <td>{$row['hire_date']}</td>
            <td>{$row['salary']}</td>
            <td>
            <ahref='delete.php?id={$row['id']}>Delete</a>
            <a>href='edit.php'?={$row['id']}Edit</a>
        </tr>";
    }
    ?>
</table>
</body>
</html>







