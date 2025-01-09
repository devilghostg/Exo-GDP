<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Restaurant</title>
    <!-- sources css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     <link rel="stylesheet" href="sources/css/index.css">
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php require_once 'header.php'; ?>

    <div class="container mt-4">
        Bienvenue sur le site des restaurateurs
    </div>
    <!-- Inclusion de Bootstrap JS et Popper.js -->
    <section class="info-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="card-title">Nos Horaires</h3>
                        <div class="card-content">
                            <div class="schedule-item">
                                <span class="days">Lundi - Vendredi</span>
                                <span class="hours">11h30 - 22h30</span>
                            </div>
                            <div class="schedule-item">
                                <span class="days">Samedi - Dimanche</span>
                                <span class="hours">11h30 - 23h30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <h3 class="card-title">Contact</h3>
                        <div class="card-content">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>01 23 45 67 89</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>contact@restaurant.fr</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>123 rue de la Gastronomie, Paris</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="card-title">Spécialités</h3>
                        <div class="card-content">
                            <div class="specialty-item">Cuisine française traditionnelle</div>
                            <div class="specialty-item">Produits frais et locaux</div>
                            <div class="specialty-item">Menu du jour renouvelé</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
