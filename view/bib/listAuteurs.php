<?php

$auteurs = $result["data"]['auteurs'];
$array_of_auteur = array();
foreach($auteurs as $auteur){
    $array_of_auteur[] = $auteur;
}
$nbAuteur = count($array_of_auteur);

if(isset($auteurs)){
?>
    <h1>Liste auteurs</h1>
    <p>Il y a <font color="red"><?=$nbAuteur?></font> auteurs dans la liste</p>

    <table style=" border: solid black 2px ; border-collapse: collapse">
    <th style="padding: 10px ; border: solid black 2px">Id de l'livre</th>
    <th style="padding: 10px ; border: solid black 2px">Titre</th>
    <th style="padding: 10px ; border: solid black 2px">Date de naissance</th>
    <th style="padding: 10px ; border: solid black 2px">Genre</th>
<?php
foreach($array_of_auteur as $auteur){
    ?>

    <tr class="auteur">
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><?=$auteur->getId()?></td>
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><a href="index.php?ctrl=bib&action=listLivreByAuteur&id=<?=$auteur->getId()?>"><?=$auteur->getPrenom()." ".$auteur->getNOM()?></a></td>
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><?=$auteur->getDateNaissance()?></td>
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><?=$auteur->getSexe()?></td>
    </tr>
    <?php
}
?>
    </table>
<?php
}
?>