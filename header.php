<!DOCTYPE html>
<html>
<head>
    <title>Dan's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-950 text-zinc-300 font-sans min-h-screen flex flex-col">
    <header class="py-6">
        <h1 class="text-2xl font-semibold text-zinc-100 text-center mb-4">
            Hello, <?php $name = "Dan"; echo $name; ?>
        </h1>
        <nav>
            <ul class="flex gap-6 justify-center text-xl font-mono tracking-wider text-zinc-400">
            <li><a href="index.php" class="hover:text-zinc-100 transition-colors">Home</a></li>
                <li><a href="projects.php" class="hover:text-zinc-100 transition-colors">Projects</a></li>
                <li><a href="blog.php" class="hover:text-zinc-100 transition-colors">Blog</a></li>
                <li><a href="resume.php" class="hover:text-zinc-100 transition-colors">Resume</a></li>
                <li><a href="contact.php" class="hover:text-zinc-100 transition-colors">Contact</a></li>
                <li><a href="login.php" class="hover:text-zinc-100 transition-colors">Login</a></li>
            </ul>
        </nav>
    </header>