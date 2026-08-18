<?php
require_once 'db.php';

session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['title'], $_POST['content']]);
    header('Location: admin.php');
    exit;
}
?>

<?php include 'header.php'; ?>

<h1>Admin: New Post</h1>

<form method="POST" action="admin.php">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="10" cols="30" required></textarea><br><br>

    <button type="submit">Publish Post</button>
</form>

<?php include 'footer.php'; ?>