<?php
    require_once('../Model/pdo.php');
    $idEtu = $_GET['id'];
    $updateEleve = $dbPDO->prepare("SELECT * FROM etudiants WHERE id=:id");
    $updateEleve->execute([
        'id' => $idEtu,
    ]);
    $eleveModifie = $updateEleve->fetchAll(PDO::FETCH_CLASS);
    foreach($eleveModifie as $eleve) {
        $nom = $eleve->nom;
        $prenom = $eleve->prenom;
    }
?>
<form method="post">
    <label>Nom: </label>
    <input type="text" name="newNom" value="<?php echo $nom;?>"/>
    <label>Prénom: </label>
    <input type="text" name="newPrenom" value="<?php echo $prenom;?>"/>
    <input type="submit" value="Valider" />
</form>
<?php
    $updateEleve = $dbPDO->prepare("Update etudiants SET prenom = :prenom, nom = :nom, classe_id = :classe_id WHERE id = :id");
    $requete = $updateEleve->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'classe_id' => 1,
        'id' => $idEtu,
    ]);
?>
<a href="http://localhost/PHP_starter/PHP_starter/exo/TP-SQL-PHP/index.php">Clique ici pour revenir sur la page précédente</a>