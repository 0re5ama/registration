<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
    </head>
    <body>
        <form action ="action.php" method ="POST">
            Name: <input type="text" name="Emp_Name"><br>
            Date of Birth: <input type="date" name="DOB"><br>
            Gender: <br>
            <input type="radio" name="Gender" value="m"> Male
            <input type="radio" name="Gender" value="f"> Female
            <input type="radio" name="Gender" value="t"> Other
            <br>
            Salary: <input type="text" name="Salary"><br>
            Entry by: <input type="text" name="Entry_by"><br>
            Entry date: <input type="date" name="Entry_date"><br>
            <input type="submit">
        </form>
        <?php
        
        ?>
    </body>
</html>
