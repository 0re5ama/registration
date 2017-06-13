<html>
    <head>
        <title>Edit</title>
    </head>
    
    <body>
        
        <?php
        $id = $_GET['id'];
        
        include 'dbconnect.php';
        
        
        $result = mysqli_query($conn, "select * from employee where Employee_id = $id");
        
        $emp = mysqli_fetch_assoc($result);
        ?>
        
        <form action="" method="POST">
            Name: <input type="text" name="Emp_Name"value="<?php echo $emp['Emp_Name']; ?>"><br>
            Date of Birth: <input type="date" name="DOB" value='<?php echo $emp['DOB']; ?>'><br>
            Gender: <br>
            <input type="radio" name="Gender" value="m" <?php if($emp['Gender'] == 'm') echo "checked='checked'"; ?>> Male
            <input type="radio" name="Gender" value="f" <?php if($emp['Gender'] == 'f') echo "checked='checked'"; ?>> Female
            <input type="radio" name="Gender" value="t" <?php if($emp['Gender'] == 't') echo "checked='checked'"; ?>> Other
            <br>
            Salary: <input type="text" name="Salary" value='<?php echo $emp['Salary']; ?>'><br>
            Entry by: <input type="text" name="Entry_by" value='<?php echo $emp['Entry_by']; ?>'><br>
            Entry date: <input type="date" name="Entry_date" value='<?php echo$emp['Entry_date']; ?>'><br>
            <input type="submit">
        </form>
        <?php
        
        
        if ($_POST)
        {
            $ename = $_POST['Emp_Name'];
            $dob = $_POST['DOB'];
            $gen = $_POST['Gender'];
            $sal = $_POST['Salary'];
            $eby = $_POST['Entry_by'];
            $edate = $_POST['Entry_date'];


            $sql = "update employee set Emp_Name='$ename', DOB='$dob', Gender='$gen', Salary='$sal', Entry_by='$eby', Entry_date='$edate' where Employee_id=$id";

            mysqli_query($conn, $sql);
            mysqli_close($conn);
            
            header("Location: http://localhost/registration/show.php");
        }
        ?>
        
    </body>
</html>