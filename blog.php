<?php
require_once 'db.php';
$parsedown = new Parsedown();

$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();
?>
<?php include 'header.php'; ?>

<div id="blog-sub-header" class="sticky top-0 z-10 pt-6 pb-28 bg-gradient-to-b from-zinc-950 from-50% to-transparent">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-3xl font-light text-zinc-100">Blog</h1>
    </div>
</div>
<div class="max-w-5xl mx-auto px-6">

<main class="flex-1 max-w-5xl mx-auto px-6 py-6 w-full">
    <?php foreach ($posts as $post) : ?>
        <?php
        $date = date('F j, Y', strtotime($post['created_at']));
        $title = $parsedown->text($post['title']);
        $content = $parsedown->text($post['content']);
        ?>
        <article class="border-t border-zinc-800 py-10">
            <p class="font-mono text-sm text-zinc-400 tracking-wider mb-2"><?php echo $date; ?></p>
            <h2 class="text-3xl text-zinc-100 mb-4"><?php echo $title; ?></h2>
            <div class="text-lg whitespace-pre-line text-zinc-300 leading-relaxed"><?php echo $content; ?></div>
        </article>
    <?php endforeach; ?>
</main>

<?php include 'footer.php'; ?>