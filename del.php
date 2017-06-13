<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        include 'dbconnect.php';
        $delid = $_GET['id'];
        $del = "delete from employee where Employee_id = $delid";
        
        mysqli_query($conn, $del);
        echo $delid;
        
        header("Location: http://localhost/registration/show.php");
        ?>