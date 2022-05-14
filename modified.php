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
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['fname'];
        $last_name = $_REQUEST['mname'];
        $gender =  $_REQUEST['lname'];
        $address = $_REQUEST['pwd'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registration  VALUES ('$first_name', 
            '$last_name','$gender','$address')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>