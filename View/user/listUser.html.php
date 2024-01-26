<div class="w90 auto mt-4">
    <div class="div-btn my-2">
        <a href="user&action=insert" class="btn btn-md bg_affich">Nouveau User</a>
        <a href="javascript:window.print()" class="btn btn-md bg_gray_button center   ">imprimmer</a>
    </div>
    <h1 class="titre center">LISTE USERS</h1>
    <table class="w100 fw-bold">
        <thead id="thead_user">
            <tr class="bg_gray">
                <th class="w5 center hidden">ID</th>
                <th class="w15 text-start">Username</th>
                <th class="w20 text-start">Date Creation</th>
                <th class="w20 text-start">Roles</th>
                <th class="w20 center">Actions</th>
            </tr>

        </thead>
        <tbody id="tbody_user">
            <?php foreach ($lignes as $line) : ?>
                <tr>
                    <td class="hidden"><?= $line['id'] ?></td>
                    <td><?= $line['username'] ?></td>
                    <td><?= $line['creationDate'] ?></td>
                    <td class="py-2" ><?= $line['roles'] ?></td>
                    <td class="d-flex justify-content-between py-3 mx-4">
                        <a href="user&action=show&id=<?= $line['id'] ?>" class="btn btn-sm  bg_affich  me-2">Afficher</a>
                        <a href="user&action=update&id=<?= $line['id'] ?>" class="btn btn-sm  bg_modif  me-2">Modifier</a>
                        <button onclick="supprimer(<?= $line['id'] ?>)" class="btn btn-sm  bg_suppr  me-2">Supprimmer</button>
                    </td>

                </tr>


            <?php endforeach; ?>

        </tbody>
        <tfoot id="tfoot_user">
            <tr>
                <th colspan="5" id="nbre_user" class="center">Nombre users : <?= $nbr ?></th>
            </tr>

        </tfoot>
    </table>
</div>
<script>
    function search() {

        document.location.href = "user&action=search&word=" + word.value;

    }

    function touche(event) {
        if (event.keyCode == 13) {
            search();

        }

    }

    function supprimer(id) {
        const response = confirm("Etes vous sur de vouloir supprimer ce user ?");
        if (response) {
            document.location.href = "user&action=delete&id=" + id;
        }
    }
</script>