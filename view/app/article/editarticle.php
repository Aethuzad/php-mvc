<!-- </?php
$nom = $users->firstname . ' ' . $users->lastname; 
?> -->


<div class="login-box">
    <h2>NOUVEL ARTICLE</h2>
    <form method="post">
        <div class="user-box">
            <h3>TITRE</h3>
            <!-- </?=$formAdd->label('titre')?> -->
            <?=$formAddEdit->input('titre', 'text',$articleEdit->title)?>
            <?=$formAddEdit->error('titre')?>
        </div>
        <div class="user-box">
            <h3>CONTENU</h3>
            <br>
            <!-- </?=$formAdd->label('contenu')?> -->
            <?=$formAddEdit->textarea('contenu',$articleEdit->content)?>
            <?=$formAddEdit->error('contenu')?>
        </div>
        <!-- <div class="user-box">
            <h3>AUTEUR</h3>
            <br>
            </?=$formAddEdit->select('auteur', $users, 'firstname')?>
        </div> -->
        <a href="#" class="button">
        <?= $formAddEdit->submit('submitted', 'MODIFIER') ?>
        </a>
    </form>
</div>
