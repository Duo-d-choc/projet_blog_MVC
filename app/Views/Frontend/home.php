<h1>Les articles</h1>

<?php

$test = "Je suis un test pour voir si l'affichage fonctionne sur la homepage";
echo $test;

foreach ($vars as $article) :
    ?>
    <div>
        <h2><?= $article->getTitle(); ?></h2>
        <p><?= substr($article->getContent(),0,50); ?></p>
        <a href="/article/<?= $article->getID(); ?>"Voir plus</a>
    </div>
<?php endforeach; ?>
