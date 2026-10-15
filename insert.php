<?php
require "connection.php";
$sql="insert  into student(fname,lname,sex) values('kindalem','tazeb','male')";


if(mysqli_query($conn,$sql)){
    echo "data is inserted  succesfully";

}else{
    echo "error inserting data".mysqli_error($conn);
}
    mysqli_close($conn);

?>