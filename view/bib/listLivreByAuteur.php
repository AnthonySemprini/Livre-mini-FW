<?php 
$livres = $result['data']['livres'];
if(isset($livres)){
?>
    <h1>Liste des livres</h1>

<table style=" border: solid black 2px ; border-collapse: collapse">
    <th style="padding: 10px ; border: solid black 2px">Id de l'livre</th>
    <th style="padding: 10px ; border: solid black 2px">Titre</th>
    <th style="padding: 10px ; border: solid black 2px">Date de parution</th>
<?php
foreach($livres as $livre){
    ?>

    <tr class="livre">
        <td style=" text-align: center ; padding: 10px ; border: solid black 2px"><?=$livre->getId()?></td>
        <td style="text-align: center ; padding: 10px ; border: solid black 2px"><?=$livre->getTitre()?></td>
        <td style="text-align: center ; padding: 10px ; border: solid black 2px"><?=$livre->getDateParution()?></td>
    </tr>

    <?php
}
?>
</table>
<?php
}
?>