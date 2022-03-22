<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <p>
        <?= $article->nextPage($articleId)?>
        <a href="index.php?page=articles-show&articleId=<?=  $article->id   ?>">Next article</a>
    </p>

    <p>
        <?= $article->previousPage($articleId)?>   
        <a href="index.php?page=articles-show&articleId=<?=  $article->id  ?>">Previous article</a>
    </p>

    
</section>

<?php require 'View/includes/footer.php'?>