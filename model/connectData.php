<?php
$connect = mysqli_connect("localhost:3305","root","") or die(" khong the ket noi");
if(!$connect){
 
   die('Kết nối thất Bại:'.mysqli_connect_error());
 
}else{
 
    echo"Ket noi thanh cong";
 
}