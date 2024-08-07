<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FibroEnergie - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="d-flex align-items-center justify-content-between py-3 bg-light shadow-sm">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="images/logo.png" class="me-2" alt="Logo" style="max-height: 80px; padding: 10px;">
        </a>
        <ul class="nav nav-pills mx-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="projects.html" class="nav-link">Projets</a></li>
            <li class="nav-item"><a href="news.html" class="nav-link">Actualités</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link active" aria-current="page">Contact</a></li>
        </ul>
    </nav>

    <!-- Section principale -->
    <main class="container my-5">
        <section class="bg-white p-5 shadow-sm rounded">
            <h2 class="mb-4">Contactez-nous</h2>
            <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter :</p>
            <form action="traitement.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message :</label>
                    <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </section>
    </main>

    <!-- Pied de page -->
    <footer class="bg-dark py-3 text-center">
        <p>&copy; 2024 FibroEnergie. Tous droits réservés.</p>
    </footer>
</body>
</html>
