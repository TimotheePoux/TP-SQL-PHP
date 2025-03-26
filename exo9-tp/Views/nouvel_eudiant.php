<?php
    require_once('../Model/pdo.php');
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nouvelEtudiant = $dbPDO->prepare("INSERT INTO etudiants(nom,prenom,classe_id) VALUES (:nom,:prenom,:classe_id)");
    $requete = $nouvelEtudiant->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'classe_id' => 1,
    ]);
    if($requete){
        echo "<br>L'étudiant ".$prenom." ".$nom." a été ajoutée!";
    }else{
        echo "<br>La requete a échoué";
    }
    echo "<br>"
?>
<a href="http://localhost/PHP_starter/PHP_starter/exo/TP-SQL-PHP/index.php">Clique ici pour revenir sur la page précédente</a>