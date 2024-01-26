<div class="m-auto w80 mt-4">
    <h1 class="titre">SAISIE CLIENT</h1>

    <form action="article&action=save" method="post">
        <div class="my-2 hidden">
            <label class="lab30" for="id">ID</label>
            <input type="text" class="form-input w20" id="id" name="id" value="<?= $id ?>" <?= $disabled ?>>
        </div>

        <div class="my-2">
            <label class="lab30" for="numArticle">CODE</label>
            <input type="text" class="form-input w20" id="numClient" name="numClient" value="<?= $numClient ?>" <?= $disabled ?>>
        </div>
        <div class="my-2">
            <label class="lab30" for="designation">NOM</label>
            <input type="text" class="form-input w20" id="nomClient" name="nomClient" value="<?= $nomClient ?>" <?= $disabled ?>>
        </div>
        <div class="my-2">
            <label class="lab30" for="adresseClient">ADRESSE</label>
            <input type="text" class="form-input w20" id="adresseClient" name="adresseClient" value="<?= $adresseClient ?>" <?= $disabled ?>>
        </div>
        <div class="div-btn">
            <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?= $disabled ?>>
            <input type="submit" class="btn btn-md btn-danger" value="Valider" <?= $disabled ?>>
        </div>

    </form>
</div>