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



    public function insert(string $text, int $id_question, bool $is_the_good) : int
    {
        $sql = "INSERT INTO question (`text`, `id_question`, `is_a_good`) VALUES (:text, :id_question, :is_the_good)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'text' => $text,
            'id_question' => $id_question,
            'is_the_good' => $is_the_good,
        ]);

        return $this->getPdo()->lastInsertId();
    }

    public function update(int $id, string $title, int $id_qcm)
    {
        $sql = "UPDATE question SET title = :title, id_qcm = :id_qcm WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact(`id`,`title`,`id_qcm`));
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM question WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id'));
    }

}