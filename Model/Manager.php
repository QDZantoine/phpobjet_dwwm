<?php
require_once("Config/parametre.php");

class Manager
{
    function searchTable($table,$columnLikes,$word){

        $connexion=$this->connexion();
        $condition="";
        $values=[];
        foreach($columnLikes as $value){
            $condition.=($condition=="")? " $value like ? " : " or $value like ? ";
            $values[]="%$word%";
        }
        $sql="select * from $table where $condition";
        //---------Testing------
        // $MyFct=new MyFct();
        //  echo $sql;
        //  $MyFct->printr($values);
        //  die;
        //-----------------------
        $request=$connexion->prepare($sql);
        $request->execute($values);
        $result=$request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateTable($table,$data,$id){
        $connexion=$this->connexion();
        $setColumn="";
        $values=[];
        foreach($data as $key=>$value){
            if($key!='id'){
                $setColumn.=($setColumn=="")?"$key=?":",$key=?";
                /*--
                if($setColumn==""){
                    $setColumn.="$key=?";
                }else{
                    $setColumn.=",$key=?";
                }
                */
                $values[]=$value;
            }
            
        }
        $sql="update $table set $setColumn where id=?";
        $values[]=$id;
        //---------test---
        // $MyFct=new MyFct();
        // echo "<h1>$sql</h1>";
        // $MyFct->printr($values);
        // die;
        //------------------
        $request=$connexion->prepare($sql);
        $request->execute($values);

    }

    function insertTable($table, $data)
    {
        //-----init the variables-----
        $connexion = $this->connexion();
        $column = "";
        $pi = "";
        $values = [];
        //-------generate the sql request-----
        foreach ($data as $key => $value) {
            if ($key != 'id') {
                if ($column == "") {
                    $column .= $key;
                    $pi .= "?";
                } else {
                    $column .= ",$key";
                    $pi .= ",?";
                }
                $values[] = $value;
            }
        }




        $sql = "insert into $table ($column) values ($pi)";
        //------test------------------
        // $MyFct = new MyFct();
        // echo $sql;
        // $MyFct->printr($values);
        // die;
        //-----------------------------

        $request = $connexion->prepare($sql);
        $request->execute($values);
    }


    function getDescribeTable($table)
    {
        $connexion = $this->connexion();
        $sql = "desc $table";  // requete pour affichage de la structure la table collaborateur
        $requete = $connexion->prepare($sql);
        $requete->execute();
        $colonnes = $requete->fetchAll(PDO::FETCH_COLUMN); // recuperation de tous les noms de colonne de la table collaborateur
        /* sans avoir une bonne methode on devait initialiser la variavle tableau en :
    $variables=[
        'id'=>'',
        'civilite'=>'',
        'nom'=>'',
    ];*/
        $variables = [];
        foreach ($colonnes as $valeur) {
            $variables[$valeur] = '';
        }
        return $variables;
    }
    function connexion($host = HOST, $dbname = DBNAME, $user = USER, $password = PASSWORD)
    {
        $dns = "mysql:host=$host;dbname=$dbname;charset=utf8";
        try {
            $connexion = new PDO($dns, $user, $password);
        } catch (Exception $e) {
            echo "<h1> Connexion impossible ! Verifiez les paramètres !</h1>";
            die;
        }
        return $connexion;
    }
    // function $this->connexion(){
    //     $dns="mysql:host=localhost;dbname=dwwm;charset=utf8";
    //     try{
    //         $connexion=new PDO($dns,'admin','4321');
    //     }catch(Exception $e){
    //         echo "<h1> Connexion impossible ! Verifiez les paramètres !</h1>";
    //         die;
    //     }
    //     return $connexion;
    // }
    function findByIdTable($nomTable, $id)
    {
        $connexion = $this->connexion();  // valeur retouner par la fontion $this->connexion() du fichier myFct.
        $sql = "select * from $nomTable where id=?";  // Ecrire la requete sql correspondante
        $requete = $connexion->prepare($sql);   //  Dire à php de oreparer la requete sql
        $requete->execute([$id]);  // Executer la requete avec id= $id
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);  // Mettre dans $article l'article trouvé
        return $resultat;
    }

    function deleteByIdTable($nomTable, $id)
    {
        $connexion = $this->connexion();
        $sql = "delete from $nomTable where id=?";
        $requete = $connexion->prepare($sql);
        $requete->execute([$id]);
        return true;
    }
    function listTable($nomTable)
    {
        $sql = "select * from $nomTable";
        $connexion = $this->connexion();
        $requete = $connexion->prepare($sql);
        $requete->execute();
        $tables = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $tables;
    }
}
