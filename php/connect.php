<?php
error_reporting(E_ALL);
// error_reporting(0);//ปิดเออเรอกรณีต้องการเออเรอของเราเอง
//เชื่อมต่อ Database
$conn = new mysqli('localhost','root','','blog');
$conn->set_charset('utf8');
if ($conn->connect_errno){
    echo"Connect error".$conn->connect_error;
    exit();
}


// if(!true){
//     echo"true";
// }
// else{
//     echo"false";
// }




?>