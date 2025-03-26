<?php
    require_once('../Model/pdo.php');
    $a_ajouter = $_POST['libelle'];
    $nouvelleMatiere = $dbPDO->prepare("INSERT INTO matiere(lib) VALUES (:lib)");
    $requete = $nouvelleMatiere->execute([
        'lib' => $a_ajouter,
    ]);
    if($requete){
        echo "<br>La matière ".$a_ajouter." a été ajoutée!";
    }else{
        echo "<br>La requete a échoué";
    }
    echo "<br>"
?>
<a href="http://localhost/PHP_starter/PHP_starter/exo/TP-SQL-PHP/index.php">Clique ici pour revenir sur la page précédente</a>