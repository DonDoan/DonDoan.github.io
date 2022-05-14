<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => test
        $conn = mysqli_connect("localhost", "root", "", "test");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['uname'];
        $password = $_REQUEST['psw'];
        // $gender =  $_REQUEST['lname'];
        // $address = $_REQUEST['pwd'];
        // $checkUnique = "SELECT COUNT(1) FROM userpwd  WHERE unique_key = value;";
        $checkUnique = "SELECT * FROM userpwd WHERE user = '$username' and password = '$password'";
        $resultCheckUnique = mysqli_query($conn, $checkUnique);
        $row = mysqli_fetch_array($resultCheckUnique, MYSQLI_ASSOC);
        //   $row = mysqli_fetch_object($result)
        //   $uname = $row['user'];

        $count = mysqli_num_rows($resultCheckUnique);
        echo "<h1>$count</h1>";
        // echo nl2br("\n$username\n $password\n ");
        // Performing insert query execution
        // here our table name is college
        if ($count < 1) {
            $sql = "INSERT INTO userpwd  VALUES ('$username', 
            '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";

                echo nl2br("\n$username\n $password\n ");
                // header('Location: http://localhost/badon_test20220420/index.html');
                include("connection.php");
                session_start();
                $_SESSION['login_user'] = $username;
                header('Location: http://localhost/badon_test20220420/index.php');
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
        } else {
            // echo "ERROR: Hush! Sorry $sql. "
            // . mysqli_error($conn);
            include("connection.php");
            session_start();
            $_SESSION['login_user'] = $username;
            header('Location: http://localhost/badon_test20220420/index.php');
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>