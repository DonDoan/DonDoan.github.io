<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    //   $myusername = mysqli_real_escape_string($conn,$_POST['user']);
    //   $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $myusername =  $_REQUEST['uname'];
      $mypassword = $_REQUEST['psw'];
      // echo "<h1>$myusername</h1>"; 
      // echo "<h1>$mypassword</h1>"; 
      // $_SESSION["id"] = $row['id'];
      // $_SESSION["name"] = $_REQUEST['uname'];
      $sql = "SELECT * FROM userpwd WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $row = mysqli_fetch_object($result)
    //   $uname = $row['user'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      echo ("\n$count\n $row\n ");
      if($count != 0) {
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo "<h3>Login OK</h3>"; 
         echo nl2br("\n$username\n $password\n ");
        //  header('Location: http://localhost/badon_test20220420/index.html');
         header('Location: http://localhost/badon_test20220420/index.php');
        //  header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
        //  $homepage = "http://localhost/badon_test20220420/index.html";
         $homepage = "http://localhost/badon_test20220420/index.php";
        //  echo ("\n$error\n ");
        //  header('Location: http://localhost/badon_test20220420/login.php');
        //  $message = "wrong answer";
        //  echo "<script type='text/javascript'>alert('$error');</script>";
        // echo "<script type='text/javascript'>confirm('$error');</script>";
        echo "<script type='text/javascript'>
        confirm('$error,$count');
        window.location.replace('$homepage');
        </script>";
        //  sleep(2);
        //  echo "<script type='text/javascript'>confirm('$error\n\"Press a button!\nEither OK or Cancel.\"');</script>";
        // echo ("\n$error\n ");
        // header('Location: http://localhost/badon_test20220420/index.html');
      }
   }
?>