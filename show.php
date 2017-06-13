<html>
    <head>
        <title>Employee List</title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "erecord";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        $result =  mysqli_query($conn, "select * from employee");
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>Entry by</th>
                    <th>Entry date</th>
                    <th>Delete</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)):
                    $id = $row['Employee_id'];
                    $name = $row['Emp_Name'];
                    $dob = $row['DOB'];
                    $gen = $row['Gender'];
                    $sal = $row['Salary'];
                    $eby = $row['Entry_by'];
                    $edate = $row['Entry_date'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $dob ?></td>
                    <td><?php echo $gen ?></td>
                    <td><?php echo $sal ?></td>
                    <td><?php echo $eby ?></td>
                    <td><?php echo $edate ?></td>
                    <td><?php echo "<a href='del.php?id=$id'>delete</a>" ?></td>
                    <td><?php echo "<a href='edit.php?id=$id'>edit</a>" ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php mysqli_close($conn); ?>
        <br />
        <br />
        <a href="addedit.php">Click here to add more data</a>
        <br />
        
    </body>
</html>