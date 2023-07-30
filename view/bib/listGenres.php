<?php

$genres = $result['data']["genres"];

if(isset($genres)){

?>
    <h1>Liste de genres</h1>
<?php

foreach($genres as $genre){
?>
    <p><?=$genre->getNom()?></p>
<?php
}
}