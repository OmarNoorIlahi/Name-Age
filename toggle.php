<?php
include 'db.php';

$id = $_POST['id'];

$result = $conn->query("SELECT status FROM users WHERE id = $id");
$row = $result->fetch_assoc();
$current = $row['status'];

$new = $current == 1 ? 0 : 1;
$conn->query("UPDATE users SET status = $new WHERE id = $id");

echo $new;
?>
