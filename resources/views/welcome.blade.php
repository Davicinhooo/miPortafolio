<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>David | Software Engineer</title>

    <!-- 🔌 ESTE ES EL CABLE MÁGICO: Conecta Vite con tu app.css y app.js -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    </script>

</head>
<body class="dark:bg-stone-900 font-sans antialiased selection:bg-amber-500 selection:text-stone-950">

    <button onclick="toggleTheme()"
        class="fixed top-5 right-5 md:top-8 md:right-8 z-50
               w-12 h-12 flex items-center justify-center rounded-full
               bg-white dark:bg-stone-800 
               border border-stone-200 dark:border-stone-700
               text-stone-600 dark:text-stone-300
               hover:bg-stone-100 dark:hover:bg-stone-700
               shadow-sm hover:shadow-md transition-all duration-300"
        aria-label="Alternar tema oscuro">
    
    <img src="{{ asset('icons/luna.png') }}" 
         alt="Activar Modo Oscuro" 
         class="w-6 h-6 block dark:hidden">

    <img src="{{ asset('icons/sol.png') }}" 
         alt="Activar Modo Claro" 
         class="w-6 h-6 hidden dark:block">

    </button>

    <!-- Hero Section: Monocromático Cálido & Amigable -->
    <section class="min-h-screen text-stone-100 flex items-center justify-center px-6">
        
        <div class="max-w-3xl mx-auto text-center py-20">

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-neutral-900 dark:text-white">
            Hola, soy <span class="bg-gradient-to-r from-yellow-400 to-teal-500 bg-clip-text text-yellow-400">David</span>
            </h1>

            <!-- Título Principal -->
            <h2 class="text-2xl md:text-4xl font-bold text-sky-500 dark:text-sky-500 mb-6">
            Software Engineering Student • AI Focus
            </h2>
                                  
            <!-- Subtítulo -->
            <p class="text-base sm:text-xl dark:text-neutral-400 text-black font-normal max-w-2xl mx-auto mb-10 leading-relaxed">
                Estudiante de Ingeniería de Software con IA, apasionado por la tecnología y la innovación. Me especializo en el desarrollo de aplicaciones web y soluciones de inteligencia artificial, siempre buscando aprender y crecer en el mundo del software.
            </p>

            <!-- Botones de Acción -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#proyectos" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-stone-950 font-semibold text-base transition-all duration-200 shadow-xl shadow-orange-500/10 hover:scale-[1.02]">
                    Explorar mis trabajos
                </a>

                <a href="#contacto" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-stone-950 font-semibold text-base transition-all duration-200 shadow-xl shadow-orange-500/10 hover:scale-[1.02]">
                    Conversemos
                </a>
            </div>

            <!-- Pie de hero -->
            <div class="mt-16 pt-8 border-t border-stone-800/80 flex items-center justify-center gap-6 text-stone-500 text-sm font-mono">
                <span>Java</span><span>•</span><span>SQL</span><span>•</span><span>Docker</span><span>•</span><span>PHP</span>
            </div>

        </div>
    </section>

    <!-- SECCIÓN DE PROYECTOS -->
    <section id="proyectos" class="min-h-screen py-24 px-6">
        
        <h2 class="text-3xl md:text-4xl font-bold text-center dark:text-stone-100 text-black text: mb-12">
            Mis Proyectos
        </h2>
        
        <!-- Grid de Proyectos: 2x2 en PC, 1 columna en celular -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
    
    <!-- TARJETA 1: Clínica (Individual) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 transition-colors">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Pagina Web - Clinica</h3>
            <p class="text-sm font-semibold dark:text-stone-300 text-black mb-4">Proyecto Individual</p>
            <p class="dark:text-stone-300 text-black leading-relaxed">
                El proyecto conciste en la creacion de una pagina web que ayuda a gestionar todo lo relacionado a la clinica, conteniendo un sistema de autenticacion y sus respectivas API para la interoperabilidad de los datos, contiene una interfaz moderna haciendo que sea agradable a la vista, todo esto guardando datos en la nube con CleverCloud y lanzando la pagina en Render.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">PHP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laragon</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laravel</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Render</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Davicinhooo/WebHospital" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://webhospital-zyez.onrender.com" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Página</a>
            <button onclick="abrirModalVideo('{{ asset('videos/WebHospital.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 2: Mini Market (Grupal) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 transition-colors">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Sistema de Ventas MiniMarket</h3>
            <p class="text-sm font-semibold dark:text-stone-300 text-black mb-4">Proyecto Grupal</p>
            <p class="dark:text-stone-300 text-black leading-relaxed">
                En este trabajo colaborativo sobre un sistema de ventas para un MiniMarket, me encargue de la logica en las secciones producto, categoria, el login y el panel de gestion, por otro, conectar el sistema a una base de datos en la nube la cual es la de CleverCloud, el apartado del frontend en dichas secciones y el empaquetado del programa para asi obtener el ejecutable .exe y ejecutarlo sin necesidad de tener instalado el entorno de desarrollo.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Java</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">JPackage</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">HeidiSQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Davicinhooo/SistemaDeVentas" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://github.com/Davicinhooo/SistemaDeVentas/releases/download/v1.0.0/Minimarket-1.0.0.exe" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Descargar Instalador</a>
            <button onclick="abrirModalVideo('{{ asset('videos/MiniMarket.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 3: Gestor de ventas (Individual) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 transition-colors">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Gestor de ventas</h3>
            <p class="text-sm font-medium dark:text-stone-300 text-black mb-4">Proyecto Individual</p>
            <p class="dark:text-stone-300 text-black  leading-relaxed">
                Siendo este mi primer proyecto de programacion, fue la creacion de un gestor de ventas o sistema de ventas, conteniendo una base de datos simple pero efectiva para este caso, aparte de subirlo a una nube tambien se le creo su respectivo .exe para asi facilitar la prueba de este mismo.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Java</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">JPackage</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">HeidiSQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Davicinhooo/GestorVentas" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://github.com/Davicinhooo/GestorVentas/releases/download/v1.0.0/SistemaVentas-1.0.0.exe" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Descargar Instalador</a>
            <button onclick="abrirModalVideo('{{ asset('videos/GestorVentas.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 4: Pagina escolar (Grupal) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 transition-colors">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Pagina Escolar - Innovatech</h3>
            <p class="text-sm font-medium dark:text-stone-300 text-black mb-4">Proyecto Grupal</p>
            <p class="dark:text-stone-300 text-black  leading-relaxed">
                Trabajo colaborativo donde, se diseño una pagina web basada en un instituto conteniendo un sistema de autenticacion, un sistema de matriculas y el respectivo sistema para agregar tanto alumnos, profesores y cursos, en este proyecto me encargue del apartado del backend como la base de datos, las logica usadas, el uso de CleverCloud y la desplegada en Render.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">PHP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laravel</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Render</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/HellomynameisJJ/appLoginMatricula-Jostin" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://innovatech-vb4m.onrender.com" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Ver Página</a>
            <button onclick="abrirModalVideo('{{ asset('videos/PaginaInnovatec.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

</div>
    </section>

    <!-- Modal Global de Video (Único para toda la web) -->
<div id="modalGlobal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/80 backdrop-blur-sm transition-opacity">
    <div class="relative w-11/12 max-w-4xl bg-neutral-900 p-2 rounded-xl border border-neutral-700 shadow-2xl">
        
        <button onclick="cerrarModalVideo()" class="absolute -top-4 -right-4 bg-red-600 hover:bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold shadow-lg">
            X
        </button>

        <video id="reproductorGlobal" class="w-full rounded-lg" controls>
            <!-- El src se inyectará aquí usando JavaScript -->
        </video>
    </div>
</div>
</div>

</body>
</html> 