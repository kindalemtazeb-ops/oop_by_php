<?php
class User {
    public $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username; // Fixed: removed single quotes
        $this->email = $email;       // Fixed: removed single quotes
    }

    public function addfriends() {
        return "$this->username adds friends"; // Fixed: removed unreachable return
    }

    // Fixed: Moved getemail() INSIDE the class
    public function getemail() {
        return $this->email;
    }
    
    // Optional: Added a setter if you want to modify private email externally
    public function setEmail($email) {
        if(strpos($email,'@')>-1){
            $this->email=$email;
        }
        }
    }


$user1 = new User('aster', 'aster@gmail.com');
$user2 = new User('asa', 'asa@gmail.com');

// Fixed: Use the setter method because $email is private, 
// or make $email public in the class definition.
$user1->setEmail("aebemekita@gmail.com");
// $user2->email = 55; // This would cause an error unless email is public

$user1->username = "kindalem";
$user2->username = "haland"; // Overwrites previous assignment to "kase"

echo "username of user1: " . $user1->username;
echo "<br>";
echo "email of user1: " . $user1->getemail();
echo "<br>";
echo "username of user2: " . $user2->username;
echo "<br>";
echo "email of user2: " . $user2->getemail();
echo "<br>";
echo $user1->addfriends();
echo "<br>";

print_r(get_class_vars('user'));
echo "<br>";
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