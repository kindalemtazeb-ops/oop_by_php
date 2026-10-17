<?php
if(isset($_POST['submit'])){
    // Fixed: Added '$' and captured data from $_POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Optional: test if it works
    // echo "Hello, $username!";
}
class userrvalidator{
    private $data;
    private $errors=[];
    private static $fields=['username','email','password'];
    public function __construct($post_data){
    $this->data=$post_data;
    }
    public function validateform(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field,$this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateusername();
        $this->validateemail();
       return $this->errors;
    }
    private function validateusername(){
        $val=trim($this->data['username']);
        if(empty($val)){
            $this->adderror('username','username cannot be empty');
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$val)){
                $this->adderror('username','username must be 6-12 characters and alphanumeric');
            }
        }

    }
    private function validateemail(){
        $val=trim($this->data['email']);
        if(empty($val)){
            $this->adderror('email','email cannot be empty');

    }}
    // private function validatepassword(){
    //     $val=trim($this->data['password']);
    //     if(empty($val)){
    //         $this->adderror('password','password cannot be empty');
    //     }else{
    //         if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$val)){
    //             $this->adderror('password','password must be 6-12 characters and alphanumeric');
    //         }
    //     }

    
    private function adderror($key,$val){
        $this->errors[$key]=$val;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <!-- Fixed: Changed 'labele' to 'label' -->
        <label for="username">username:</label>
        <input type="text" name="username" id="username" value="<?php echo htmlspecialchars ($_post['username'] ?? ''); ?>">
        <br>
        <div class="error">
            <?php
           echo $errors['username'] ?? '';
            
            ?>
        <label for="email">email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars ($_post['email'] ?? ''); ?>">
        <br>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>