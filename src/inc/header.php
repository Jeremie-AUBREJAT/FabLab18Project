<header class="mb-20">
        <div class="bg-gray-300 p-4 text-black text-center h-64" style="background-image: url('img/fond.png'); background-size: cover;">>
            <div class="container mx-auto flex items-center justify-center">
                <img id="logo" src="img/1(4).png" title="logo" class="w-32 h-32">
                <h1 class="text-4xl font-permanent-marker font-bold ml-2">Fablab18</h1>
            </div>
            <!-- Balise nav visible uniquement en version desktop -->
        <nav id="desktop-menu" class="hidden lg:block p-2">
            <div class="container mx-auto p-8">
                <div class="max-w-2xl mx-auto">
                    <ul class="flex justify-between text-2xl">
                        <li class="border-solid border-2 border-gray-600 text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all 
                        duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="index.php">Accueil</a></li>
                        <li class="border-solid border-2 border-gray-600 text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all 
                        duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="service.php">Nos services</a></li>
                        <li class="border-solid border-2 border-gray-600 text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all 
                        duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="galerie.php">Galerie</a></li>
                        <li class="border-solid border-2 border-gray-600 text-black font-semibold inline-block px-4 py-2  bg-gray-300 hover:text-white hover:bg-gray-600 transition-all 
                        duration-300 rounded-2xl shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        </div>
        <!-- Menu burger pour la version mobile -->
        <button id="burger-btn" class="px-4 py-2 mx-6 text-black focus:outline-none sm:block lg:hidden">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
        <nav id="mobile-menu" class="hidden sm:block lg:hidden p-2 bg-gray-300">
            <div class="container mx-auto p-8">
                <div class="max-w-2xl mx-auto">
                    
                    <ul id="mobile-menu-list" class="w-full h-full text-2xl mt-4 flex-wrap">
                        <li class="text-black text-center font-semibold block px-4 py-2 space-y-4 bg-white hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl 
                        transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none mb-4"><a href="index.php">Accueil</a></li>
                        <li class="text-black text-center font-semibold block px-4 py-2 space-y-4  bg-white hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl 
                        transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none mb-4"><a href="service.php">Nos services</a></li>
                        <li class="text-black text-center font-semibold block px-4 py-2 space-y-4 bg-white hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl 
                        transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none mb-4"><a href="galerie.php">Galerie</a></li>
                        <li class="text-black text-center font-semibold block px-4 py-2 space-y-4 bg-white hover:text-white hover:bg-gray-600 transition-all duration-300 rounded-2xl shadow-xl 
                        transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none mb-4"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
    </header>
    <script src="src/js/burgerMenu.js"></script>

    <!--<script>//fonction pour le menu burger

function afficherNav() {
    var nav = document.getElementById("mobile-menu");
     if (nav.classList.contains("hidden")){
      nav.classList.remove("hidden");
     }else{
      nav.classList.add("hidden");
     }};
  
  // Ajouter un gestionnaire d'événements au bouton
  document.getElementById("burger-btn").addEventListener("click", afficherNav);
</script>-->

<!--fin du header-->

</html>