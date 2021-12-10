<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>
<body class="h-full">


<header>
    <nav class="bg-white shadow-lg mb-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="/" class="flex items-center py-4 px-2">
                            <img src="assets/img/blogger-logotype.png" alt="Logo" class="h-8 w-8 mr-2">
                            <span class="font-semibold text-gray-500 text-lg">Blog</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/" class="py-4 px-2 text-purple-500 border-b-4 border-purple-500 font-semibold ">Accueil</a>
                        <a href="/create_article" class="py-4 px-2 text-gray-500 font-semibold hover:text-purple-500 transition duration-300">Nouveau post</a>
                        <a href="/admin" class="py-4 px-2 text-gray-500 font-semibold hover:text-purple-500 transition duration-300">Admin</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="/login" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-purple-500 hover:text-white transition duration-300">Se connecter</a>
                    <a href="/create_account" class="py-2 px-2 font-medium text-white bg-purple-500 rounded hover:bg-purple-400 transition duration-300">Créer un compte</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-purple-500 "
                             x-show="!showMenu"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="/" class="block text-sm px-2 py-4 text-white bg-purple-500 font-semibold">Accueil</a></li>
                <li><a href="/create_article" class="block text-sm px-2 py-4 hover:text-white hover:bg-purple-500 transition duration-300">Nouveau post</a></li>
                <li><a href="/admin" class="block text-sm px-2 py-4 hover:text-white hover:bg-purple-500 transition duration-300">Admin</a></li>
                <li><a href="/login" class="block text-sm px-2 py-4 hover:text-white hover:bg-purple-500 transition duration-300">Se connecter</a></li>
                <li><a href="/create_account" class="block text-sm px-2 py-4 hover:text-white hover:bg-purple-500 transition duration-300">Créer un compte</a></li>
            </ul>
        </div>
    </nav>
</header>

<div>
    <?= $content; ?>
</div>
<!--
<?//php if (\App\Fram\Utils\Flash::hasFlash('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= \App\Fram\Utils\Flash::getFlash('success'); ?>
    </div>
<?//php endif; ?>

<?//php if (\App\Fram\Utils\Flash::hasFlash('alert')): ?>
    <div class="alert alert-danger" role="alert">
        <?= \App\Fram\Utils\Flash::getFlash('alert'); ?>
    </div>
<?//php endif; ?>
-->

</body>
</html>
