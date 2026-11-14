<?php

// Define the interface (The Contract)
interface Logger {
    public function logMessage($message);
}

// Class 1 implementing the interface
class FileLogger implements Logger {
    public function logMessage($message) {
        return "Writing '$message' to a text file.<br>";
    }
}

// Class 2 implementing the same interface
class DatabaseLogger implements Logger {
    public function logMessage($message) {
        return "Saving '$message' to the database.<br>";
    }
}

// ---------------------------------------------------------
// Testing Interfaces
$fileLog = new FileLogger();
echo $fileLog->logMessage("User logged in");


$dbLog = new DatabaseLogger();
echo $dbLog->logMessage("Password updated");

?>