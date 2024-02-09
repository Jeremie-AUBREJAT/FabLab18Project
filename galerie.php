<?php include ('src/inc/head.php');?>
<body>

<?php include ('src/inc/header.php');?>
    <!-- Conteneur principal pour le carrousel -->
    <div class="container mx-auto px-4">
        <!-- Élément carrousel -->
        <div class="carousel relative overflow-hidden mt-6">
            <!-- Conteneur interne pour les diapositives -->
            <div class="carousel-inner flex">
                <!-- Première diapositive -->
                <div class="slide">
                   
                    <img src="img/1(3).jpg"class="w-1/2 max-w-[50%] md:w-auto h-auto"
                        alt="represente une serviette">
                </div>
                <!-- Deuxième diapositive -->
                <div class="slide">
                    
                    <img src="img/1(4).jpg"class="w-1/2 md:w-auto h-auto"
                        alt="represente un t-shirt">
                </div>
                <!-- Troisième diapositive -->
                <div class="slide">
                 
                    <img src="img/1(2).jpg"class="w-1/2 md:w-auto h-auto"
                        alt="represente une horloge">
                </div>
                <!-- Quatrième diapositive -->
                <div class="slide">
                  
                    <img src="img/1(5).jpg"
                        alt="poignée de baby-foot">
                </div>
                <!-- Cinquième diapositive -->
                <div class="slide">
                    
                    <img src="img/1(6).jpg"
                        alt="represente une plaque route 66">
                </div>
                <!-- Sixième diapositive -->
                <div class="slide">
                 
                    <img src="img/1(7).jpg"
                        alt="reprensente un lavabo en bois">
                </div>
                <!-- 7eme diapositive -->
                <div class="slide">
                  
                    <img src="img/1(8).jpg"
                        alt="represente une plaque avec un dragon">
                </div>
                <!-- 8eme diapositive -->
                <div class="slide">
                  
                    <img src="img/1(10).jpg"
                        alt="represente une horloge">
                </div>
                <!-- 9eme diapositive -->
                <div class="slide">
                    
                    <img src="img/1(13).jpg"
                        alt="represente des objets imprimés en 3d">
                </div>
                <!-- 10eme diapositive -->
                <div class="slide">
                   
                    <img src="img/1(14).jpg"
                        alt="represente des objets imprimés en 3d">
                </div>
                <!-- 11eme diapositive -->
                <div class="slide">
                    <!-- Image de la cinquième diapositive -->
                    <img src="img/1(15).jpg"
                        alt="represente un capteur de distance">
                </div>
                <!-- 12eme diapositive -->
                <div class="slide">
                    
                    <img src="img/1(16).jpg"
                        alt="écusson brodé avec une voiture">
                </div>
                <!-- 13eme diapositive -->
                <div class="slide">
                   
                    <img src="img/1(17).jpg"
                        alt="écusson brodé avec une voiture">
                       
                </div>
                <!-- 14eme diapositive -->
                <div class="slide">
                  
                    <img src="img/1(18).jpg"
                        alt="écusson brodé avec une voiture">
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

<?php include ('src/inc/footer.php');?>

<script type="text/javascript" src="src/js/testCarousel.js" async></script>
</body>
