<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Secreto de IKIMO | El Misterio de la Riqueza en el MLM</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle.css") ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        /* CYBERPUNK VARIABLES */
        :root {
            --color-dark: #111827;
            --color-accent: #22d3ee;
            /* Cian */
            --color-secondary: #ff00ff;
            /* Magenta */
            --color-light: #f3f4f6;
            --font-epic: 'Orbitron', sans-serif;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: var(--color-dark);
            color: var(--color-light);
        }

        header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--color-accent);
            font-family: var(--font-epic);
        }

        /* Hero Section */
        .fullscreen-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* 💡 CONTENEDOR 3D: Necesario para el canvas de Three.js */
        #hero-bg-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: var(--color-dark);
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }

        /* Título Glitch/Neon */
        .ikimo-title {
            font-size: 5em;
            color: var(--color-light);
            position: relative;
            font-family: var(--font-epic);
            text-shadow: 0 0 5px var(--color-accent), 0 0 10px var(--color-accent);
            animation: neon-glow 1.5s ease-in-out infinite alternate;
        }

        @keyframes neon-glow {
            from {
                text-shadow: 0 0 5px var(--color-accent);
            }

            to {
                text-shadow: 0 0 10px var(--color-secondary), 0 0 20px var(--color-accent);
            }
        }

        /* Contadores */
        .digital-display {
            display: flex;
            justify-content: center;
            font-size: 2em;
            margin: 20px 0;
            font-family: var(--font-epic);
        }

        .time-unit {
            margin: 0 10px;
            padding: 20px;
            background: rgba(34, 211, 238, 0.1);
            border-radius: 10px;
            border: 1px solid var(--color-accent);
            box-shadow: 0 0 10px rgba(34, 211, 238, 0.5);
        }

        /* Industrias Section */
        #industrias {
            background-color: #1f2937;
            padding-top: 100px;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* 💡 TARJETA DE INDUSTRIA con simulación 3D */
        .industry-card {
            background-color: #0d1320;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #374151;
            transition: transform 0.5s ease-out, box-shadow 0.5s ease-out;
            cursor: pointer;
            perspective: 1000px;
            position: relative;
            overflow: hidden;
        }

        .industry-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5), 0 0 20px var(--color-accent);
        }

        /* Contenedor del ícono 3D simulado */
        .card-icon-container {
            position: relative;
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            transform-style: preserve-3d;
            transition: transform 0.8s ease-out;
        }

        /* El ícono base */
        .card-icon-container i {
            font-size: 3em;
            color: var(--color-secondary);
            text-shadow: 0 0 10px var(--color-secondary);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: transform 0.8s ease-out, color 0.3s;
        }

        /* Resplandor simulado */
        .card-icon-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60px;
            height: 60px;
            background: radial-gradient(circle, var(--color-accent) 0%, transparent 70%);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            opacity: 0;
            transition: all 0.5s;
            z-index: 0;
        }

        /* Activación del resplandor y rotación al hacer hover en la tarjeta */
        .industry-card:hover .card-icon-container {
            transform: rotateY(360deg);
            /* 💡 ROTACIÓN 3D COMPLETA */
        }

        .industry-card:hover .card-icon-container::before {
            transform: translate(-50%, -50%) scale(1.5);
            opacity: 0.5;
        }

        /* (El resto de tus estilos como .cta-button, footer, etc., se mantienen o se adaptan a las variables) */
    </style>
</head>

<body>
    <header id="main-header">
        <div class="logo">IKIMO</div>
        <nav>
            <a href="#hero">Inicio</a>
                        <a href="#countdown">Pre-Lanzamiento</a>
                        <a href="#industrias">Industrias</a>
                        <a href="#registro">Fundador</a>
                    </nav>
            </header>

        <section id="hero" class="fullscreen-section" data-scroll-effect="scale-in">
        <div id="hero-bg-effect"></div>
                <div class="hero-content">
                        <h1 class="ikimo-title" data-glitch="IKIMO">El Secreto de IKIMO</h1>
                        <h2>El misterio de la riqueza en el MLM</h2>
                        <p>Clic en <a href="www.ElSecretodelIKIMO.info" class="neon-link">www.ElSecretodelIKIMO.info</a> y entra a la landing</p>
                        <i class="fas fa-chevron-down pulsate-arrow"></i>
                    </div>
           
    </section>

    <section id="countdown" class="section-padding" data-scroll-effect="fade-up">
                <h3 class="section-title">Pre lanzamiento mundial 27.11.25</h3>
                <p class="subtitle">¡Un detalle importante! COMING SOON ....</p>

                <div id="timer" class="digital-display">
                        <div class="time-unit" data-unit="Días">00</div>
                        <div class="time-unit" data-unit="Horas">00</div>
                        <div class="time-unit" data-unit="Minutos">00</div>
                        <div class="time-unit" data-unit="Segundos">00</div>
                    </div>

                <div class="video-container">
                        <button class="cta-button video-btn" data-video-id="VIDEO_ID_1">VER VIDEO</button>
                        <p class="video-post-text">Cuando terminen de ver el video 1, sigan bajando <i class="fas fa-arrow-down"></i></p>
                    </div>
            </section>

        <section id="industrias" class="section-padding" data-scroll-effect="slide-left">
                <h3 class="section-title">4 Industrias en 1</h3>
                <p class="subtitle">Si soñaste con ser parte de algo GRANDE ¡esta es tu oportunidad!</p>

                <div class="industries-grid">
                        <div class="industry-card" data-hover-effect>
                <div class="card-icon-container"><i class="fas fa-brain"></i></div>
                                <h4>SUPERACIÓN PERSONAL</h4>
                           
            </div>
                        <div class="industry-card" data-hover-effect>
                <div class="card-icon-container"><i class="fas fa-gamepad"></i></div>
                                <h4>ENTRETENIMIENTO</h4>
                           
            </div>
                        <div class="industry-card" data-hover-effect>
                <div class="card-icon-container"><i class="fas fa-microchip"></i></div>
                                <h4>STORE DE TECNOLOGÍA</h4>
                           
            </div>
                        <div class="industry-card" data-hover-effect>
                <div class="card-icon-container"><i class="fas fa-robot"></i></div>
                                <h4>INTELIGENCIA ARTIFICIAL</h4>
                           
            </div>
                    </div>
            </section>

    <section id="challenge" class="section-padding text-center" data-scroll-effect="zoom-in">
                <h3 class="section-title neon-text">IKIMO CHALLENGE</h3>
                <p class="subtitle">¡El misterio ha sido revelado! Conoce los **13 BONOS**</p>
               
                <div class="challenge-box">
                        <p>Genera en tiempo récord</p>
                        <div class="price-list">
                                <span class="price-highlight" data-animate-number="1240">USD1,240</span> en 1 SEMANA
                                <span class="price-highlight" data-animate-number="3750">USD3,750</span> en 2 SEMANAS
                                <span class="price-highlight" data-animate-number="6140">USD6,140</span> MAX 1 MES
                            </div>
                        <p class="share-info">Comparte este link: <span class="neon-link">www.ElSecretodelIKIMO.info</span></p>
                    </div>
            </section>

        <section id="registro" class="section-padding registration-bg" data-scroll-effect="fade-in">
                <div class="form-container">
                        <h3 class="section-title">APARECE LA CAPTURA DE DATOS</h3>
                        <p>Posiciónate ahora como **fundador y pionero** en tu País y recibe beneficios que nadie recibirá en el plan de compensación.</p>

                        <form id="registration-form">
                                <input type="text" placeholder="NOMBRE Y APELLIDO" required>
                                <select name="country" required>
                                        <option value="" disabled selected>PAÍS (con banderas - JS)</option>
                                    </select>
                                <input type="tel" placeholder="Whatsapp (+Código de País y Banderas)" required>
                                <input type="email" placeholder="CORREO ELECTRÓNICO" required>
                               
                                <div class="sponsor-check">
                                        <label>TIENE SPONSOR:</label>
                                        <div class="radio-buttons">
                                                <input type="radio" id="sponsor-yes" name="sponsor" value="si" checked><label for="sponsor-yes" class="neon-button">SI</label>
                                                <input type="radio" id="sponsor-no" name="sponsor" value="no"><label for="sponsor-no" class="neon-button">NO</label>
                                            </div>
                                    </div>
                               
                                <div id="sponsor-fields">
                                        <input type="text" placeholder="NOMBRE DE SU SPONSOR">
                                        <input type="text" placeholder="ID DE SU SPONSOR">
                                    </div>

                                <button type="submit" class="cta-button final-cta">REGISTRARSE AHORA <i class="fas fa-arrow-right"></i></button>
                            </form>
                    </div>
            </section>

        <footer>
                <p>&copy; 2025 El Secreto de IKIMO. Todos los derechos reservados.</p>
            </footer>
</body>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ... (Tu código existente de smooth scroll, countdown, sponsorToggle, video CTA, ScrollReveal y formValidation) ...

        // 💡 INICIO: CÓDIGO 3D AVANZADO (THREE.JS)
        if (window.THREE) {

            // 1. Efecto de Partículas Cósmicas/Cyberpunk en el HERO
            function initCosmicParticles() {
                const container = document.getElementById('hero-bg-effect');
                if (!container) return;

                const width = container.clientWidth;
                const height = container.clientHeight;

                // Scene, Camera, Renderer
                const scene = new THREE.Scene();
                const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
                // Usamos alpha: true para que el fondo CSS se pueda ver si es necesario
                const renderer = new THREE.WebGLRenderer({
                    antialias: true,
                    alpha: true
                });

                renderer.setSize(width, height);
                container.appendChild(renderer.domElement);

                // --- Partículas (Geometry) ---
                const particleCount = 2000;
                const geometry = new THREE.BufferGeometry();
                const positions = new Float32Array(particleCount * 3);

                for (let i = 0; i < particleCount * 3; i += 3) {
                    positions[i] = (Math.random() - 0.5) * 40; // x
                    positions[i + 1] = (Math.random() - 0.5) * 40; // y
                    positions[i + 2] = (Math.random() - 0.5) * 40; // z
                }

                geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

                // --- Partículas (Material) ---
                const material = new THREE.PointsMaterial({
                    color: 0x22d3ee, // Cian (Accent)
                    size: 0.1,
                    blending: THREE.AdditiveBlending, // Efecto de brillo/luz
                    transparent: true,
                    sizeAttenuation: true
                });

                const particles = new THREE.Points(geometry, material);
                scene.add(particles);

                camera.position.z = 10;

                // --- Luces (Cyberpunk Vibe) ---
                // Luz de color neón (magenta)
                const neonLight = new THREE.PointLight(0xff00ff, 1, 100);
                neonLight.position.set(5, 5, 5);
                scene.add(neonLight);

                // Función de animación
                const animate = () => {
                    requestAnimationFrame(animate);

                    // Rotación lenta de las partículas
                    particles.rotation.y += 0.0005;
                    particles.rotation.x += 0.0002;

                    // Mover la cámara ligeramente para un efecto inmersivo
                    camera.position.x = Math.sin(Date.now() * 0.00005) * 1;
                    camera.position.y = Math.cos(Date.now() * 0.00005) * 1;

                    renderer.render(scene, camera);
                };

                animate();

                // Manejar redimensionamiento
                window.addEventListener('resize', () => {
                    const newWidth = container.clientWidth;
                    const newHeight = container.clientHeight;
                    camera.aspect = newWidth / newHeight;
                    camera.updateProjectionMatrix();
                    renderer.setSize(newWidth, newHeight);
                });
            }

            initCosmicParticles();

        } else {
            console.warn("Three.js no cargó. El fondo HERO usará el CSS estático.");
        }

    });
</script>

</html>