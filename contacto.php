<?php
$titulo = "Gasolinera Premium XYZ - Contacto";
include 'includes/header.php';
?>
<main>    
    <section class="hero-section bg-dark text-white">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Contáctanos</h1>
                    <p class="lead-contacto mb-0">Estamos aquí para atenderte y resolver tus consultas</p>
                </div>
            </div>
        </div>
    </section>    
    <section class="py-5">
        <div class="container">
            <div class="row g-4">                
                <div class="col-lg-12 col-md-6">
                    <div class="card border-0  ">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <i class="bi bi-telephone-fill text-primary fs-1"></i>
                            </div>
                            <h3 class="h3 text-center mb-3" >Llama o Escribe</h3>
                            <div class="text-center">
                                <p class="mb-0"><strong>Teléfono:</strong> (+51) 999-999-999</p>
                                <p class="mb-0"><strong>WhatsApp:</strong> (+51) 999-999-999</p>
                                <p class="mb-0"><strong>Email:</strong> info@gasolinera.com</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="tel:+51999999999" class="btn btn-outline-primary me-2">
                                    <i class="bi bi-telephone-outbound me-2"></i> Llamar
                                </a>
                                <a href="https://wa.me/51999999999" class="btn btn-outline-success">
                                    <i class="bi bi-whatsapp me-2"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <h2 class="display-5 fw-bold">Formulario de Contacto</h2>
                                <p class="lead text-muted">Completa el formulario y nos pondremos en contacto contigo</p>
                            </div>
                            <form id="contactForm" novalidate>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nombre" class="form-label">Nombre completo</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                        <div class="invalid-feedback">
                                            Por favor ingresa tu nombre.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un correo válido.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="telefono">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="asunto" class="form-label">Asunto</label>
                                        <select class="form-select" id="asunto" required>
                                            <option value="" selected disabled>Selecciona un asunto</option>
                                            <option value="combustibles">Consulta sobre combustibles</option>
                                            <option value="minimarket">Consulta sobre minimarket</option>
                                            <option value="taller">Consulta sobre taller</option>
                                            <option value="reclamo">Reclamo o sugerencia</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor selecciona un asunto.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="mensaje" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="mensaje" rows="5" required></textarea>
                                        <div class="invalid-feedback">
                                            Por favor escribe tu mensaje.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="privacidad" required>
                                            <label class="form-check-label" for="privacidad">
                                                Acepto la <a href="privacidad.php">Política de Privacidad</a>
                                            </label>
                                            <div class="invalid-feedback">
                                                Debes aceptar para continuar.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            <i class="bi bi-send-fill me-2"></i> Enviar mensaje
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ratio ratio-16x9 shadow-lg rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.8687713082504!2d-77.01183838866018!3d-11.983581040680036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c562b237b1ad%3A0x81b7bf88d50f89ff!2sUniversidad%20Tecnol%C3%B3gica%20Del%20Per%C3%BA!5e0!3m2!1ses!2spe!4v1746914331267!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Preguntas Frecuentes</h2>
                <p class="lead text-muted">Resuelve tus dudas más comunes</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué métodos de pago aceptan?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Aceptamos efectivo, tarjetas de crédito/débito (Visa, MasterCard, American Express), y aplicaciones móviles como Yape y Plin. También contamos con convenios corporativos para flotas de vehículos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿El taller de emergencia atiende las 24 horas?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nuestro taller de emergencia atiende de 6:00 am a 10:00 pm. Sin embargo, contamos con servicio de grúa las 24 horas para asistencia en carretera. Fuera de horario, podemos derivarte a talleres aliados con los que tenemos convenio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Tienen programas de fidelización?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí, contamos con nuestro programa "XYZ Premium" donde acumulas puntos por cada compra de combustible o productos en nuestro minimarket. Estos puntos pueden ser canjeados por descuentos, servicios en el taller o productos exclusivos. También ofrecemos descuentos especiales para conductores frecuentes y flotas corporativas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ¿Qué hace especial a sus combustibles?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nuestros combustibles contienen aditivos exclusivos que ayudan a limpiar y proteger el motor, mejorando el rendimiento y reduciendo emisiones. Trabajamos con proveedores certificados internacionalmente y realizamos controles de calidad diarios. Además, ofrecemos garantía de calidad: si tienes algún problema relacionado con nuestro combustible, lo investigaremos y resolveremos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    ¿Puedo reservar servicios del taller con anticipación?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí, puedes reservar servicios de mantenimiento programado (cambio de aceite, revisión de frenos, etc.) llamando a nuestro taller o a través de nuestro WhatsApp. Para emergencias, atendemos por orden de llegada, aunque clientes con membresía Premium tienen prioridad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>