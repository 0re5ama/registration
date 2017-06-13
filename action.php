<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "erecord";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $ename = $_POST['Emp_Name'];
        $dob = $_POST['DOB'];
        $gen = $_POST['Gender'];
        $sal = $_POST['Salary'];
        $eby = $_POST['Entry_by'];
        $edate = $_POST['Entry_date'];

        $sql = "insert into employee (Emp_Name, DOB, Gender, Salary, Entry_by, Entry_date) values ('$ename', '$dob', '$gen', '$sal', '$eby', '$edate')";

        if($conn->query($sql) == TRUE) {
            echo "New record created successfully<br>";
        }
        else
        {
            echo "Error: ".$sql."<br>".$conn->error;
        }
        
        

        $conn->close();
        
        header("Location: http://localhost/registration/show.php");
        exit();

?>