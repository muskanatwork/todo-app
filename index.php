<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Todo List</h1>

        <form action="add.php" method="POST">
            <input type="text" name="task" placeholder="Enter Task" required>
            <button type="submit">Add Task</button>
        </form>
    </div>

</body>

</html>