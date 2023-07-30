<?php

$genres = $result['data']["genres"];

if(isset($genres)){

?>
    <h1>Liste de genres</h1>
<?php

foreach($genres as $genre){
?>
    <p><a href="index.php?ctrl=bib&action=listLivreByGenre&id=<?=$genre->getId()?>"><?=$genre->getNom()?></a></p>
<?php
}
}