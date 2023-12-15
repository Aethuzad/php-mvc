<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="cards">
        <h1>Articles</h1>
        <p>Nombre d'articles : <?= $count?></p>
        <div class="card-body">
            <?php
            foreach ($articles as $article) {
                ?>
                <a href="<?= $view->path('article', [$article->id]); ?>">
                <div class="card">
                    <p><?= "Titre : " . $article->title?></p>
                    <p><?= "Contenu : " . $article->content?></p>
                    <p><?= "Date : " . $article->createdAt?></p>
                    <!-- <p></?= "Auteur : " . $article->author?></p> -->
                    <p>
                        <?= "Auteur : " . $user->findById($article->author, 'id')->firstname?>
                        <?= " " . $user->findById($article->author, 'id')->lastname?>
                    </p>
                    <hr>
                </div>
                </a>
                <?php
            }
            ?>
        </div>
    </div>

</body>
</html>
