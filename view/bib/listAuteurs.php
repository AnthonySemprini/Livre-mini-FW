<?php

$auteurs = $result["data"]['auteurs'];
//var_dump("ok");die;
if(isset($auteurs)){
?>
    <h1>Liste des auteurs</h1>
    <table style=" border: solid black 2px ; border-collapse: collapse">
    <th style="padding: 10px ; border: solid black 2px">Id de l'livre</th>
    <th style="padding: 10px ; border: solid black 2px">Titre</th>
    <th style="padding: 10px ; border: solid black 2px">Date de naissance</th>
    <th style="padding: 10px ; border: solid black 2px">Genre</th>
<?php
foreach($auteurs as $auteur){
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