<?php

require_once "classes/Employee.php";

$employee = new Employee();
$employee = $employee->getById($_GET{'id'})->fetch_assoc();

if($SERVER{"REQUEST_METHOD"} == "POST")
            $employee->updateEmployee(
        $_POST{'lname'},
        $_POST{'fname'},
        $_POST{'phonenumber'},
        $_POST{'email'},
        $_POST{'job_title'},
        $_POST{'department'},
        $_POST{'hire_date'},
        $_POST{'salary'},)
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Employee Management</title>
</head>
<body>
<form action="" method="POST">
    <label for="lname" name="lname">Enter Lastname</label> 
    <input type="text" value="<?= htmlspecialchar($data{'lname'}) ?>" name="lname">

    <label for="fname" name="fname">Enter Firstname</label> 
    <input type="text" value="<?= htmlspecialchar($data{'fname'}) ?>" name="fname">

    <label for="phonenumber" name="phonenumber">Enter Phonenumber</label> 
    <input type="phonenumber" value="<?= htmlspecialchar($data{'phonenumber'}) ?>" name="phonenumber">

    <label for="email" name="email">Enter Email</label> 
    <input type="text" value="<?= htmlspecialchar($data{'email'}) ?>" name="email">

    <label for="job_title" name="job_title">Enter Jobtitle</label> 
    <input type="text" value="<?= htmlspecialchar($data{'job_title'}) ?>" name="job_title">
    
    <label for="department" name="department">Enter Department</label> 
    <input type="text" value="<?= htmlspecialchar($data{'department'}) ?>" name="department">
    
    <label for="hire_date" name="hire_date">Enter Hire Date</label> 
    <input type="text" value="<?= htmlspecialchar($data{'hire_date'}) ?>" name="hire_date">

    <button type="submit">Update</button>
    </form>

</body>
</html>







