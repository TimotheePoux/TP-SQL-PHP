<?php
    require_once(__DIR__.'/exo9-tp/Model/pdo.php');

    echo "<br>Partie 2:<br>1.";
    $findeleves = $dbPDO->prepare("SELECT nom,prenom FROM etudiants");
    $findeleves->execute();
    $eleves = $findeleves->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($eleves as $eleve) {
        echo '<li>'.$eleve->prenom.' '.$eleve->nom.'</li>';
     }
     echo '</ul>';

     echo "2.";
     $findclasses = $dbPDO->prepare("SELECT libelle FROM classes");
     $findclasses->execute();
     $classes = $findclasses->fetchAll(PDO::FETCH_CLASS);
     echo '<ul>';
    foreach($classes as $classe) {
        echo '<li>'.$classe->libelle.'</li>';
     }
     echo '</ul>';

     echo "3.";
     $findprofs = $dbPDO->prepare("SELECT prenom,nom FROM professeurs");
     $findprofs->execute();
     $profs = $findprofs->fetchAll(PDO::FETCH_CLASS);
     echo '<ul>';
    foreach($profs as $prof) {
        echo '<li>'.$prof->prenom.' '.$prof->nom.'</li>';
     }
     echo '</ul>';
?>