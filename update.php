<?php
require "connection.php";
//select data from database
$sql="update student set fname='John', lname='Doe', sex='Male' where id=1";
$result=mysqli_query($conn,$sql);
//output data of each row
echo "<table border='1'>";
echo "<tr><td>ID</td><td>First Name</td><td>Last Name</td><td>Sex</td></tr>";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row["id"]}</td><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["sex"]}</td></tr>";
}
  echo "</table>";
    mysqli_close($conn);

?>