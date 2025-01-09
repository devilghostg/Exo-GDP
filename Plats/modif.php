<?php
    require_once "../bd.php";
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $idCategorie = $_POST["idCategorie"];

    $sql = "UPDATE plat SET nom = ':nom', description = ':description', prix = :prix, idCategorie = :idCategorie WHERE id = :id";
    $stmt = $cnx->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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

<?php
    require_once "bd.php";
    $id = $_GET['idPlat'];
    $sql = "SELECT * FROM Plat WHERE id = :id";
    $stmt = $cnx->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $ligne=$result->fetch();
?>