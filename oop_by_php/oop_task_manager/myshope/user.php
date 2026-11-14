<?php
include('dbconection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $departement = $_POST['departement'];

    // Use && (AND) to make sure ALL fields are filled
    if ($id != "" && $name != "" && $email != "" && $password != "" && $age != "" && $departement != "") {
        
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Use Prepared Statements to prevent SQL Injection and match all 6 columns
       // Change 'departement' to 'department' (or whatever exact column name appears in phpMyAdmin)
$stmt = $conn->prepare("INSERT INTO student (id, name, email, password, age, department) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssis", $id, $name, $email, $password, $age, $departement);

        if ($stmt->execute()) {
            echo "Successfully inserted!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "All fields are required!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <fieldset>
        <legend>Registration Form</legend>
        <form action="" method="post">
            ID:<br>
            <input type="number" name="id" placeholder="Enter ID" required><br>
            
            Name:<br>
            <input type="text" name="name" placeholder="Enter name" required><br>
            
            Email:<br>
            <input type="email" name="email" placeholder="exam@gmail.com" required><br>
            
            Password:<br>
            <input type="password" name="password" placeholder="Enter password" required><br>
            
            Age:<br>
            <input type="number" name="age" placeholder="Enter age" required><br>
            
            Department:<br>
            <select name="departement" required>
                <option value="">-- Select Department --</option>
                <option value="it">IT</option>
                <option value="cs">CS</option>
                <option value="se">SE</option>
            </select><br><br>
            
            <input type="reset" value="Reset">
            <input type="submit" name="submit" value="Add User">
        </form>
    </fieldset>
</body>
</html>