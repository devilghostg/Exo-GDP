<?php
// Inclure la connexion à la base de données
require_once 'bd.php';

// Récupérer les catégories de la base de données
$query = "SELECT id, nom FROM categorie";
$stmt = $cnx->prepare($query);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Nos Catégories</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
</head>
<body>
<header>
    <?php require_once 'header.php'; ?>
</header>
<main class="container mt-5">
    <h1>Nos Catégories</h1>
    <form action="ajout_categorie.php" method="POST" class="mb-3">
        <div class="mb-3">
            <label for="nom_categorie" class="form-label">Entrer un nom</label>
            <input type="text" name="nom_categorie" class="form-control" id="nom_categorie" required>
        </div>
        <button type="submit" class="btn btn-secondary">Enregistrer</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $categorie): ?>
            <tr>
                <td><?= htmlspecialchars($categorie['nom']); ?></td>
                <td>
                    <!-- Modifier une catégorie -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $categorie['id']; ?>">
                        Modifier
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal<?= $categorie['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?= $categorie['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel<?= $categorie['id']; ?>">Modifier la catégorie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="modifier_categorie.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $categorie['id']; ?>">
                                        <div class="mb-3">
                                            <label for="nom_<?= $categorie['id']; ?>" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="nom_<?= $categorie['id']; ?>" name="nom" value="<?= htmlspecialchars($categorie['nom']); ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Supprimer une catégorie -->
                    <form action="supprimer_categorie.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?= $categorie['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<footer>
    <!-- Footer -->
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
></script>
</body>
</html>
