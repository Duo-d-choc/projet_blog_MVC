<h1>Les articles</h1>

<?php

$test = "Je suis un test pour voir si l'affichage fonctionne sur la homepage";
echo $test;

if ($article == false) {
    echo "<br><br>Il n'y a pas encore d'articles";
}else{
    foreach ($vars as $article) :
        ?>
        <div>
            <h2><?= $article->getTitle(); ?></h2>
            <p><?= substr($article->getContent(),0,50); ?></p>
            <a href="/article/<?= $article->getID(); ?>"Voir plus</a>
        </div>
    <?php endforeach;
}?>