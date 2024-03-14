<?php
error_reporting(0);
// $_servername="loacalhost";
// $username="root";
// $password="";
// $dbname="mca";
$conn=mysqli_connect('localhost','root','','mca');
if($conn){
    echo"success";
}else{
    echo"not success";
}

mysqli_close($conn);
?>