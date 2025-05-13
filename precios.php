<?php
$titulo = "Gasolinera Premium XYZ - Precios";
include 'includes/header.php';

// Simulated database data (replace with real DB connection)
$combustibles = [
    [
        'id' => 1,
        'nombre' => 'Gasolina Premium', 
        'precio' => 4.80,
        'tendencia' => 'up',
        'octanaje' => 93,
        'ultima_actualizacion' => date('Y-m-d H:i:s', strtotime('-15 minutes')),
        'unidad_medida' => 'galón'
    ],
    [
        'id' => 2,
        'nombre' => 'Gasolina Regular', 
        'precio' => 4.50,
        'tendencia' => 'down',
        'octanaje' => 87,
        'ultima_actualizacion' => date('Y-m-d H:i:s', strtotime('-30 minutes')),
        'unidad_medida' => 'galón'
    ],
    [
        'id' => 3,
        'nombre' => 'Diésel Ultra', 
        'precio' => 3.90,
        'tendencia' => 'stable',
        'octanaje' => 'B5',
        'ultima_actualizacion' => date('Y-m-d H:i:s', strtotime('-45 minutes')),
        'unidad_medida' => 'litro'
    ]
];
// Time format function
function tiempo_desde($fecha) {
    $diferencia = time() - strtotime($fecha);
    $horas = floor($diferencia / 3600);
    $minutos = floor(($diferencia % 3600) / 60);
    return ($horas > 0 ? "{$horas}h " : "") . "{$minutos}min";
}
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Precios Actualizados</h1>
                    <p class="lead-contacto mb-0">Valores actualizados al <?= date('d/m/Y H:i') ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de precios -->
    <section class="pricing-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Nuestros Combustibles</h2>
                <p class="lead text-muted">Precios competitivos y actualizados en tiempo real</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <?php foreach ($combustibles as $combustible): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                        <div class="card-body p-4 text-center">
                            <h3 class="h4 mb-5"><?= $combustible['nombre'] ?></h3>
                            <div class="price-display mb-4">
                                <span class="display-4 fw-bold">
                                    S/ <?= number_format($combustible['precio'], 2) ?>
                                </span>
                                <?php if($combustible['tendencia'] !== 'stable'): ?>
                                <span class="price-change price-<?= $combustible['tendencia'] ?>">
                                    <i class="bi bi-arrow-<?= $combustible['tendencia'] ?>-circle fs-5"></i>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="specs">
                                <p class="mb-1">
                                    <i class="bi bi-speedometer2 me-2"></i>
                                    Octanaje: <?= $combustible['octanaje'] ?>
                                </p>
                                <p class="mb-0">
                                    <i class="bi bi-clock-history me-2"></i>
                                    Actualizado hace 15 min
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted small">
                    * Precios sujetos a variación sin previo aviso.<br>
                    Incluye IGV. Consultar promociones vigentes.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
