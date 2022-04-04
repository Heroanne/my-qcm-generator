<?php

require '../app/Entity/Answer.php';
require_once '../app/Manager/Manager.php';

class AnswerManager extends Manager
{

    public function getAll()
    {
        $sql = 'SELECT * FROM answer';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($answers as $answer)
        {
            $result[] = (new QCM())->hydrate($answer);
        }

        return $result;
    }

    public function insert(string $text) : int
    {
        $sql = "INSERT INTO qcm (title) VALUES (:text)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'text' => $text,
        ]);

        return $this->getPdo()->lastInsertId();
    }

}