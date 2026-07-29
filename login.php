<?php include 'header.php'; ?>

<?php
session_start();
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === $_ENV['ADMIN_USER'] && password_verify($password, $_ENV['ADMIN_PASS_HASH'])) {
        $_SESSION['logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Invalid Credentials';
        $error_color = 'red';
    }
}
?>

<form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
    <?php if (isset($error)) : ?>
        <p style="color: <?php echo $error_color; ?>;"><?php echo $error; ?></p>
    <?php endif; ?>
</form>

<?php include 'footer.php'; ?>