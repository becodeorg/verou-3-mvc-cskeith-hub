<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <p>
        <?= $article->nextPage()?>
        <a href="index.php?page=articles-show&articleId=<?=  $article->nextPage()  ?>">Next article</a>
    </p>

    <p>
        <?= $article->previousPage()?>   
        <a href="index.php?page=articles-show&articleId=<?=  $article->previousPage()  ?>">Previous article</a>
    </p>

    
</section>

<?php require 'View/includes/footer.php'?>