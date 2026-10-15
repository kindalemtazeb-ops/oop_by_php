<?php
require "connection.php";

// 1. Prepare
$sql = "INSERT INTO student (fname, lname, sex) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// 2. Bind
$stmt->bind_param("sss", $fname, $lname, $sex);

// 3. Set parameters and execute
$data = [
    ["kindalem", "tazeb", "male"],
    ["kinda", "taze", "male"],
    ["kindlem", "tazeb", "male"],
    ["kindalem", "tazeb", "female"]
];

foreach ($data as $row) {
    $fname = $row[0];
    $lname = $row[1];
    $sex = $row[2];
    
    if ($stmt->execute()) {
        echo "Data inserted: $fname <br>";
    } else {
        echo "Error inserting $fname: " . $stmt->error . "<br>";
    }
}

// 4. Close
$stmt->close();
mysqli_close($conn);
?>