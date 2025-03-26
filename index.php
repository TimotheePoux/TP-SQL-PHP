<?php
    require_once(__DIR__.'/exo9-tp/Model/pdo.php');

    echo "<br>Partie 2:<br>1.<br>";
    $findeleves = $dbPDO->prepare("SELECT nom,prenom FROM etudiants");
    $findeleves->execute();
    $eleves = $findeleves->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($eleves as $eleve) {
        echo '<li>'.$eleve->prenom.' '.$eleve->nom.'</li>';
     }
     echo '</ul>';
?>