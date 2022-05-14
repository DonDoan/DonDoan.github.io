<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
// $sql = "delete from registration where id = '".$_GET['id']."'";    
$sql = "delete from registration where id = '".$_GET['fname']."'";  
$result = mysqli_query($conn,$sql);    
}    
    
$sql = "select * from registration";    
// $sql = "select * from registration where fname = 'Hang'";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Password</td>    
                <td colspan = "2">Action</td>    
            </tr>        
<?php    
    
while($row = mysqli_fetch_object($result)){    
       
?>  
    <tr>  
        <td>  
            <?php echo $row->fname;?>  
        </td>  
        <td>  
            <?php echo $row->mname;?>  
        </td>  
        <td>  
            <?php echo $row->lname;?>  
        </td>  
        <td>  
            <?php echo $row->pwd;?>  
        </td>  
        <td> <a href="listing.php?id =     
            <?php echo $row->fname;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->fname;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
<?php 
    } 
?>  
        </table>    
    </body>    
</html>