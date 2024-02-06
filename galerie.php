<?php include ('src/inc/header.php');?>
<body>
    <!-- Conteneur principal pour le carrousel -->
    <div class="container">
        <!-- Élément carrousel -->
        <div class="carousel">
            <!-- Conteneur interne pour les diapositives -->
            <div class="carousel-inner">
                <!-- Première diapositive -->
                <div class="w-1/2 h-1/2 slide content-center">
                    <!-- Image de la première diapositive -->
                    <img src="https://images.pexels.com/photos/1242764/pexels-photo-1242764.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Image 1">
                </div>
                <!-- Deuxième diapositive -->
                <div class="w-auto h-auto slide">
                    <!-- Image de la deuxième diapositive -->
                    <img src="https://images.pexels.com/photos/1329711/pexels-photo-1329711.jpeg?auto slide=compress&cs=tinysrgb&w=1260&h=750&dpr=2p"
                        alt="Image 2">
                </div>
                <!-- Troisième diapositive -->
                <div class="w-8 h-auto slide">
                    <!-- Image de la troisième diapositive -->
                    <img src="https://images.pexels.com/photos/3183132/pexels-photo-3183132.jpeg?auto slide=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Image 3">
                </div>
                <!-- Quatrième diapositive -->
                <div class="w-8 h-auto slide">
                    <!-- Image de la quatrième diapositive -->
                    <img src="https://images.pexels.com/photos/2739013/pexels-photo-2739013.jpeg?auto slide=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Image 4">
                </div>
                <!-- Cinquième diapositive -->
                <div class="w-8 h-auto slide">
                    <!-- Image de la cinquième diapositive -->
                    <img src="https://images.pexels.com/photos/3555161/pexels-photo-3555161.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Image 5">
                </div>
            </div>
            <!-- Conteneur pour les boutons de navigation -->
            <div class="carousel-controls">
                <!-- Bouton pour passer à la diapositive précédente -->
                <button class="text-white rounded-xl" id="prev">Précédent</button>
                <!-- Bouton pour passer à la diapositive suivante -->
                <button class="text-white rounded-xl" id="next">Suivant</button>
            </div>
            <!-- Conteneur pour les points de navigation -->
            <div class="carousel-dots"></div>
        </div>
    </div>
</body>
<?php include ('src/inc/footer.php');?>
<script src="galerie.js" type="text/javascript"></script>