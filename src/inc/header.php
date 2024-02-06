<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">
    <link rel="stylesheet" href="src/css/testCarousel.css">
    <script src="https://cdn.tailwindcss.com"></script>

    
    <!-- Lien vers le fichier JavaScript pour les fonctionnalités interactives -->
    
    <title>Fablab18</title>
</head>

<header class="">
        <div class="bg-gray-300 p-4 text-black text-center">
            <div class="container mx-auto flex items-center justify-center">
                <img id="logo" src="img/1(4).png" title="logo" class="w-32 h-32">
                <h1 class="text-4xl font-permanent-marker font-bold ml-2">Fablab18</h1>
            </div>
        </div>

        <!-- Balise nav visible uniquement en version desktop -->
        <nav id="desktop-menu" class="hidden lg:block p-2">
            <div class="container mx-auto p-8">
                <div class="max-w-2xl mx-auto">
                    <ul class="flex justify-between text-2xl">
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="index.php">Accueil</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="service.php">Nos services</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="galerie.php">Galerie</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Menu burger pour la version mobile -->
        <nav id="mobile-menu" class=" lg:hidden p-2">
            <div class="container mx-auto p-8">
                <div class="max-w-2xl mx-auto">
                    <button id="burger-btn" class="text-black focus:outline-none">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <ul id="mobile-menu-list" class="hidden text-2xl mt-4">
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="index.php">Accueil</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="service.php">Nos services</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="galerie.php">Galerie</a></li>
                        <li class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const burgerBtn = document.getElementById('burger-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            burgerBtn.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>



<!--fin du header-->
</html>

