<!DOCTYPE html>
<html>
<head>
    <title>Dan's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-300 min-h-screen flex flex-col">
    <header>
        <h1>Hello, <?php $name = "Dan"; echo $name; ?></h1>
        <nav class="bg-gray-300 p-4 rounded-lg shadow-md text-black">
            <ul class="flex gap-6 justify-center">
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>