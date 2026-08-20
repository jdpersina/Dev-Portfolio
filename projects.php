<?php include 'header.php'; ?>

<main class="flex-1 max-w-5xl mx-auto px-6 py-16 w-full">
    <h1 class="text-3xl font-light text-zinc-100 mb-12">Projects</h1>

    <div class="grid gap-6">
    <article class="border border-zinc-800 rounded-lg p-6 hover:border-zinc-600 transition-colors">
    <h2 class="text-2xl text-zinc-100 mb-2">Quark's Bar</h2>
    <p class="text-zinc-400 mb-4">
        A MySQL database-backed inventory and customer ledger, built with javascript and node.js in the spirit of Quark himself — tracking every bottle of Bloodwine and every patron's tab with the kind of watchful, profit-driven precision the Ferengi Rules of Acquisition would approve of.
    </p>
    <div class="flex gap-4 font-mono text-sm">
        <a href="https://github.com/jdpersina/mysql_database_webapp" target="_blank" class="text-zinc-400 hover:text-zinc-100 transition-colors">
            GitHub →
        </a>
        <span class="text-zinc-600">Live site coming soon</span>
    </div>
</article>
    </div>
</main>

<?php include 'footer.php'; ?>