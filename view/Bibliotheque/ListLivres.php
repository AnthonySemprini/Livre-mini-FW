<?php

$livres = $result['data']['livres'];
var_dump("ok");die;
if(isset($livres)){
?>
    <h1>Liste des livres</h1>

<?php
foreach($livres as $livre){
    ?>

    <div class="livre">
        <p>Id de l'livre:<?=$livre->getId()?></p>
        <p>Nom et prénom :<?=$livre->getTitre()?></p>
       
    </div>
    <?php
}
}
?>