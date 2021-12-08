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
<body>


<header>
    <div>
        <div>
            <a href="/">
                <!-- Mettre le logo que l'on veut -->
                <img src="https://img2.freepng.fr/20180407/xse/kisspng-symbol-computer-icons-blogger-logo-blog-5ac91fc750c101.6716503415231303113308.jpg">
            </a>

            <ul class="nav">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
                <button type="button" class="btn btn-warning">Log out</button>
            </div>
        </div>
    </div>
</header>

<?php if (\App\Fram\Utils\Flash::hasFlash('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= \App\Fram\Utils\Flash::getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php if (\App\Fram\Utils\Flash::hasFlash('alert')): ?>
    <div class="alert alert-danger" role="alert">
        <?= \App\Fram\Utils\Flash::getFlash('alert'); ?>
    </div>
<?php endif; ?>

<div class="container">
    <?= $content; ?>
</div>

</body>
</html>
