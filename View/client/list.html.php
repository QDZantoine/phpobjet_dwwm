<div class="w90 auto mt-4">
    <h1 class="titre center">LISTE CLIENT</h1>
    <table class="w100 fw-bold">
        <thead id="thead_art">
            <tr class="bg_gray">
                <th class="w20">ID</th>
                <th class="w20">CODE</th>
                <th class="w30">NOM </th>
                <th class="w20">ADRESSE </th>
                <th class="w20">ACTION</th>
            </tr>

        </thead>
        <tbody id="tbody_client">
            <?php foreach ($lignes as $ligne) : ?>
                <tr>
                    <td><?= $ligne['id'] ?></td>
                    <td><?= $ligne['numClient'] ?></td>
                    <td><?= $ligne['nomClient'] ?></td>
                    <td><?= $ligne['adresseClient'] ?></td>
                    <td class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-success me-2">Afficher</button>
                        <button class="btn btn-sm btn-danger me-2">Supprimmer</button>
                        <button class="btn btn-sm btn-primary me-2">Modifier</button>
                    </td>

                </tr>


            <?php endforeach; ?>

        </tbody>
        <tfoot id="tfoot_client">
            <tr>
                <th colspan="5" id="nbre_client" class="center">Nombre clients : <?= $nbre ?></th>
            </tr>

        </tfoot>
    </table>
</div>