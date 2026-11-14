<?php
$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect("$host","$username","$password","stud_reg");
if($conn){
    echo "conection created succesfuly";
}else{
    die(mysqli_error($conn));
}
?>