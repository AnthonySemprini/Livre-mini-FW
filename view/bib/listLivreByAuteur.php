<?php 
$livres = $result['data']['livres'];
$array_of_livres = array();
foreach($livres as $livre){
    $array_of_livres[] = $livre;
}
$nbLivre = count($array_of_livres);
if(isset($livres)){
?>
    <h1>Liste livres</h1>
    <p>Il y a <?=$nbLivre?> livres dans la liste</p>

<table style=" border: solid black 2px ; border-collapse: collapse">
    <th style="padding: 10px ; border: solid black 2px">Id livre</th>
    <th style="padding: 10px ; border: solid black 2px">Titre</th>
    <th style="padding: 10px ; border: solid black 2px">Date de parution</th>
<?php
foreach($array_of_livres as $livre){
    ?>

    <tr class="livre">
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><?=$livre->getId()?></td>
        <td style="text-align: center ; padding: 10px ; border: solid black 2px"><a href="index.php?ctrl=bib&action=detailAuteur&id=<?=$livre->getId()?>"><?=$livre->getTitre()?></a></td>
        <td style="text-align: center ; padding: 10px ; border: solid black 2px"><?=$livre->getDateParution()?></td>
    </tr>

    <?php
}
?>
</table>
<?php
}
?>