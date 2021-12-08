<?php

$test = "Je suis un test pour voir si l'affichage fonctionne sur la page article";
echo $test;

?>
    <div>
        <h1><?= $article->getTitle(); ?></h1>
        <p><?= $article->getContent();?></p>
    </div>