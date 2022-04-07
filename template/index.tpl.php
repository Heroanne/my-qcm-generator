<?php require '../template/partials/_top.tpl.php'; ?>


<div class="position-relative">
    <h1 class="position-relative top-0 start-50">Mes QCMs</h1>

    <br>
    <form action="/new-qcm.php">
    <button class="btn btn-outline-success" type="submit">📝 Nouveau QCM</button>
    <br>

    <table class="table">
        <br>
        <thead class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($qcms as $qcm) : ?>
                <tr>
                    <td><?= $qcm->getId() ?></td>
                    <td><?= $qcm->getTitle() ?></td>
                    <td>
                        <a href="/index-question.php?id=<?= $qcm->getId() ?>">Modifier</a>
                        <form action="/delete-qcm.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                            <input type="hidden" name="id" value="<?= $qcm->getId() ?>" />
                            <input class="btn btn-outline-danger" type="submit" name="submit" value="Supprimer" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>