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

        <ul>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");

            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <li>
                    <?php echo $row['task']; ?>
                </li>
            <?php } ?>
        </ul>


    </div>

</body>

</html>