<?php
// Inclure la connexion à la base de données
require_once 'bd.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire
    $nom_categorie = trim($_POST['nom_categorie']); // Nettoyage des données

    if (!empty($nom_categorie)) {
        try {
            // Requêtes SQL 
            $query = "INSERT INTO categorie (nom) VALUES (:nom)";
            $stmt = $cnx->prepare($query);

            // Paramètres
            $stmt->bindParam(':nom', $nom_categorie, PDO::PARAM_STR);

            // Exécuter la requête
            $stmt->execute();

            // Message de succès
            echo "<p>Catégorie <strong>'$nom_categorie'</strong> ajoutée avec succès !</p>";
        } catch (PDOException $e) {
            // Message d'erreur
            echo "<p>Erreur lors de l'ajout de la catégorie : " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Erreur : le champ est vide. Veuillez entrer un nom de catégorie.</p>";
    }
}
?>
<a href="formulaire.php">Retour au formulaire</a>

