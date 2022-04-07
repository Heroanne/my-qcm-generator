<?php

$message = "";

if(isset($_POST['submit']))
{
    if(!empty($_POST['text']))
    {
        require '../app/Manager/AnswerManager.php';
        $manager = new AnswerManager();
        $id_answer = $manager->insert( $_POST['text'], $_POST['id'], $_POST['is_the_good'] );

        if($id_answer)
        {
            header('Location: /'); die;
        }
        else
        {
            $message = "Une erreur s'est produite lors de l'enregistrement";
        }
    }
    else
    {
        $message = "Un text est obligatoire";
    }
}


require '../template/new-answer.tpl.php';
