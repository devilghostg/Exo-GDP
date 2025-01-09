<?php
    require_once "../bd.php";
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $idCategorie = $_POST["idCategorie"];

    $sql = "INSERT INTO plat (nom, description, prix, idCategorie) VALUES (':nom', ':description', :prix, :idCategorie)";
    $stmt = $cnx->prepare($sql);

    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);

    if($stmt->execute()){
        header("Location: ../");
    } else {
        echo "Erreur lors de la modification";
    }
?>