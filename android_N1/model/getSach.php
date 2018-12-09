
<?php
 include 'connect.php';
 
 if(isset($_POST['btn_submit'])){
 $sql = "insert into tb_user(username, address, created_at)values('".$_POST['txt_username']."','".$_POST['txt_address']."','".date('Y-m-d H:i:s')."')";
 if(mysqli_query($con,$sql)){
 header('Location:index.php');
 }else{
 echo"Error".mysqli_error($con);
 }
   }
 ?>
