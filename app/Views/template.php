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
            <h2>Notre beau CMS</h2>

            <ul class="nav">
                <li><a href="#" class="nav-link px-2">Home</a></li>
                <li><a href="#" class="nav-link px-2">Mon compte</a></li>
                <li><a href="#" class="nav-link px-2">Admin</a></li>
            </ul>

            <br>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
                <button type="button" class="btn btn-warning">Log out</button>
            </div>

            <br>
        </div>
    </div>
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
