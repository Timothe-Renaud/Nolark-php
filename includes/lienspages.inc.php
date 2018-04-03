<?php
$pages = array("route.html", "cross.html", "piste.html","enfants.html", "team.html","nous-contacter.html");
$noms = array(" Route ", " Cross ", " Piste ", " Enfants ", " La team "," Nous contacter ");
$nbLiens= count($pages);
for ($i=0;$i<$nbLiens;$i++) {
echo'<li><a href="pages/',$pages[$i],'" >',$noms[$i],'</a></li>';
}
?>