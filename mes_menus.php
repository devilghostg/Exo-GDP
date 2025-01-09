<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Menus - Restaurant</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once 'header.php'; ?>

    <div class="container mt-4">
        <h1>Gestion des Menus</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mes Catégories</h5>
                        <p class="card-text">Gérez vos catégories de plats</p>
                        <a href="mes_categories.php" class="btn btn-primary">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mes Menus</h5>
                        <p class="card-text">Gérez vos menus</p>
                        <a href="mes_menus.php" class="btn btn-primary">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mes Plats</h5>
                        <p class="card-text">Gérez vos plats</p>
                        <a href="mes_plats.php" class="btn btn-primary">Accéder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclusion de Bootstrap JS et Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
