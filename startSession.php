<?php
// Start session
session_start();
// echo $_SESSION[0];
// Loop through colors array
// foreach($_SESSION as $value){
//   echo $value . "<br>";
// }

// echo join(', ', $_SESSION);
$userNameSection = join(', ', $_SESSION);
echo $userNameSection;
// Check do the person logged in
if($_SESSION['login_user']==NULL){
    // Haven't log in
    // echo "You haven't log in";
    echo $_SESSION['login_user'];
    echo "<h3>You haven't log in</h3>";
    // header('Location: http://localhost/badon_test20220420/index.html'); 
    // header('Location: http://www.conandon.cu.ma'); 
    header('Location: /badon_test20220420/index_login.html'); 
}else{
    // Logged in
    // echo "Successfully logged in!";
    echo "<h3>Successfully logged in!</h3>"; 
    header('Location: /badon_test20220420/index_logout.html');
}
?>