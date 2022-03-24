<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <?php foreach($this->questions as $questionKey => $question): ?>
        <p><?= $question->getTitle() ?> ?</p>
        <ul style="list-style: none">
        <?php foreach($question->getAnswers() as $answerKey => $answer): ?>
            <li>
                <?php $color = !empty($_POST) ? ($answer->getIsTheGoodAnswer() ? 'green' : 'red') : 'black' ?>
                <label style="color: <?= $color ?>">
                    <?php $isChecked = !empty($_POST) ? $answerKey == $_POST['answers'][$questionKey] : false; ?>
                    <input 
                        type="radio" 
                        name="answers[<?= $questionKey ?>]" 
                        value="<?= $answerKey ?>" 
                        <?= ($isChecked ? 'checked' : '') ?>
                        <?= !empty($_POST) ? 'disabled' : '' ?>
                    /> 
                    <?= $answer->getText() ?>
                </label>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php 
        $checkedAnswerKey = $_POST['answers'][$questionKey];
        $result = $question->getAnswers()[$checkedAnswerKey]->getIsTheGoodAnswer() ? 'Bien ouej maggle' : 'Décevant...'; 
        ?>
        <p><strong><?= $result ?></strong></p>
    <?php endforeach; ?>

    <?php if(empty($_POST)): ?>
    <input type="submit" value="Envoyer" />
    <?php endif; ?>

    </form>
</body>
</html>