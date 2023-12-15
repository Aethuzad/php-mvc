<!-- </?php
$nom = $users->firstname . ' ' . $users->lastname; 
?> -->


<div class="login-box">
    <h2>NOUVEL ARTICLE</h2>
    <form method="post">
        <div class="user-box">
            <h3>TITRE</h3>
            <!-- </?=$formAdd->label('titre')?> -->
            <?=$formAdd->input('titre')?>
            <?=$formAdd->error('titre')?>
        </div>
        <div class="user-box">
            <h3>CONTENU</h3>
            <br>
            <!-- </?=$formAdd->label('contenu')?> -->
            <?=$formAdd->textarea('contenu')?>
            <?=$formAdd->error('contenu')?>
        </div>
        <div class="user-box">
            <h3>AUTEUR</h3>
            <br>
            <?=$formAdd->select('auteur', $users, 'firstname')?>
        </div>
        <a href="#" class="button">
        <?= $formAdd->submit('submitted', 'AJOUTER') ?>
        </a>
    </form>
</div>
