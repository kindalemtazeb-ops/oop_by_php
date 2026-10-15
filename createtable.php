<?php
require "connection.php";
$sql="create table IF NOT EXISTS student(
id int(10) primary key auto_increment,
fname varchar(20) not null,
lname varchar(20) not null,
sex varchar(10) not null,

reg_date timestamp default current_timestamp on update current_timestamp
)";


if(mysqli_query($conn,$sql)){
    echo "table created succesfully";

}else{
    echo "error creating table".mysqli_error($conn);
}
    mysqli_close($conn);

?>