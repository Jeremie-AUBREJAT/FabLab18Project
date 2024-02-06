<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">
    <link rel="stylesheet" href="src/css/testCarousel.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Lien vers le fichier JavaScript pour les fonctionnalités interactives -->
    <script src="testCarousel.js" async></script>
    <title>Fablab18</title>
</head>

<header class="">
    <div class="bg-gray-300 p-4 text-black text-center">
        <div class="container mx-auto flex items-center justify-center">
            <img id="logo" src="img/1(4).png" title="logo" class="w-32 h-32">
            <h1 class="text-4xl font-permanent-marker font-bold ml-2">Fablab18</h1>
        </div>
    </div>

    <!-- Menu burger content -->
    <div class="lg:hidden">
        <input type="checkbox" id="burger-toggle" class="hidden">
        <label for="burger-toggle" class="cursor-pointer focus:outline-none">
        </label>

        <div class="bg-white fixed inset-0 z-50 hidden" id="burger-menu">
            <div class="container mx-auto p-4">
                <ul class="flex flex-col items-center text-2xl">
                    <li><a href="index.php" class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Accueil</a></li>  
                    <li><a href="service.php" class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Nos services</a></li>
                    <li><a href="galerie.php" class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Galerie</a></li>
                    <li><a href="contact.php" class="text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Contact</a></li>      
                </ul>
            </div>
        </div>
    </div>

    <!-- Balise nav visible uniquement en version desktop -->
    <nav class="hidden lg:block p-2">
        <div class="container mx-auto">
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var burgerToggle = document.getElementById('burger-toggle');
            var burgerMenu = document.getElementById('burger-menu');
            var navBar = document.querySelector('nav');
    
            burgerToggle.addEventListener('change', function() {
                if (window.innerWidth <= 768) {
                    // En mode mobile, bascule la visibilité du menu burger
                    burgerMenu.classList.toggle('hidden', !burgerToggle.checked);
                } else {
                    // En mode desktop, bascule la visibilité de la barre de navigation
                    navBar.classList.toggle('hidden', burgerToggle.checked);
                }
            });            
        });
    </script>
    
</header>



<!--fin du header-->
</html>

