document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Simular envío
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
    
    setTimeout(() => {
        submitBtn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Enviado';
        form.reset();
        
        // Mostrar alerta
        const alert = document.createElement('div');
        alert.className = 'alert alert-success mt-3';
        alert.innerHTML = 'Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.';
        form.parentNode.insertBefore(alert, form.nextSibling);
        
        // Resetear después de 5 segundos
        setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            alert.remove();
        }, 5000);
    }, 1500);
});

function updateFuelPrices() {
    const prices = {
        regular: { base: 4.50, variation: 0.05 },
        premium: { base: 5.20, variation: 0.07 },
        diesel: { base: 4.80, variation: 0.06 }
    };
    
    Object.keys(prices).forEach(type => {
        const element = document.getElementById(`price-${type}`);
        if(element) {
            const variation = (Math.random() * 2 - 1) * prices[type].variation;
            const newPrice = prices[type].base + variation;
            element.textContent = newPrice.toFixed(2);
            
            // Cambiar color si sube o baja
            if(variation > 0) {
                element.classList.add('text-danger');
                element.classList.remove('text-success');
            } else if(variation < 0) {
                element.classList.add('text-success');
                element.classList.remove('text-danger');
            }
        }
    });
}

// Actualizar cada 30 segundos
setInterval(updateFuelPrices, 30000);
updateFuelPrices(); // Ejecutar al cargar

document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Simular envío
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
    
    setTimeout(() => {
        submitBtn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Enviado';
        form.reset();
        
        // Mostrar alerta
        const alert = document.createElement('div');
        alert.className = 'alert alert-success mt-3';
        alert.innerHTML = 'Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.';
        form.parentNode.insertBefore(alert, form.nextSibling);
        
        // Resetear después de 5 segundos
        setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            alert.remove();
        }, 5000);
    }, 1500);
});