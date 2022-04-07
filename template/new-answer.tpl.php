<?php require '../template/partials/_top.tpl.php'; ?>

<div class="container">


    <form action="" method="POST">

        <a href="/index.php">⬅️ Retour</a>
        
        <br></br>

        <p>Intitulé de la reponse</p>

        <!-- Text de la réponse -->
        <input type="text" name="text" required />

        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <br></br>

        <!-- Bouton ratio is_the_good -->
        <div class="form-check">
            <input class="form-check-input" type="radio" id="True" name="is_the_good" value="1" required>
            <label for="True">C'est la bonne réponse</label>
        </div>

        <div class="form-check">
            <input class="form-check-input"type="radio" id="False" name="is_the_good" value="0">
            <label for="False">C'est la mauvaise réponse</label>
        </div>

        <br></br>

        <!-- Bouton Enregistrer -->
        <input class="btn btn-outline-success" type="submit" name="submit" value="Enregistrer" />
    </form>




    


    <?php if (!empty($message)) : ?>
        <div class="alert">
            <?= $message ?>
        </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>