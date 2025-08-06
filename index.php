<?php
include 'db.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();
    $stmt->close();
}

// Show all users
$result = $conn->query("SELECT * FROM users");
$hasUsers = $result && $result->num_rows > 0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Status Toggle</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required />
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required />
        </div>

        <div class="form-actions">
            <input type="submit" value="Submit" />
        </div>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $hasUsers): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): ?>
                <tr id="row-<?= htmlspecialchars($row['id']) ?>">
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['age']) ?></td>
                    <td class="status"><?= htmlspecialchars($row['status']) ?></td>
                    <td>
                        <button type="button" onclick="toggleStatus(<?= htmlspecialchars($row['id']) ?>)">Toggle</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>


    <!-- Message -->
    <div id="message"></div>

    <script src="script.js"></script>
</body>

</html>