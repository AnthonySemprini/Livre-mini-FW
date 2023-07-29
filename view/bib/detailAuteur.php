<?php

$auteurs = $result["data"]['auteurs'];

if(isset($auteurs)){
?>
    <h1>Detail auteur</h1>
<?php
    foreach($auteurs as $auteur){
?>

<p><?=$auteur->getPrenom()." ".$auteur->getNOM()?></p>
        <p><?=$auteur->getDateNaissance()?></p>
        <p><?=$auteur->getSexe()?></p>

<?php
    }
}