<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Books</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class=" bg-stone-900">
        <nav class=" mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Books</div>
            <ul class="flex space-x-4 font-bold">
                <li>
                    <a href="/" class="text-lime-500">Explorar</a>
                </li>
                <?php if (auth()): ?>
                <li>
                    <a href="/meus-livros" class="hover:underline">Meus Livros</a>
                </li>
                <?php endif; ?>
            </ul>
            <ul>
                <?php if (auth()): ?>
                    <li>
                        <a href="/logout" class="hover:underline">Olá, <?= auth()->nome ?> </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="/login" class="hover:underline">Fazer Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>



    <main class="mx-auto max-w-screen-lg space-y-6">

        <?php if ($mensagem = flash()->get('mensagem')): ?>
            <div class="border-2 border-green-800 bg-green-900 text-white px-4 py-1 rounded-md text-sm font-bold">
                <?= $mensagem ?>
            </div>
        <?php endif; ?>

        <?php require "views/{$view}.view.php"; ?>

    </main>


</body>

</html>