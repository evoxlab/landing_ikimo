document.addEventListener('DOMContentLoaded', () => {

    // 1. Inicializar ScrollReveal para animaciones de entrada al hacer scroll
    ScrollReveal({ 
        distance: '60px',
        duration: 1500,
        delay: 200,
        easing: 'cubic-bezier(0.5, 0, 0, 1)'
    });

    ScrollReveal().reveal('.ikimo-title, .pulsate-arrow', { delay: 500, origin: 'bottom' });
    ScrollReveal().reveal('#countdown .section-title, #countdown .subtitle', { interval: 100 });
    ScrollReveal().reveal('#timer .time-unit', { interval: 100, origin: 'top' });
    ScrollReveal().reveal('.video-container', { scale: 0.85 });
    ScrollReveal().reveal('.industry-card', { interval: 150, origin: 'left' });
    ScrollReveal().reveal('#registro .form-container', { scale: 0.9, opacity: 0 });
    
    // Función para la cuenta regresiva (IMAGEN 3 & 8)
    const countdown = () => {
        // Establece la fecha de lanzamiento (27 de Noviembre de 2025 - AÑO REAL DE LA IMAGEN)
        const launchDate = new Date('Nov 27, 2025 00:00:00').getTime();
        const timerUnits = document.querySelectorAll('#timer .time-unit');

        if (timerUnits.length === 0) return;

        const interval = setInterval(() => {
            const now = new Date().getTime();
            const distance = launchDate - now;

            if (distance < 0) {
                clearInterval(interval);
                timerUnits.forEach(unit => unit.textContent = '00');
                document.querySelector('#timer').innerHTML = '<h2>¡LANZAMIENTO EN VIVO!</h2>';
                return;
            }

            // Cálculo de tiempo
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Actualizar el DOM, asegurando dos dígitos
            timerUnits[0].textContent = String(days).padStart(2, '0');
            timerUnits[1].textContent = String(hours).padStart(2, '0');
            timerUnits[2].textContent = String(minutes).padStart(2, '0');
            timerUnits[3].textContent = String(seconds).padStart(2, '0');

        }, 1000);
    };

    countdown();

    // 2. Efecto de contador de números (IMAGEN 9 - IKIMO CHALLENGE)
    const animateNumber = (element, start, end, duration) => {
        let startTime;
        const step = (timestamp) => {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);
            const value = Math.floor(percentage * (end - start) + start);
            element.textContent = 'USD' + value.toLocaleString();

            if (percentage < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    };

    // Observador para activar la animación cuando el elemento aparece
    const numberObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const endValue = parseInt(element.getAttribute('data-animate-number'));
                animateNumber(element, 0, endValue, 1500);
                observer.unobserve(element); // Deja de observar una vez animado
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.price-highlight[data-animate-number]').forEach(span => {
        numberObserver.observe(span);
    });

    // 3. Simulación de efecto 3D/partículas en el fondo (Si tuvieras Three.js, iría aquí)
    /* const heroBgEffect = document.getElementById('hero-bg-effect');
    if (heroBgEffect) {
        // En una implementación real, se inicializaría una escena de Three.js aquí
        // con partículas que se mueven lentamente, o un efecto de malla de alambre.
        heroBgEffect.style.backgroundImage = "url('ikimo_samurai_bg.jpg')"; // Placeholder
    }
    */
    
    // 4. Lógica para mostrar/ocultar campos de Sponsor (IMAGEN 7)
    const sponsorYes = document.getElementById('sponsor-yes');
    const sponsorNo = document.getElementById('sponsor-no');
    const sponsorFields = document.getElementById('sponsor-fields');
    
    // Ocultar al inicio si 'No' está seleccionado por defecto, aunque 'Si' lo está en el HTML
    // Dejarlo visible ya que 'SI' es el default.
    
    document.querySelector('.radio-buttons').addEventListener('change', (event) => {
        if (event.target.value === 'si') {
            sponsorFields.style.display = 'block';
        } else {
            sponsorFields.style.display = 'none';
        }
    });

    // 5. Simulación de carga de banderas en el select de País (Para una apariencia de "Genio")
    const countrySelect = document.querySelector('select[name="country"]');
    if (countrySelect) {
        // Esto se reemplazaría por una llamada API o un JSON de países y sus emojis de bandera
        const sampleCountries = [
            { name: "Colombia", code: "🇨🇴" },
            { name: "México", code: "🇲🇽" },
            { name: "España", code: "🇪🇸" },
            { name: "Perú", code: "🇵🇪" }
        ];

        sampleCountries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name;
            option.textContent = `${country.code} ${country.name}`;
            countrySelect.appendChild(option);
        });
    }

});