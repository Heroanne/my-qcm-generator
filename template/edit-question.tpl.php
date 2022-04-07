<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    
    <form action="" method="POST">
        <p>Intitulé de la question</p>
        <input type="text" name="title" value="<?= htmlspecialchars($question->getTitle()) ?>" required/>
        <input type="submit" name="submit" value="Enregistrer" />

        <input type="hidden" value=" <?php $_GET['id']; ?> ">

        <select name="id_qcm">
            <?php foreach($qcms as $qcm): ?>
                <option value="<?= $qcm->getId() ?>" <?php if($question->getIdQcm() == $qcm->getId()): ?>selected<?php endif; ?> >
                    <?= $qcm->getTitle() ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br></br>

        <!-- ADD ANSWER -->
        <a href="/new-answer.php?id=<?= $qcm->getId() ?>">Add Answer</a>
        
        <!-- Accueil -->
        <a href="/index.php">Retour</a>
        
    </form>

    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>
