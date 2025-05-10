<?php
$titulo = "Gasolinera Premium XYZ - Inicio";
include 'includes/header.php';
?>

<main>
    <!-- Carrusel de imágenes profesional -->
    <section>
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/main01.jpeg" class="d-block w-100 img-alta" alt="Estación de servicio premium">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Excelencia en Combustibles</h2>
                        <p>La más alta calidad para su vehículo</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/main02.jpeg" class="d-block w-100 img-alta" alt="Servicio al cliente">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Servicio Personalizado</h2>
                        <p>Atendemos con profesionalismo y dedicación</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/main2.webp" class="d-block w-100 img-alta" alt="Tienda premium">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Tienda Exclusiva</h2>
                        <p>Productos seleccionados para su comodidad</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Sección de servicios premium -->
    <section class="services-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Nuestros Servicios Premium</h2>
                <p class="lead text-muted">Calidad y excelencia en cada detalle</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/assets/img/body01.png" class="card-img-top body-cropped" alt="Combustibles premium">
                        <div class="card-body">
                            <h3 class="h4 card-title">Combustibles de Alto Rendimiento</h3>
                            <p class="card-text">Ofrecemos gasolina y diésel de la más alta calidad para el óptimo funcionamiento de su vehículo.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Tecnología de limpieza de motores</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Aditivos exclusivos</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Certificación internacional</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/assets/img/body02.png" class="card-img-top body-cropped" alt="Tienda premium">
                        <div class="card-body">
                            <h3 class="h4 card-title">Tienda Gourmet</h3>
                            <p class="card-text">Productos seleccionados para los clientes más exigentes.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cafés y bebidas premium</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Snacks saludables</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Artículos de viaje exclusivos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/assets/img/body03.png" class="card-img-top body-cropped" alt="Servicio automotriz">
                        <div class="card-body">
                            <h3 class="h4 card-title">Servicio Automotriz</h3>
                            <p class="card-text">Mantenimiento profesional para su vehículo.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Lubricantes sintéticos</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Diagnóstico computarizado</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Servicio express</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de precios elegante -->
    <section class="pricing-section py-5 text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Precios Actualizados</h2>
                <p class="lead">Transparencia en nuestros valores <span id="price-time" class="small">(actualizado: <?php echo date('H:i'); ?>)</span></p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card bg-transparent border border-light h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="h4">Gasolina Regular</h3>
                            <div class="price display-4 fw-bold my-3">S/ <span id="price-regular">4.50</span></div>
                            <p class="text-muted">por galón</p>
                            <ul class="list-unstyled my-4">
                                <li>Octanaje 87</li>
                                <li>Aditivos limpiadores</li>
                                <li>Garantía de calidad</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  text-white h-100 bg-gris">
                        <div class="card-body text-center p-4">
                            <h3 class="h4">Gasolina Premium</h3>
                            <div class="price display-4 fw-bold my-3">S/ <span id="price-regular">5.20</span></div>
                            <p>por galón</p>
                            <ul class="list-unstyled my-4">
                                <li>Octanaje 93</li>
                                <li>Tecnología avanzada</li>
                                <li>Mayor rendimiento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border border-light h-100">
                        <div class="card-body text-center p-4">
                            <h3 class="h4">Diésel</h3>
                            <div class="price display-4 fw-bold my-3">S/ <span id="price-regular">5.80</span></div>
                            <p class="text-muted">por galón</p>
                            <ul class="list-unstyled my-4">
                                <li>Ultra bajo azufre</li>
                                <li>Mejor lubricidad</li>
                                <li>Optimizado para motores</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de ubicación premium -->
    <section class="location-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4">Nuestra Ubicación Exclusiva</h2>
                    <p class="lead mb-4">Visítenos en nuestro moderno centro de servicio</p>
                    <div class="mb-4">
                        <h3 class="h5">Horario de atención:</h3>
                        <p style="color: brown;font-weight: bold; padding-top: 0.5rem; font-size: 1.5rem;">Disponible 24/7</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-geo-alt-fill fs-4 me-3"></i>
                        <p class="mb-0">Av. Lima, San Juan de Lurigancho, Lima</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill fs-4 me-3"></i>
                        <p class="mb-0">(+51) 999-999-999</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9 shadow-lg rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.8687713082504!2d-77.01183838866018!3d-11.983581040680036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c562b237b1ad%3A0x81b7bf88d50f89ff!2sUniversidad%20Tecnol%C3%B3gica%20Del%20Per%C3%BA!5e0!3m2!1ses!2spe!4v1746914331267!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>