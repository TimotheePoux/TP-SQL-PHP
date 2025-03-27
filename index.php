<?php
    require_once(__DIR__.'/exo9-tp/Model/pdo.php');

    //Partie 1:
    //1.
    echo "<br>Partie 2:<br>1.";
    $findeleves = $dbPDO->prepare("SELECT id,nom,prenom FROM etudiants");
    $findeleves->execute();
    $eleves = $findeleves->fetchAll(PDO::FETCH_CLASS);
    echo '<ul>';
    foreach($eleves as $eleve) {
        echo '<li>'.$eleve->prenom.' '.$eleve->nom.' <a href="http://localhost/PHP_starter\PHP_starter\exo\TP-SQL-PHP\exo9-tp\Views/modif_etudiant.php?id='.$eleve->id.'">Modidier</a>';
    }
    echo '</ul>'
?>
2.
<?php
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
        echo "La requete a échoué";
    }
    echo "<br>2."
    //2.
?>
<form action="exo9-tp/Views/nouvelle_matiere.php" method="post">
    <label>Nom de la matière: </label>
    <input type="text" name="libelle" />
    <input type="submit" value="Valider" />
</form>
3.
<form action="exo9-tp/Views/nouvel_eudiant.php" method="post">
    <label>Nom: </label>
    <input type="text" name="nom" />
    <label>Prénom: </label>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</form>
<?php
    //Partie 4:
    //1.
    echo "<br>Partie 4:<br>1.<br>";
    $updateEleve = $dbPDO->prepare("Update etudiants SET prenom = :prenom, nom = :nom, classe_id = :classe_id WHERE id = :id");
    $eleveModifie = $updateEleve->execute([
        'nom' => "Pinaise",
        'prenom' => "Homer",
        'classe_id' => 4,
        'id' => 3,
    ]); 
    if($eleveModifie){
        echo "L'étudiant a été modifié !";
    }else{
        echo "La requete a échoué";
    }
?>