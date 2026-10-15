<?php
class user{
public $username="kita";
public $email="kiata@gmail.com";
public function __construct($username,$email){
$this->username='$username';
$this->email='$email';
}

public function addfriends(){
    
    return "$this->email adds friends";
    return "$this->username adds friends";
}

}

$user1=new user('aster','aster@gmail.com');
$user2=new user('asa','asa@gmail.com');
$user1->username="kindalem";
$user1->email="kita@gmail.com";
$user2->username="kase";
$user2->email="kase@gmail.com";

$user2->username="haland";
echo "username of user1:". $user1->username;
echo "<br>";
echo "email of user1:".$user1->email;
echo "<br>";
echo "username of user2:".$user2->username;
echo "<br>";
echo "email of user2:". $user2->email;
echo "<br>";
echo $user1->addfriends();
get_class_vars('user');
echo "<br>";
print_r(get_class_vars('user'));
echo"<br>";
print_r(get_class_methods('user'));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>