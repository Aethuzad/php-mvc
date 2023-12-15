<div class="articlos">
    <h1><?= $article->title ?></h1>
    <p><?= $article->content ?></p>
    <p> Crée le : <?= $article->createdAt ?></p>
    <p> Modifié le : <?= $article->modifiedAt ?></p>
    <p><?= "Auteur : " . $user->findById($article->author, 'id')->firstname?>
        <?= " " . $user->findById($article->author, 'id')->lastname?>
    </p>
    <p>
        <a href="<?=$view->path('delete',[$article->id]);?>" class="btn">Supprimer</a>
        <a href="<?=$view->path('edit',[$article->id]);?>" class="btn">Éditer</a>
    </p>
</div>