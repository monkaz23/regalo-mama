<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para la mejor mamá del mundo 💐</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Nunito:wght@400;600;800&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --rosa: #F7A8C4;
      --rosa-oscuro: #E07EA0;
      --durazno: #FFD6B0;
      --amarillo: #FFF0A0;
      --verde: #B5E8C8;
      --lavanda: #D8C9F7;
      --blanco: #FFFDF9;
      --texto: #3D2B3D;
      --morado: #3D2B3D
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      background: var(--blanco);
      color: var(--texto);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Flores flotantes de fondo */
    .flores-bg {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      pointer-events: none;
      z-index: 0;
      overflow: hidden;
    }

    .flor {
      position: absolute;
      font-size: 2rem;
      animation: flotar linear infinite;
      opacity: 0.3;
    }

    @keyframes flotar {
      0% {
        transform: translateY(110vh) rotate(0deg);
        opacity: 0;
      }

      10% {
        opacity: 0.35;
      }

      90% {
        opacity: 0.35;
      }

      100% {
        transform: translateY(-10vh) rotate(360deg);
        opacity: 0;
      }
    }

    /* PORTADA */
    #portada {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 2rem;
      position: relative;
      z-index: 1;
      /* background: linear-gradient(160deg, #fff5f9 0%, #fffef5 50%, #f5fffe 100%); */
      background: linear-gradient(160deg, rgba(255,245,249,0.75) 0%, rgba(255,254,245,0.75) 50%, rgba(245,255,254,0.75) 100%);
    }

    .titulo-portada {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.2rem, 6vw, 4.5rem);
      font-weight: 700;
      color: var(--rosa-oscuro);
      line-height: 1.15;
      margin-bottom: 1rem;
      animation: aparecer 1s ease both;
    }

    .subtitulo-portada {
      font-size: clamp(1rem, 2.5vw, 1.4rem);
      color: #a06070;
      margin-bottom: 2.5rem;
      animation: aparecer 1s 0.3s ease both;
      font-style: italic;
    }

    .emoji-grande {
      font-size: clamp(4rem, 10vw, 7rem);
      display: block;
      margin-bottom: 1.5rem;
      animation: latir 1.5s ease-in-out infinite, aparecer 0.8s ease both;
    }

    @keyframes latir {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.12);
      }
    }

    @keyframes aparecer {
      from {
        opacity: 0;
        transform: translateY(24px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-abrir {
      background: var(--rosa-oscuro);
      color: white;
      border: none;
      padding: 1rem 2.5rem;
      border-radius: 50px;
      font-family: 'Nunito', sans-serif;
      font-size: 1.15rem;
      font-weight: 800;
      cursor: pointer;
      letter-spacing: 0.04em;
      transition: transform 0.15s, box-shadow 0.15s, background 0.2s;
      box-shadow: 0 6px 20px rgba(224, 126, 160, 0.35);
      animation: aparecer 1s 0.6s ease both;
    }

    .btn-abrir:hover {
      transform: translateY(-3px) scale(1.04);
      box-shadow: 0 10px 28px rgba(224, 126, 160, 0.45);
      background: #d06090;
    }

    .btn-abrir:active {
      transform: scale(0.97);
    }

    /* CARTA */
    #carta {
      display: none;
      position: relative;
      z-index: 1;
    }

    /* SECCIÓN BASE */
    .seccion {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 4rem 1.5rem;
      position: relative;
    }

    /* Sección 1: El mensaje */
    .sec-mensaje {
      background: linear-gradient(135deg, rgba(255, 245, 249, 0.75) 0%, rgba(249, 245, 255, 0.75) 100%);
    }

    .sobre {
      max-width: 680px;
      width: 100%;
      background: white;
      border-radius: 20px;
      padding: 3rem 2.5rem;
      box-shadow: 0 8px 40px rgba(200, 100, 140, 0.12), 0 2px 8px rgba(0, 0, 0, 0.06);
      border: 2px solid rgba(247, 168, 196, 0.3);
      position: relative;
      animation: deslizar 0.7s ease both;
    }

    @keyframes deslizar {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .sobre::before {
      content: '';
      position: absolute;
      top: -2px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, var(--rosa), var(--lavanda));
      border-radius: 2px;
    }

    .saludo {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-style: italic;
      color: var(--rosa-oscuro);
      margin-bottom: 1.5rem;
    }

    .parrafo {
      font-size: 1.1rem;
      line-height: 1.85;
      color: #5a3d50;
      margin-bottom: 1.2rem;
    }

    .parrafo.destacado {
      font-size: 1.25rem;
      font-weight: 800;
      color: var(--rosa-oscuro);
      text-align: center;
      padding: 1rem;
      background: linear-gradient(135deg, #fff0f5, #f5f0ff);
      border-radius: 12px;
      margin: 1.5rem 0;
    }

    .firma {
      text-align: right;
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      font-style: italic;
      color: var(--rosa-oscuro);
      margin-top: 2rem;
    }

    /* Sección 2: Razones */
    .sec-razones {
      background: linear-gradient(160deg, rgba(245, 255, 248, 0.75) 0%, rgba(255, 251, 240, 0.75) 100%);
    }

    .sec-titulo {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 4vw, 2.8rem);
      color: var(--rosa-oscuro);
      text-align: center;
      margin-bottom: 2.5rem;
      font-style: italic;
    }

    .razones-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.2rem;
      max-width: 800px;
      width: 100%;
    }

    .razon-card {
      background: white;
      border-radius: 16px;
      padding: 1.5rem 1.3rem;
      text-align: center;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.07);
      border: 1.5px solid rgba(247, 168, 196, 0.25);
      transition: transform 0.2s, box-shadow 0.2s;
      cursor: default;
      animation: aparecer 0.6s ease both;
    }

    .razon-card:hover {
      transform: translateY(-6px) scale(1.03);
      box-shadow: 0 10px 28px rgba(200, 100, 140, 0.18);
    }

    .razon-emoji {
      font-size: 2.4rem;
      display: block;
      margin-bottom: 0.6rem;
    }

    .razon-texto {
      font-size: 0.98rem;
      color: #5a3d50;
      line-height: 1.5;
      font-weight: 600;
    }

    /* Sección 3: Fotos */
    .sec-fotos {
      background: linear-gradient(135deg, rgba(255, 240, 249, 0.75) 0%, rgba(240, 245, 255, 0.75) 100%);
    }

    .fotos-instruccion {
      font-size: 0.95rem;
      color: #9a7090;
      text-align: center;
      margin-bottom: 2rem;
      font-style: italic;
    }

    .fotos-instruccion code {
      background: #f5e8f2;
      color: var(--rosa-oscuro);
      padding: 2px 7px;
      border-radius: 6px;
      font-size: 0.9rem;
      font-style: normal;
    }

    .galeria {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
      max-width: 1100px;
      width: 100%;
    }

    .foto-slot {
      aspect-ratio: 1;
      border-radius: 14px;
      border: 2.5px dashed var(--rosa);
      background: linear-gradient(135deg, #fff5f9, #f9f5ff);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
      transition: transform 0.2s;
    }

    .foto-slot img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 12px;
      transition: transform 0.3s;
    }

    .foto-slot:hover img {
      transform: scale(1.04);
    }

    .foto-slot.vacia::after {
      content: '📷';
      font-size: 2rem;
      opacity: 0.35;
    }

    /* Sección 3b: Video */
    .sec-video {
      background: linear-gradient(160deg, rgba(240,240,255,0.75) 0%, rgba(255,240,248,0.75) 100%);
    }

    .video-wrapper {
      max-width: 680px;
      width: 100%;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 40px rgba(150, 80, 180, 0.15);
      border: 2px solid rgba(216, 201, 247, 0.4);
      background: #1a1a2e;
    }

    .video-wrapper video {
      width: 100%;
      display: block;
      max-height: 420px;
      object-fit: contain;
      background: #000;
    }

    .video-caption {
      text-align: center;
      padding: 1rem;
      font-size: 1rem;
      color: #9a7090;
      font-style: italic;
      background: white;
    }

    /* Sección 4: Música */
    .sec-musica {
      background: linear-gradient(160deg, #f8f5ff 0%, #fff5f0 100%);
    }

    .player {
      max-width: 500px;
      width: 100%;
      background: white;
      border-radius: 24px;
      padding: 2rem 2rem 1.5rem;
      box-shadow: 0 8px 40px rgba(160, 80, 200, 0.13);
      border: 1.5px solid rgba(216, 201, 247, 0.5);
      text-align: center;
    }

    .disco {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: conic-gradient(from 0deg, #f7a8c4, #d8c9f7, #b5e8c8, #ffd6b0, #f7a8c4);
      margin: 0 auto 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.1s;
      position: relative;
    }

    .disco.girando {
      animation: girar 4s linear infinite;
    }

    @keyframes girar {
      to {
        transform: rotate(360deg);
      }
    }

    .disco::after {
      content: '';
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: white;
      position: absolute;
    }

    .cancion-titulo {
      font-weight: 800;
      font-size: 1.1rem;
      color: var(--texto);
      margin-bottom: 0.3rem;
    }

    .cancion-artista {
      font-size: 0.9rem;
      color: #9a7090;
      margin-bottom: 1.5rem;
    }

    .controles {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .btn-ctrl {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.8rem;
      transition: transform 0.15s;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .btn-ctrl:hover {
      transform: scale(1.15);
    }

    .btn-play {
      background: var(--rosa-oscuro);
      color: white;
      font-size: 1.4rem;
      width: 60px;
      height: 60px;
      box-shadow: 0 4px 14px rgba(224, 126, 160, 0.4);
    }

    .btn-play:hover {
      box-shadow: 0 6px 20px rgba(224, 126, 160, 0.5);
    }

    .lista-canciones {
      text-align: left;
      border-top: 1px solid #f0e0e8;
      padding-top: 1rem;
    }

    .cancion-item {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      padding: 0.6rem 0.5rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.15s;
      font-size: 0.92rem;
    }

    .cancion-item:hover {
      background: #fff0f5;
    }

    .cancion-item.activa {
      background: #ffe8f2;
      font-weight: 700;
    }

    .cancion-num {
      color: #c0a0b0;
      font-size: 0.8rem;
      min-width: 18px;
      text-align: center;
    }

    .cancion-info {
      flex: 1;
    }

    .cancion-nombre {
      color: var(--texto);
    }

    .cancion-dur {
      color: #b090a0;
      font-size: 0.8rem;
    }

    .nota-musica {
      font-size: 0.8rem;
      color: #b8a0b0;
      margin-top: 1rem;
      font-style: italic;
    }

    .barra-progreso {
      width: 100%;
      height: 4px;
      background: #f0e0e8;
      border-radius: 2px;
      margin-bottom: 1rem;
      cursor: pointer;
      position: relative;
    }

    .barra-fill {
      height: 100%;
      background: var(--rosa-oscuro);
      border-radius: 2px;
      width: 0%;
      transition: width 0.5s;
    }

    /* Sección 5: Final */
    .sec-final {
      background: linear-gradient(160deg, rgba(255,248,240,0.75) 0%, rgba(255,240,248,0.75) 100%);
      text-align: center;
    }

    .mensaje-final {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 5vw, 3.5rem);
      color: var(--rosa-oscuro);
      font-style: italic;
      max-width: 700px;
      line-height: 1.3;
      margin-bottom: 2rem;
    }

    .confetti-btn {
      background: linear-gradient(135deg, var(--rosa-oscuro), #9060c0);
      color: white;
      border: none;
      padding: 1rem 2.8rem;
      border-radius: 50px;
      font-family: 'Nunito', sans-serif;
      font-size: 1.15rem;
      font-weight: 800;
      cursor: pointer;
      letter-spacing: 0.04em;
      box-shadow: 0 6px 22px rgba(160, 80, 200, 0.3);
      transition: transform 0.15s, box-shadow 0.15s;
      margin-bottom: 1.5rem;
    }

    .confetti-btn:hover {
      transform: translateY(-3px) scale(1.04);
      box-shadow: 0 10px 28px rgba(160, 80, 200, 0.4);
    }

    .confetti-btn:active {
      transform: scale(0.97);
    }

    .fecha-dia {
      font-size: 1rem;
      color: #b090a0;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 600;
    }

    /* Partículas confetti */
    .particula {
      position: fixed;
      pointer-events: none;
      border-radius: 50%;
      animation: caer linear forwards;
      z-index: 9999;
    }

    @keyframes caer {
      0% {
        transform: translateY(-20px) rotate(0deg);
        opacity: 1;
      }

      100% {
        transform: translateY(110vh) rotate(720deg);
        opacity: 0;
      }
    }

    /* Scroll nav */
    .nav-puntos {
      position: fixed;
      right: 1.2rem;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 10px;
      z-index: 100;
    }

    .punto {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: rgba(224, 126, 160, 0.3);
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
    }

    .punto.activo {
      background: var(--rosa-oscuro);
      transform: scale(1.3);
    }

    /* Flecha hacia abajo */
    .flecha-abajo {
      margin-top: 2.5rem;
      font-size: 1.5rem;
      color: var(--rosa-oscuro);
      animation: botar 1.5s ease-in-out infinite;
      display: block;
    }

    @keyframes botar {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(8px);
      }
    }

    @media (max-width: 480px) {
      .galeria {
        grid-template-columns: repeat(2, 1fr);
      }

      .sobre {
        padding: 2rem 1.3rem;
      }

      .razones-grid {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
</head>

<body>

  <!-- Flores flotando de fondo -->
  <div class="flores-bg" id="floresBg"></div>

  <!-- PORTADA -->
  <section id="portada">
    <span class="emoji-grande">🌸</span>
    <h1 class="titulo-portada">Para la mejor mamá<br>del mundo</h1>
    <p class="subtitulo-portada">Tengo algo especial para ti… ¿lo abres?</p>
    <button class="btn-abrir" onclick="abrirCarta()">💌 Abrir mi carta</button>
  </section>

  <!-- CARTA (oculta hasta que se abra) -->
  <div id="carta">

    <!-- Nav de puntos -->
    <nav class="nav-puntos" id="navPuntos" aria-label="Navegación de secciones">
      <div class="punto activo" onclick="irA(0)" title="Carta"></div>
      <div class="punto" onclick="irA(1)" title="Razones"></div>
      <div class="punto" onclick="irA(2)" title="Fotos"></div>
      <div class="punto" onclick="irA(3)" title="Video"></div>
      <!-- <div class="punto" onclick="irA(4)" title="Música"></div> -->
      <div class="punto" onclick="irA(5)" title="Final"></div>
    </nav>

    <!-- SECCIÓN 1: MENSAJE -->
    <section class="seccion sec-mensaje" id="sec0">
      <div class="sobre">
        <p class="saludo">Querida mamá,</p>
        <p class="parrafo">
          A veces no lo digo, pero siempre lo pienso ¡GRACIAS MAMÁ!.
        </p>
        <p class="parrafo">
          Gracias por todo lo que hiciste en silencio sin que nadie te lo reconociera. Gracias por aguantar mis días difíciles, mis malas caras, mis palabras duras, por no rendirte, por estar siempre en todo momento.
        </p>
        <p class="parrafo">
          Sé que de niño no entendía tus no, tus reglas, tus miedos, y ahora que soy adulto, entiendo que todo venía del amor más puro que existe.
        </p>
        <p class="parrafo">
          Perdón por las veces que elegí callar un te quiero o me alejé cuando más necesitabas un abrazo. Hoy veo todo lo que hiciste por mí. Las veces que renunciaste a ti para darme todo, el cansancio que llevabas en los hombros, y aún así me sonreías.
        </p>
        <p class="parrafo">
          Gracias por enseñarme a ser fuerte sin endurecer el corazón, por cuidarme cuando incluso no estabas bien, por enseñarme que el amor no siempre se grita, a veces se demuestra con presencia.
        </p>
        <p class="parrafo">
          Eres mi raíz, mi refugio, mi ejemplo. Si hoy soy una buena persona es porque tú sembraste lo mejor en mí.
        </p>
        <p class="parrafo">
          Gracias por no rendirte conmigo, por ser mi maestra, mi enfermerea, mi psicóloga, mi fan número uno.
        </p>
        <p class="parrafo destacado">
          🌺 Este mensaje es poco para lo que mereces, pero al menos quiero que sepas, estoy orgulloso de que seas mi mamá y si volviera a nacer volvería a elegirte a ti 🌺
        </p>
        <p class="firma">Con todo mi amor 💕</p>
      </div>
      <span class="flecha-abajo">↓</span>
    </section>

    <!-- SECCIÓN 2: RAZONES -->
    <section class="seccion sec-razones" id="sec1">
      <h2 class="sec-titulo">Razones para quererte infinito</h2>
      <div class="razones-grid" id="razonesGrid">
        <div class="razon-card"><span class="razon-emoji">🍳</span>
          <p class="razon-texto">Por ser la rockola más querida de la casa, siempre con una canción lista y el trapeador como micrófono cada domingo</p>
        </div>
        <div class="razon-card"><span class="razon-emoji">🤗</span>
          <p class="razon-texto">Tus abrazos que arreglan cualquier día malo</p>
        </div>
        <div class="razon-card"><span class="razon-emoji">💪</span>
          <p class="razon-texto">Tu fuerza que inspira todos los días</p>
        </div>
        <div class="razon-card"><span class="razon-emoji">😂</span>
          <p class="razon-texto">Tu sentido del humor que hace que todo sea más divertido</p>
        </div>
        <div class="razon-card"><span class="razon-emoji">🌙</span>
          <p class="razon-texto">Por estar siempre, en las buenas y en las malas, a toda hora</p>
        </div>
        <div class="razon-card"><span class="razon-emoji">✨</span>
          <p class="razon-texto">Por creer en mí</p>
        </div>
      </div>
      <span class="flecha-abajo">↓</span>
    </section>

    <!-- SECCIÓN 3: FOTOS -->
    <section class="seccion sec-fotos" id="sec2">
      <h2 class="sec-titulo">Nuestros momentos favoritos</h2>
      <div class="galeria">
        <div class="foto-slot"><img src="/img/img_5.jpeg" alt="Momento 1"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
        <div class="foto-slot"><img src="/img/img_1.jpg" alt="Momento 2"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
        <div class="foto-slot"><img src="/img/img_2.jpg" alt="Momento 3"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
        <div class="foto-slot"><img src="/img/img_3.jpg" alt="Momento 4"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
        <div class="foto-slot"><img src="/img/img_4.jpg" alt="Momento 5"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
        <div class="foto-slot"><img src="/img/img_0.jpg" alt="Momento 6"
            onerror="this.parentElement.classList.add('vacia');this.remove()"></div>
      </div>
      <span class="flecha-abajo">↓</span>
    </section>

    <!-- SECCIÓN 3b: VIDEO -->
    <section class="seccion sec-video" id="sec2b">
      <h2 class="sec-titulo">Un momento muy especial 🎬</h2>
      <div class="video-wrapper">
        <video controls playsinline preload="metadata" poster="/img/img_poster.jpg"
          onerror="this.closest('.video-wrapper').innerHTML='<p style=\'text-align:center;padding:2rem;color:#b090a0;font-style:italic\'>🎬 Agrega tu video en <code>/img/guayis.mp4</code></p>'">
          <source src="/img/guayis.mp4" type="video/mp4">
          Tu navegador no soporta video HTML5.
        </video>
        <!-- <p class="video-caption">💕 Un recuerdo que siempre llevaré en el corazón</p> -->
      </div>
      <span class="flecha-abajo">↓</span>
    </section>

    <!-- SECCIÓN 4: MÚSICA -->
    <!-- <section class="seccion sec-musica" id="sec3">
      <h2 class="sec-titulo">🎵 Nuestra playlist especial</h2>
      <div class="player">
        <div class="disco" id="disco"></div>
        <p class="cancion-titulo" id="cancionTitulo">A Thousand Years</p>
        <p class="cancion-artista" id="cancionArtista">Christina Perri</p>
        <div class="barra-progreso" id="barraProgreso">
          <div class="barra-fill" id="barraFill"></div>
        </div>
        <div class="controles">
          <button class="btn-ctrl" onclick="anteriorCancion()" title="Anterior">⏮️</button>
          <button class="btn-ctrl btn-play" id="btnPlay" onclick="togglePlay()" title="Play/Pausa">▶️</button>
          <button class="btn-ctrl" onclick="siguienteCancion()" title="Siguiente">⏭️</button>
        </div>
        <div class="lista-canciones" id="listaCanciones"></div>
        <p class="nota-musica">🎧 Búscalas en Spotify o YouTube con tu mamá</p>
      </div>
      <span class="flecha-abajo">↓</span>
    </section> -->

    <!-- SECCIÓN 5: FINAL -->
    <section class="seccion sec-final" id="sec4">
      <p class="mensaje-final">
        "Mamá, gracias por todo. Hoy, mañana y siempre."
      </p>
      <button class="confetti-btn" onclick="lanzarConfetti()">🎉 ¡Celebrar!</button>
      <p class="fecha-dia">Feliz Día de las Madres 🌸</p>
    </section>

  </div><!-- fin #carta -->

  <script>
    // ==================== FLORES DE FONDO ====================
    const floresEmojis = ['🌸', '🌺', '🌷', '💐', '🌻', '🌼', '💕', '✨', '🦋', '🍀'];
    const bg = document.getElementById('floresBg');
    console.log('bg encontrado:', bg);
    for (let i = 0; i < 22; i++) {
      const el = document.createElement('div');
      el.className = 'flor';
      el.textContent = floresEmojis[Math.floor(Math.random() * floresEmojis.length)];
      el.style.left = Math.random() * 100 + '%';
      el.style.fontSize = (1.2 + Math.random() * 1.6) + 'rem';
      el.style.animationDuration = (12 + Math.random() * 18) + 's';
      el.style.animationDelay = (Math.random() * 20) + 's';
      // el.style.opacity = 0.15 + Math.random() * 0.25;
      el.style.opacity = 0.4 + Math.random() * 0.3;
      bg.appendChild(el);
    }

    // ==================== ABRIR CARTA ====================
    function abrirCarta() {
      document.getElementById('portada').style.display = 'none';
      document.getElementById('carta').style.display = 'block';
      observarSecciones();
      // iniciarPlayer();
      setTimeout(() => window.scrollTo({
        top: 0
      }), 50);
    }

    // ==================== NAV PUNTOS ====================
    const secciones = ['sec0', 'sec1', 'sec2', 'sec2b', 'sec4'];

    function irA(i) {
      document.getElementById(secciones[i]).scrollIntoView({
        behavior: 'smooth'
      });
    }

    function observarSecciones() {
      const puntos = document.querySelectorAll('.punto');
      const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            const i = secciones.indexOf(e.target.id);
            puntos.forEach((p, j) => p.classList.toggle('activo', j === i));
          }
        });
      }, {
        threshold: 0.4
      });
      secciones.forEach(id => obs.observe(document.getElementById(id)));
    }

    // ==================== PLAYER ====================
    //   const playlist = [
    //     { titulo: 'A Thousand Years', artista: 'Christina Perri', dur: '4:45' },
    //     { titulo: 'Gracias a la vida', artista: 'Mercedes Sosa', dur: '3:50' },
    //     { titulo: 'You Are the Sunshine', artista: 'Stevie Wonder', dur: '4:01' },
    //     { titulo: 'La llorona', artista: 'Chavela Vargas', dur: '4:20' },
    //     { titulo: 'Count on Me', artista: 'Bruno Mars', dur: '3:18' },
    //   ];
    //   let cancionActual = 0;
    //   let reproduciendo = false;
    //   let timerProgreso = null;
    //   let progreso = 0;

    //   function iniciarPlayer() {
    //     renderLista();
    //     actualizarDisplay();
    //   }

    //   function renderLista() {
    //     const lista = document.getElementById('listaCanciones');
    //     lista.innerHTML = playlist.map((c, i) => `
    //   <div class="cancion-item ${i === cancionActual ? 'activa' : ''}" onclick="cambiarCancion(${i})">
    //     <span class="cancion-num">${i === cancionActual && reproduciendo ? '🎵' : (i + 1)}</span>
    //     <span class="cancion-info">
    //       <span class="cancion-nombre">${c.titulo}</span><br>
    //       <span style="font-size:0.8rem;color:#b090a0;">${c.artista}</span>
    //     </span>
    //     <span class="cancion-dur">${c.dur}</span>
    //   </div>
    // `).join('');
    //   }

    //   function actualizarDisplay() {
    //     const c = playlist[cancionActual];
    //     document.getElementById('cancionTitulo').textContent = c.titulo;
    //     document.getElementById('cancionArtista').textContent = c.artista;
    //   }

    //   function togglePlay() {
    //     reproduciendo = !reproduciendo;
    //     document.getElementById('btnPlay').textContent = reproduciendo ? '⏸️' : '▶️';
    //     const disco = document.getElementById('disco');
    //     if (reproduciendo) {
    //       disco.classList.add('girando');
    //       avanzarProgreso();
    //     } else {
    //       disco.classList.remove('girando');
    //       clearInterval(timerProgreso);
    //     }
    //     renderLista();
    //   }

    //   function avanzarProgreso() {
    //     timerProgreso = setInterval(() => {
    //       progreso = Math.min(progreso + 0.5, 100);
    //       document.getElementById('barraFill').style.width = progreso + '%';
    //       if (progreso >= 100) siguienteCancion();
    //     }, 150);
    //   }

    //   function cambiarCancion(i) {
    //     clearInterval(timerProgreso);
    //     progreso = 0;
    //     document.getElementById('barraFill').style.width = '0%';
    //     cancionActual = i;
    //     actualizarDisplay();
    //     renderLista();
    //     if (reproduciendo) avanzarProgreso();
    //   }
    //   function siguienteCancion() {
    //     cambiarCancion((cancionActual + 1) % playlist.length);
    //   }
    //   function anteriorCancion() {
    //     cambiarCancion((cancionActual - 1 + playlist.length) % playlist.length);
    //   }

    // ==================== CONFETTI ====================
    function lanzarConfetti() {
      const colores = ['#F7A8C4', '#D8C9F7', '#B5E8C8', '#FFD6B0', '#FFF0A0', '#E07EA0', '#9060C0'];
      for (let i = 0; i < 100; i++) {
        const p = document.createElement('div');
        p.className = 'particula';
        p.style.cssText = `
      left: ${Math.random() * 100}vw;
      top: -20px;
      width: ${6 + Math.random() * 10}px;
      height: ${6 + Math.random() * 10}px;
      background: ${colores[Math.floor(Math.random() * colores.length)]};
      animation-duration: ${2 + Math.random() * 3}s;
      animation-delay: ${Math.random() * 1.5}s;
      border-radius: ${Math.random() > 0.5 ? '50%' : '2px'};
    `;
        document.body.appendChild(p);
        setTimeout(() => p.remove(), 6000);
      }
    }
  </script>
</body>

</html>