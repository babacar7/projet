<?php
if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Login']) && isset($_POST['Password']))
{
    extract($_POST);
    try{
        $PDO_option[PDO::ETTR_ERRMODE]=PDO::ERRMODE_EXEPTION;
        $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', 'babadent888',
        $req=>$bdd->prepare(INSERT INTO user(iduser,nom,prenom,login,password)VALUES(null,:nom,:prenom,:login,:password,))
        $req=>execute(array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'login'=>$login,
    'password'=>$password
));
    }
    catch(Exception $e)
{ 
  echo $e->getMessage();
}
    
?>