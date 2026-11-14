<?php
require_once 'config/Database.php';
require_once 'classes/Task.php';

// Instantiate database and task object
$database = new Database();
$db = $database->connect();
$task = new Task($db);

// Handle form submission for creating a task
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_task'])) {
    $task->title = $_POST['title'];
    $task->description = $_POST['description'];

    if(!empty($task->title)) {
        $task->createTask();
        header("Location: index.php");
        exit();
    }
}

// Handle task deletion
if(isset($_GET['delete'])) {
    $task->id = $_GET['delete'];
    $task->deleteTask();
    header("Location: index.php");
    exit();
}

// Fetch all tasks
$result = $task->getTasks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP PHP Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Task Manager (PHP OOP)</h1>

        <!-- Add Task Form -->
        <form action="index.php" method="POST" class="task-form">
            <input type="text" name="title" placeholder="Task Title..." required>
            <textarea name="description" placeholder="Task Description..."></textarea>
            <button type="submit" name="add_task">Add Task</button>
        </form>

        <h2>My Tasks</h2>
        <div class="task-list">
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="task-card">
                    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <small>Created: <?php echo $row['created_at']; ?></small>
                    <br>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>