<?php
require('validation.php');
if(isset($_post['submit'])){
    $validator=new userrvalidator($_post); 
    $errors=$validator->validateform();
    if(empty($errors)){
        echo "form is valid";  
}};
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