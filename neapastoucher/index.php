<?php

// Un QCM
// - des questions

// Question
// - title
// - des réponses

// Answer 
// - text
// - isTheGoodAnswer = false
require 'QCM.php';
require 'Question.php';
require 'Answer.php';

$qcm = new QCM();

/* QUESTION 1 */

$question1 = new Question("De quelle couleur est le cheval blanc d'Henry IV");

$answer1Q1 = new Answer("Il est bleu");
$answer2Q1 = new Answer("Il est mauve");
$answer3Q1 = new Answer("Il est blanc", true);

$question1->addAnswer($answer1Q1);
$question1->addAnswer($answer2Q1);
$question1->addAnswer($answer3Q1);

$qcm->addQuestion($question1);

/* QUESTION 2 */

$question2 = new Question("Qui est le meilleur formateur de MNS");
$answer1Q2 = new Answer("M. GAMORY", true); // évidemment
$answer2Q2 = new Answer("M. QUIRIN");
$answer3Q2 = new Answer("M. GIRARD");

$question2->addAnswer($answer1Q2);
$question2->addAnswer($answer2Q2);
$question2->addAnswer($answer3Q2);

$qcm->addQuestion($question2);

// TODO : ajoutez les questions que vous souhaitez ...

// On affiche le formulaire du QCM
$qcm->show();


// BONUS : Faire en sorte de vérifier le formulaire après envoie avec la méthode check() du QCM