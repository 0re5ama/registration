<html>
    <head>
        <title>Edit</title>
    </head>
    
    <body>
        
        <?php
        
        
        if($_GET) {
            $id = $_GET['id'];
            include 'dbconnect.php';
            $result = mysqli_query($conn, "select * from employee where Employee_id = $id");
            $emp = mysqli_fetch_assoc($result);
        }
        
        ?>
        
        <form action="action.php<?php if(isset($id))echo "/?id=".$id; ?>" method="POST">
            Name: <input type="text" name="Emp_Name" <?php if(isset($id)) echo "value=".$emp['Emp_Name']; ?>><br>
            Date of Birth: <input type="date" name="DOB" <?php if(isset($id)) echo "value=".$emp['DOB']; ?>><br>
            Gender: <br>
            <input type="radio" name="Gender" value="m" <?php if(isset($id) and $emp['Gender'] == 'm') echo "checked='checked'"; ?>> Male
            <input type="radio" name="Gender" value="f" <?php if(isset($id) and $emp['Gender'] == 'f') echo "checked='checked'"; ?>> Female
            <input type="radio" name="Gender" value="t" <?php if(isset($id) and $emp['Gender'] == 't') echo "checked='checked'"; ?>> Other
            <br>
            Salary: <input type="text" name="Salary" <?php if(isset($id)) echo "value=".$emp['Salary']; ?>><br>
            Entry by: <input type="text" name="Entry_by" <?php if(isset($id)) echo "value=".$emp['Entry_by']; ?>><br>
            Entry date: <input type="date" name="Entry_date" <?php if(isset($id)) echo "value=".$emp['Entry_date']; ?>><br>
            <?php
            if(isset($id))
            {
                echo "<input type='submit' value='Update'>";
            }
            else
                echo "<input type='submit' value='Submit'>";
            ?>
        </form>
        <?php
        
        ?>
        
    </body>
</html>