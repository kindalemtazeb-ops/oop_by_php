<?php
if(isset($_POST['submit'])){
    // Fixed: Added '$' and captured data from $_POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Optional: test if it works
    // echo "Hello, $username!";
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
        <input type="text" name="username" id="username">
        <br>
        <label for="email">email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>