<?php require '../template/partials/_top.tpl.php'; ?>

<?php require '../Manager/AnswerManager.php'; ?>
<?php require '../Manager/QcmManager.php'; ?>
<?php require '../Manager/QuestionManager.php'; ?>





<div class="container">
    <h1>Mes QCMs</h1>

    <a href="">Nouveau</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qcms as $qcm): ?>
            <tr>
                <td><?= $qcm->getId() ?></td>
                <td><?= $qcm->getTitle() ?></td>
                <td>
                    <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>



<?php require '../template/partials/_bottom.tpl.php'; ?>
