<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <meta name="description" content="Gasolinera Premium XYZ - Combustibles de alta calidad y servicio excepcional">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="preload" href="assets/css/styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/styles.css">
    </noscript>
    <link rel="stylesheet" href="assets/css/styles.css">


    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- ... -->
    <?php
    // Carga CSS según página
    if (basename($_SERVER['PHP_SELF']) == 'precios.php') {
        echo '<link rel="stylesheet" href="assets/less/precios.css">';
    } elseif (basename($_SERVER['PHP_SELF']) == 'tienda.php') {
        echo '<link rel="stylesheet" href="assets/scss/tienda.css">';
    }
    ?>
</head>

<body>
    <header class="header-main">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="/assets/img/logo.png" alt="Gasolinera Premium XYZ" class="logo-cropped">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'servicios.php' ? 'active' : '' ?>" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'precios.php' ? 'active' : '' ?>" href="precios.php">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'tienda.php' ? 'active' : '' ?>" href="tienda.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'nosotros.php' ? 'active' : '' ?>" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contacto.php' ? 'active' : '' ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="cuenta.php" class="btn btn-outline-morado me-2">
                            <i class="bi bi-person-fill me-1"></i> Mi Cuenta
                        </a>
                        <a href="promociones.php" class="btn btn-morado">
                            <i class="bi bi-star-fill me-1"></i> Promociones
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>