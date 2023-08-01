<?php

$livres = $result['data']['livres'];
//$genres = $result['data']['genres'];


$array_of_livres =array();
foreach ($livres as $livre){
    $array_of_livres[] = $livre;
}
$nbLivre = count($array_of_livres);
if(isset($livres)){
    ?>
    <h1>Liste Livres</h1>
    <p>Il y a <font color="red"><?=$nbLivre?></font> livres dans la liste</p>
    
    
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
<br><br>
<form style="width:400px" method="POST" action="index.php?ctrl=bib&action=addLivre">
    <fieldset>
        <legend>Ajout livre</legend>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"><br><br>
        <label for="resume">Resume :</label>
        <input type="text" name="resume"><br><br>
        <label for="dateParution">Date Parution :</label>
        <input type="date" name="dateParution"><br><br>
     <label for="genres">Genre :</label>

        <!--<select name="genres" id="">
            <option value="">Selectionner le genre</option>
            <option value="1">Drame</option>
            <option value="2">Amour</option>
            <option value="3">Policier</option>
            <option value="4">Aventure</option>
            <option value="5">Horreur</option>
            <option value="6">Historique</option>

        </select><br><br>-->

    <input type="submit" name="submit" value="Envoyer">
    </fieldset>
</form>




