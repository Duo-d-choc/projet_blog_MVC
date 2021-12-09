<h1>Les articles</h1>
<br>

<?php

foreach ($articles as $article) :
    ?>
    <div>
        <h2><?= $article->getTitle(); ?></h2>
        <p><?= substr($article->getContent(),0,50); ?></p>
        <span>
            <a href="/article/<?= $article->getId(); ?>">Voir plus</a>
        </span>
    </div>
    <br>
<?php endforeach;?>