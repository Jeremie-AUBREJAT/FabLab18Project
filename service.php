
<?php include ('src/inc/head.php');?>

<body>
<?php include ('src/inc/header.php');?> <!-- Rappel du header -->
    <div class="formation flex">
        <select name="session" class="bg-gray-500 dark:bg-gray-300 text-black rounded-md shadow-lg ml-20 p-3 text-xl font-semibold">
            <option value="" disabled selected>Nos formation</option>
            <option value="1">Imprimante 3D</option> 
            <option value="2">Montage vidéo</option>
            <option value="3">Design 2D et 3D</option>   <!--  Menu déroulant pour les formation -->
            <option value="4">Arduino</option>
            <option value="5">Fraiseuse CNC</option>
            <option value="6">Brodeuse numérique</option>
        </select>
    </div>

        <!-- J'ai mis des balise avec chacun une value qu'on pourra rappeler en JS pour cacher ou afficher les div corespondantes -->

    <div class="flex">

        <!-- Envie d'une formation -->

        <div class="divOriginal grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap lg:text-center">Envie d'une formation ?</p>
                <br>
                <p class="lg:text-center">Vous souhaitez commencer une formation sur une machine mais vous ne savez pas laquelles, nous vous en proposons plusieurs adaptées à tout type de besoins.
                    Sélectionnez une formation sur dans le menu déroulant ci-dessus pour accéder à ces informations. </p>
            </div>
            <div class="p-10 animate-slideLeft">
            <img class="rounded-2xl" src="img/entreFabLab.webp" alt="Image représentant l'entrée du FabLab." loading="lazy">
            </div>
        </div>

            <!-- Imprimante 3D -->

        <div id="div_1" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10"> 
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation pour Imprimante 3D</p>
                <p class="lg:m-10 lg:text-center">Envie de créer sa propre figurine ou réparer un objet cassé ? L’imprimante 3D pour vous servir. Venez apprendre les bases de la manipulation 3D en utilisant vos filaments PLA pour un choix total de la couleur !</p>
            </div>
            <div class="p-10 animate-slideLeft">
                    <img class="border-2 border-gray-600 rounded-2xl" src="img/1(6).webp" alt ="Image qui représentee une imrpimante 3D et 2d mais pas un téléphone, le lapsus est souvent fait! Nous n'avons aucune affiliations avec Takotek" loading="lazy">
            </div>   
        </div>

            <!-- Montage vidéo -->

        <div id="div_2" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation montage vidéo</p>
                <p class="lg:m-10 lg:text-center">Passionné(e) par le montage ? Venez apprendre à modifier vos propres vidéos avec le logiciel Pinnacle !
                    Logiciel de montage vidéo de niveau professionnel. Réalisez vos montages librement avec un contrôle et une précision exceptionnels. Chez nous, vous apprendrez à votre rythme à utiliser ce logiciel et commencerez à prendre plaisir dessus.
                </p>
            </div>
            <div class= " p-10 animate-slideLeft">
                <img class="rounded-2xl" src="img/1(8.1).webp" alt="Toujour pas un téléphone mais une image représentant un écran pour montage vidéo" loading="lazy">
            </div>
        </div>

            <!-- Maquette 3D ou 2D -->

        <div id="div_3" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation maquette 3D et 2d</p>
                <p class="m-5 lg:m-10 lg:text-center">Apprenez à maquetter en 2D ou en 3D sur un logiciel dédié !</p>
            </div>
            <div class="p-10 animate-slideLeft">
                <img class="rounded-2xl" src="img/design3D.webp" alt="Image représentant le design 3D et 2D." loading="lazy">
            </div>
        </div>

            <!-- Arduino -->

        <div id="div_4" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation arduino</p>
                <p class="lg:m-10 lg:text-center">Envie de faire des leds qui réagissent à la musique ? Un détecteur de mensonge (enfin presque) ? Ou alors une autre idée ? Venez apprendre à vous servir d’un Arduino avant de vous procurer le vôtre et de faire vos expériences à la maison. Les cours vous feront découvrir une grande partie de ce qu’il est possible de faire avec !</p>
            </div>
            <div class="p-10 animate-slideLeft">
                <img class="rounded-2xl" src="img/arduino.webp" alt="Image représentant un arduino" loading="lazy">
            </div>
        </div>

            <!-- Fraiseuse -->

        <div id="div_5" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation fraiseuse</p>
                <p class="lg:m-10 lg:text-center">Envie de tailler ou faire une découpe dans un matériaux comme le métal ou le bois pour créer un élément de décoration ?
                    Venez vous essayer à notre Fraiseuse pour réaliser toutes vos envies, il vous suffira simplement de vous de la pièce que vous désirez modifier !</p>
            </div>
            <div class="p-10 animate-slideLeft">
                <img class ="border-2 border-gray-600 rounded-2xl" src="img/image1.webp" alt="Image en 3D représentant une fraiseuse" >
            </div>
        </div>

            <!-- Brodeuse numérique -->

        <div id="div_6" class="allDiv grid grid-cols-2 max-lg:grid-cols-1 lg:p-10">
            <div class="m-5 lg:m-10 p-2 lg:p-10 text-3xl rounded-3xl bg-gray-300 shadow-xl animate-slideRight">
                <p class="text-5xl font-semibold text-wrap text-center">La formation brodeuse numérique</p>
                <p class="lg:m-10 lg:text-center">Envie de retrouver son logo ou dessin sur sweat, t-shirt, casquette ou une serviette ? Venez le dessiner et le broder sur le linge de votre choix !</p>
            </div>
            <div class="p-10 animate-slideLeft">
                <img class="border-2 border-gray-600 rounded-2xl" src="img/brodeuse.webp" alt="Image représentant une brodeuse.">
            </div>
        </div>
    </div>
    <div class="flex justify-center text-3xl text-wrap text-center mx-5 lg:mx-20 mb-10 p-2 lg:p-10 lg:pb-15 bg-gray-300 rounded-3xl shadow-xl">
        Dans le vaste monde des technologies numériques, des formations spécialisées captivent les esprits et stimulent la créativité.
        De l'impression 3D au montage vidéo, de la modélisation 3D à l'Arduino, de la fraiseuse numérique à la brodeuse numérique,
        ces apprentissages ouvrent les portes d'un univers où l'innovation et la fabrication se conjuguent harmonieusement.
        Explorez, créez, et laissez libre cours à votre imagination dans ce monde numérique en constante évolution.
    </div>

<?php include ('src/inc/footer.php');?> <!--Rappel du footer -->

<!-- Lien vers le javascript et le jquery -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script src="src/js/service.js" async></script>
    <link rel="stylesheet" href="src/css/move.css">
</body>