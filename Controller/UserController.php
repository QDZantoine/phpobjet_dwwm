<?php

class UserController extends MyFct
{
    function __construct()
    {
        $action = 'list';
        extract($_GET);
        switch ($action) {

            case 'list':
                if($this->notGranted('ROLE_ADMIN')) $this->throwMessage("Vous n'avez pas <br> le droit d'utiliser cette action!"); 
                    $this->listerUser();
                    break;
            case 'insert':
                $this->insererUser();
                break;
            case 'update':
                if($this->notGranted('ROLE_ADMIN')) $this->throwMessage("Vous n'avez pas <br> le droit d'utiliser cette action!"); 
                    $this->modifierUser($id);
                    break;
            case 'show':
                if($this->notGranted('ROLE_ADMIN')) $this->throwMessage("Vous n'avez pas <br> le droit d'utiliser cette action!"); 
                    $this->afficherUser($id);
                    break;
            case 'delete':
                if($this->notGranted('ROLE_ADMIN')) $this->throwMessage("Vous n'avez pas <br> le droit d'utiliser cette action!"); 
                    $this->deleteUser($id);
                    break;
            case 'save':
                $this->sauvegarderUser($_POST);
                break;
            case 'search':
                $this->searchUser($word);
                break;
                case 'login':
                    if($_POST){  // if($_POST!=[])  ou if(!empty($_POST))
                        $this->valider($_POST);
                    }
                    $this->seConnecter();
                    break;
                case 'logout':
                    $this->seDeconnecter();
                    break;
        }
    }
    //?-------------My functions----------------------------------------------------

    function seDeconnecter(){
        session_destroy();
        header('location:home');
        exit;
    }
    function valider($data){
        $um=new UserManager();
        extract($data);
        $connexion=$um->connexion();
        $sql="select * from user where (username=? or email=?)  and password=?";
        $requete=$connexion->prepare($sql);
        $requete->execute([$username,$username,sha1($password)]);  // le premier $username est pour username=? et le 2ème pour email=?
        $user =$requete->fetch(PDO::FETCH_ASSOC);
        if($user){
            $_SESSION['username']=$user['username'];
            $_SESSION['roles']=$user['roles'];
            $_SESSION['bg_navbar']="bg_green";
            //---Redirection vers l'accueil

            header('location:home');
            exit();
        }else{
            $message="<div class='center'>";
            $message.= "<p>Identifant et ou mot de passe incorrect <p>";
            $message.="<img src='Public/img/giphy.gif' class='img-fluid radius_50' width='25%' >";
            $message.="</div>";

            $variables=[
                'message'=>$message,
            ];
            $file="View/erreur/erreur.html.php";
            $this->generatePage($file,$variables);
        }
    }
    function seConnecter(){
        $file="View/user/formLogin.html.php";
        $this->generatePage($file);

    }

    function deleteUser($id)
    {
        $um = new UserManager();
        $um->deleteById($id);
        header('Location: user');
        exit;
    }


    function searchUser($word)
    {
        $um = new UserManager();
        $columnLikes = ['username'];
        $user = $um->search($columnLikes, $word);
        $variables = [
            'lignes' => $user,
            'nbr' => count($user),
        ];
        $file = "View/user/listUser.html.php";
        $this->generatePage($file, $variables);
    }

    function insererUser()
    {
        //-----User---
        $user = new User();  // Créer un user à vide
        $user->setRoles(['ROLE_USER']);  //  Au moins un user à créer doit avoir 'ROLE_USER' 
        //$user_roles=$user->getRoles(); // Recupartion de roles (json) dans user
        $disabled = "";
        /*------Creation de la page FormUser-----*/
        $this->generateFormUser($user, $disabled);
    }


    function sauvegarderUser($data)
    {
        $um = new UserManager();
        $connexion = $um->connexion();
        $data['roles'] = json_encode($data['roles']); //transform the content of $data['roles'] in json
        $data['password]'] = sha1($data['password']); // crypte the password
        extract($data);
        $id = (int) $id; //transform $id into integer  value
        if ($id !== 0) { //case modification

            $um->update($data, $id);
        } else {
            $um->insert($data);
        }
        //redirection to the page list user
        header('Location:user');
    }


    function modifierUser($id)
    {   //?---------------User ------------
        $um = new UserManager();  //instance the class UserManager
        $user = $um->findById($id); //get the user that match with the id $id. whith UserManager we get an object
        $user_roles = json_decode($user->getRoles());
        //?---------Role-------------------
        $rm = new RoleManager();
        $myRoles = $rm->findAll();
        $roles = [];
        foreach ($myRoles as $role) {

            $libelle = $role['libelle'];
            if (in_array($libelle, $user_roles)) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $roles[] = ['libelle' => $libelle, 'selected' => $selected];
        }
        //!---------prepare parameters-----
        $variables = [

            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'password' => '',
            'email' => $user->getEmail(),
            'roles' => $roles,
            'disabled' => '',
        ];
        $file = "View/user/formUser.html.php";
        $this->generatePage($file, $variables);
    }


    function afficherUser($id)
    {
        $um = new UserManager();  //  Instancier la clasee UserManager
        $user = $um->findById($id);  // Recuperer user corespondant à l'id $id. D'après UserManager on a ici un objet
        $user_roles = $user->getRoles(); // Recupartion de roles (json) dans user
        $user_roles = json_decode($user_roles); //  transformation de $user_roles qui est encore JSON en tableau php
        $user->setRoles($user_roles);   // mettre à jour le roles dans l'objet user en tableau php
        $disabled = "disabled";
        //----Role----------------
        $this->generateFormUser($user, $disabled);
    }


        function generateFormUser($user, $disabled)
        {
            $user_roles = $user->getRoles();
            //MyFct::printr($user_roles);die;
            $rm = new RoleManager();
            $myRoles = $rm->findAll();  // recuperer la totalité de la table role.
            $roles = []; // variale $roles à envoyer vers la page form.html.php
            foreach ($myRoles as $role) {
                //$this->printr($role);die;
                $libelle = $role['libelle'];
                if (in_array($libelle, $user_roles)) {  // si $libelle fait parti de la tables $user_roles
                    $selected = "selected";
                    $checked = "checked";
                } else {
                    $selected = "";
                    $checked = "";
                }
                $roles[] = ['libelle' => $libelle, 'selected' => $selected, 'checked' => $checked];
            }
            //---------prearation variables---
            $variables = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'password' => '',
                'email' => $user->getEmail(),
                'roles' => $roles,
                'disabled' => $disabled,
            ];
            //----Ouverture de la page
            $file = "View/user/formUser.html.php";
            $this->generatePage($file, $variables);
        }





        function listerUser()
        {
            /*-------------Préparation des variables à envoyer à la page--- */
            $um = new UserManager();
            $users = $um->findAll();
            $lignes = [];
            foreach ($users as $value) {
                //$dateCreation=$value['dateCreation']
                $user = new User($value);
                $dateCreation = $user->getCreationDate();
                $dateCreation = new DateTime($dateCreation);
                $dateCreation = $dateCreation->format('d/m/Y');
                //-----Afficher roles en menu deroulant----
                $roles = json_decode($user->getRoles());  ///   tansformer un json en tableau php.  Et json_encode c'est la taransfomation d'un tableai php en json
                $role_title = implode(" - ", $roles); // transformer le tableau $roles en texte avec un separateur " - "
                $user_roles = "<select class='form-select bg_blue'     title='$role_title'  > ";
                foreach ($roles as $role) {
                    $user_roles .= "<option>$role</option>";
                }
                $user_roles .= "</select>";

                //----
                $lignes[] = [
                    'id' => $user->getId(),
                    'username' => $user->getUsername(),
                    'creationDate' => $dateCreation,
                    'roles' => $user_roles,
                ];
            }
            $variables = [
                'lignes' => $lignes,
                'nbr' => count($lignes),
            ];
            //------------Evoi page-------------*/
            $file = "View/user/listUser.html.php";
            $this->generatePage($file, $variables);
        }
    }

