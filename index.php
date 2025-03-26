<?php
    require_once(__DIR__.'/exo9-tp/Model/pdo.php');

    //Partie 1:
    //1.
    echo "<br>Partie 2:<br>1.";
    $findeleves = $dbPDO->prepare("SELECT nom,prenom FROM etudiants");
    $findeleves->execute();
    $eleves = $findeleves->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($eleves as $eleve) {
        echo '<li>'.$eleve->prenom.' '.$eleve->nom.'</li>';
    }
    echo '</ul>2.';

    //2.
    $findclasses = $dbPDO->prepare("SELECT libelle FROM classes");
    $findclasses->execute();
    $classes = $findclasses->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($classes as $classe) {
        echo '<li>'.$classe->libelle.'</li>';
    }
    echo '</ul>3.';

    //3.
    $findprofs = $dbPDO->prepare("SELECT prenom,nom FROM professeurs");
    $findprofs->execute();
    $profs = $findprofs->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($profs as $prof) {
        echo '<li>'.$prof->prenom.' '.$prof->nom.'</li>';
    }
    echo '</ul>Partie3<br>1. ';

    //Partie 3:
    //1.
    /*
    $newMatiere = $dbPDO->prepare("INSERT INTO matiere(lib) VALUES (:lib)");
    ajoutMatiere = $newMatiere->execute([
        'lib' => "Anglais",
    ]); 
    La requette est mise en commentaire pour éviter de créer une nouvelle requette à chaque refresh de la page*/
    if($ajoutMatiere){
        echo "La matière a été ajoutée !";
    }else{
        echo "La requette a échoué";
    }
    echo "<br>2."

?>