<?php
$titulo = "Gasolinera Premium XYZ - Tienda";
include 'includes/header.php';

// Simulated product data (DB-ready structure)
$productos = [
    [
        'id' => 101,
        'nombre' => 'Café Premium 16oz',
        'precio' => 8.90,
        'categoria' => 'bebidas',
        'stock' => 15,
        'imagen' => 'cafe-premium.jpg',
        'promocion' => null,
        
        'tags' => ['nuevo', 'mas-vendido']
    ],
    [
        'id' => 102,
        'nombre' => 'Kit de Emergencia Vial',
        'precio' => 89.90,
        'categoria' => 'auto',
        'stock' => 4,
        'imagen' => 'kit-emergencia.jpg',
        'promocion' => null,
        'tags' => ['oferta']
    ],
    [
        'id' => 103,
        'nombre' => 'Galletas de Chocolate',
        'precio' => 3.50,
        'categoria' => 'snacks',
        'stock' => 2,
        'imagen' => 'galletas-chocolate.jpg',
        'promocion' => null,
        'tags' => ['nuevo']
    ],
    [
        'id' => 104,
        'nombre' => 'Agua Mineral 500ml',
        'precio' => 1.50,
        'categoria' => 'bebidas',
        'stock' => 20,
        'imagen' => 'agua-mineral.jpg',
        'promocion' => ['tipo' => 'descuento', 'valor' => '20%'],
        'tags' => []
    ],
    [
        'id' => 105,
        'nombre' => 'Barra Energética',
        'precio' => 2.50,
        'categoria' => 'snacks',
        'stock' => 10,
        'imagen' => 'barra-energetica.jpg',
        'promocion' => ['tipo' => 'descuento', 'valor' => '10%'],
        'tags' => ['nuevo']
    ],
    [
        'id' => 106,
        'nombre' => 'Protector Solar SPF 50',
        'precio' => 15.00,
        'categoria' => 'cuidado-personal',
        'stock' => 5,
        'imagen' => 'protector-solar.jpg',
        'promocion' => null,
        'tags' => ['nuevo', 'oferta']
    ],
    [
        'id' => 107,
        'nombre' => 'Cargador Inalámbrico',
        'precio' => 25.00,
        'categoria' => 'accesorios',
        'stock' => 8,
        'imagen' => 'cargador-inalambrico.jpg',
        'promocion' => ['tipo' => 'combo', 'valor' => '3x2'],
        'tags' => []
    ],
    [
        'id' => 108,
        'nombre' => 'Desodorante Roll-On',
        'precio' => 7.50,
        'categoria' => 'cuidado-personal',
        'stock' => 12,
        'imagen' => 'desodorante.jpg',
        'promocion' => null,
        'tags' => ['nuevo']
    ]
];
?>

<main>
    <section class="hero-section bg-dark text-white">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Tienda de Conveniencia</h1>
                    <p class="lead-tienda mb-0">Productos seleccionados para tu viaje</p>
                </div>
            </div>
        </div>
    </section>    

    <!-- Product Grid -->
    <section class="product-grid py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($productos as $producto): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card card h-100 border-0 shadow-sm">
                        <?php if($producto['promocion']): ?>
                        <div class="promo-badge bg-<?= $producto['promocion']['tipo'] ?>">
                            <?= $producto['promocion']['valor'] ?>
                        </div>
                        <?php endif; ?>
                        
                        <div class="product-image">
                            <img src="assets/img/<?= $producto['imagen'] ?>" 
                                 alt="<?= $producto['nombre'] ?>" 
                                 class="card-img-top">
                        </div>
                        
                        <div class="card-body">
                            <div class="stock-status ">
                                <i class="bi bi-box2 <?= $producto['stock'] > 0 ? 'text-success' : 'text-danger' ?>"></i>
                                <?= $producto['stock'] > 0 ? "Disponible ($producto[stock])" : "Agotado" ?>
                            </div>
                            <h3 class="h5 card-title"><?= $producto['nombre'] ?></h3>
                            <div class="price-wrapper mb-3">
                                <span class="display-6 text-primary">S/ <?= number_format($producto['precio'], 2) ?></span>
                            </div>
                            <button class="btn btn-primary  w-100 add-to-cart" 
                                    data-product-id="<?= $producto['id'] ?>"
                                    <?= $producto['stock'] < 1 ? 'disabled' : '' ?>>
                                <i class="bi bi-cart-plus me-2 "></i>
                                <?= $producto['stock'] > 0 ? 'Añadir al carrito' : 'Agotado' ?>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
