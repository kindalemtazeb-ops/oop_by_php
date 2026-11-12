<?php
require "connection.php";
$sql="create database IF NOT EXISTS db";
if(mysqli_query($conn,$sql)){
    echo "database created succesfully";

}else{
    echo "error creating database".mysqli_error($conn);
    mysqli_close($conn);
    
}


?>