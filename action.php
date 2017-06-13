<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        include 'dbconnect.php';

        $ename = $_POST['Emp_Name'];
        $dob = $_POST['DOB'];
        $gen = $_POST['Gender'];
        $sal = $_POST['Salary'];
        $eby = $_POST['Entry_by'];
        $edate = $_POST['Entry_date'];
        
        if($_GET) {
            $id = $_GET['id'];
        }

        
        if(isset($id))
        {
            $sql = "update employee set Emp_Name='$ename', DOB='$dob', Gender='$gen', Salary='$sal', Entry_by='$eby', Entry_date='$edate' where Employee_id=$id";
        }
        else {
            $sql = "insert into employee (Emp_Name, DOB, Gender, Salary, Entry_by, Entry_date) values ('$ename', '$dob', '$gen', '$sal', '$eby', '$edate')";
        }
        
        mysqli_query($conn, $sql);

        $conn->close();
        
        header("Location: http://localhost/registration/show.php");
        exit();

?>