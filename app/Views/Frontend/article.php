<?php

$test = "<br>Je suis un test pour voir si l'affichage fonctionne sur la page article";
echo $test;

?>

<div>
    <h1><?= $post_article->getTitle(); ?></h1>
    <p><?= $post_article->getContent();?></p>
</div>