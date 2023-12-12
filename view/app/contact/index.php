<h1 style="text-align: center;font-size:33px;margin-top: 100px;color: red;">
    <?= $titrePage; ?>
</h1>


<?php

foreach ($persons as $person) {
    ?>
        <h2 style="text-align: center;font-size:16px;"><?= "Nom : " . $person['nom'] . " | " . "Prénom : " . $person['prenom'] . " | " . "Age : " . $person['age'] ?></h2>
    <?php
}
