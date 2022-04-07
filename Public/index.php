<?php

require '../app/Manager/QcmManager.php';

$qcmManager = new QcmManager();
$qcms = $qcmManager->getAll();

require '../template/index.tpl.php';

?>

<!--
    Sur Page 
    - Ajouter Réponse 
    - Modif Titre QCM / 
    - Modif titre Question / Sup question
    - Modif titre Réponse / Sup Réponse
-->