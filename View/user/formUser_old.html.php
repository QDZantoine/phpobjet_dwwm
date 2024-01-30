<div class="m-auto w80 mt-4">
    <h1 class="titre">SAISIE USER</h1>

    <form action="user&action=save" method="post" enctype="multipart/form-data" >
        <div class="my-2 hidden">
            <label class="lab30" for="id">ID</label>
            <input type="text" class="form-control w50" id="id" name="id" value="<?= $id ?>" <?= $disabled ?>>
        </div>

        <div class="my-2">
            <label class="lab30 obligatoire" for="username">Username</label>
            <input required type="text" class="form-control w50" id="username" name="username" value="<?= $username ?>" <?= $disabled ?>>
        </div>

        <div class="my-2">
            <label class="lab30 " for="photo">Photo</label>
            <img  id="image_view" src="Public/upload/<?=$photo?>"   width="30%"  class="ml30 img-fluid"  alt="">
            <input  class="ml30" type="file"  id="photo" name="photo" value=""  onChange="previewImage(event,image_view)" <?= $disabled ?>>
        </div>




        <div class="my-2">
            <label class="lab30" for="email">E-mail</label>
            <input type="text" class="form-control w50" id="email" name="email" value="<?= $email ?>" <?= $disabled ?>>
        </div>
        <div class="my-2">
            <label class="lab30 obligatoire" for="password">Password</label>
            <input type="password" required class="form-control w50" id="password" name="password" value="<?=$password?>" <?= $disabled ?>>
        </div>
        
        <!-- <div class="my-2">
            <label for="roles" class="lab30">ROLES</label>
            <select class="w70 form-select" id="roles" name="roles[]" multiple <?=$disabled?>>
            <?php foreach($roles as $role) : ?>
                    <option value="<?=$role['libelle']?>" <?=$role['selected']?>><?=$role['libelle']?></option>
                <?php endforeach; ?>
            </select>
        </div> -->
    
            <div class="my-4">
                <label for="" class="lab30">ROLES</label>
                <ul class="ml30 p-0">
                    <?php foreach($roles as $role) : ?>
                    <li><input type="checkbox" name="roles[]" value="<?=$role['libelle']?>" <?=$role['checked']?>>
                        <?=$role['libelle']?> </li>

                    <?php endforeach; ?>
                </ul>
            </div>

        <div class="div-btn">
            <a href="user" class="btn btn-md bg_gray">Retour à la liste</a>
            <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?= $disabled ?>>
            <input type="submit" class="btn btn-md bg_affich" value="Valider" <?= $disabled ?>>
        </div>

    </form>
</div>