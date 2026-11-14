<?php
class Task {
    private $conn;
    private $table = "tasks";

    public $id;
    public $title;
    public $description;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Read all tasks
    public function getTasks() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Create a new task
    public function createTask() {
        $query = "INSERT INTO " . $this->table . " (title, description) VALUES (:title, :description)";
        $stmt = $this->conn->prepare($query);

        // Sanitize and bind input data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":description", $this->description);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete a task
    public function deleteTask() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>