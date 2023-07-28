<?php

$auteurs = $result['data']['auteurs'];
var_dump("ok");die;
if(isset($auteurs)){
?>
    <h1>Liste des auteurs</h1>

<?php
foreach($auteurs as $auteur){
    ?>

    <div class="auteur">
        <p>Id de l'auteur:<?=$auteur->getId()?></p>
        <p>Nom et prénom :<?=$auteur->getPrenom(),$auteur->getNOM()?></p>
        <p></p>
        <p></p>
    </div>
    <?php
}
}
?>