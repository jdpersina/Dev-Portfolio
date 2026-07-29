<?php include 'header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        // valid
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $email = htmlspecialchars($_POST['email']);

        $to = 'persinajd@gmail.com';
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nMessage: $message";
        $headers = "From: $email";

        mail($to, $subject, $body, $headers);
    } else {
        $error = "Please enter a valid email address";
    }  
    if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; 
}
?>

<h1>Contact Me</h1>

<form method="POST" action="contact.php">
    <label>Your name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Your Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="10" cols="30" required></textarea><br><br>

    <button type="submit">Send</button>
</form>

<?php include 'footer.php'; ?>