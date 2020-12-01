<?php 
//print_r($_GET);
session_start();
require_once 'connections_db\first_con.php';

$email=$_POST['login'];
$pass=$_POST['password'];


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql_statement="SELECT * FROM `login` where email='$email' and pasword='$pass'";



if (mysqli_query($connection, $sql_statement)) {
    
    
   $result=mysqli_query($connection, $sql_statement);

       // it return number of rows in the table.
       $row = mysqli_num_rows($result);
       $row2=mysqli_fetch_assoc($result);
    
       if ($row==0){
           $_SESSION['email'] =$email;
           
           echo '<script>
 
     window.location="../imagine/space-404/space.php"
 
</script>';
           
       }
       else {
           $_SESSION['name'] =   $row2['name'];
           echo '<script> 
               
     window.location="../imagine/the_admin_folder/admin_page.php"
               
</script>';
       }
       
       // close the result.
   
}
else {
    
    
 echo "erro ";
   // echo '<script>
    // function explode(){
    //  window.location="index.php"
    // }
    // setTimeout(explode, 2000);</script>';
}
?>