<?php

require '../app/Manager/QuestionManager.php';

$manager = new QuestionManager();
$questions = $manager->getAllByQCMId($_GET['id']);

require '../template/index-question.tpl.php';
