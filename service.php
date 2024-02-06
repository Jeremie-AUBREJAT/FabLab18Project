
<body>

<?php include ('src/inc/header.php');?>
   <div class="formation flex">
        <select name="session" class="bg-gray-300 text-black rounded-md shadow-lg p-5 m-5 text-xl">

<body>
    <div class="formation flex">
        <select name="session" class="bg-gray-500 text-black rounded-md shadow-lg p-3 m-5 text-xl">
            <option value="">Nos formation</option>
            <option value="1">Imprimante 3D</option> 
            <option value="2">Montage vidéo</option>
            <option value="3">Design 2D et 3D</option>
            <option value="4">Arduino</option>
            <option value="5">Fraiseuse CNC</option>
            <option value="6">Brodeuse numérique</option>
        </select>
        </div>
        <!-- J'ai mis des balise avec chacun une value qu'on pourra rappeler en JS pour cacher ou afficher les div corespondantes -->
<div class="flex">
<div class="divOriginal grid grid-cols-2 gap-4">
    <div class="p-10 text-3xl">
        <p class="p-8 text-5xl text-wrap text-center">Envie d'une formation ?</p> <!-- Ajout bordure texte, arrondis quelque fioriture-->
        <p class="text-center">Vous souhaitez commencer une formation sur une machine mais vous ne savez pas laquelles, nous vous en proposons plusieurs adaptées à tout type de besoins.
            Sélectionnez une formation sur dans le menu déroulant ci-dessus pour accéder à ces informations. </p>
    </div>
    <div class="p-10"><img src="img/entreFabLab.jpg" alt="Image représentant l'entrée du FabLab."></div>
</div>
        <div id="div_1" class="allDiv grid grid-cols-2 gap-4"> 
            <div class="p-10 text-3xl">
                <p class="p-8 text-5xl text-wrap text-center">La formation pour Imprimante 3D</p>
                <p class="text-center">Envie de créer sa propre figurine ou réparer un objet cassé ? L’imprimante 3D pour vous servir. Venez apprendre les bases de la manipulation 3D en utilisant vos filaments PLA pour un choix total de la couleur !</p></div>
            <div class="p-10"><img src="img/image3.png" alt ="Image qui représentee une imrpimante 3D et 2d mais pas un téléphone, le lapsus est souvent fait! Nous n'avons aucune affiliations avec Takotek"></div>   
        </div>
        <div id="div_2" class="allDiv grid grid-cols-2 gap-4">
            <div><p>Passionné(e) par le montage ? Venez apprendre à modifier vos propres vidéos avec le logiciel Pinnacle !
              Logiciel de montage vidéo de niveau professionnel. Réalisez vos montages librement avec un contrôle et une précision exceptionnels. Chez nous, vous apprendrez à votre rythme à utiliser ce logiciel et commencerez à prendre plaisir dessus.</p></div>
            <div><img src="img/image2.png" alt="Toujour pas un téléphone mais une image représentant un écran pour montage vidéo"></div>
        </div>
        <div id="div_3" class="allDiv grid grid-cols-2 gap-4">
            <div><p>Apprenez à maquetter en 2D ou en 3D sur un logiciel dédié !</p></div>
            <div><img src="img/design3D.png" alt="Image représentant le design 3D et 2D."></div>
        </div>
        <div id="div_4" class="allDiv grid grid-cols-2 gap-4">
            <div><p>Envie de faire des leds qui réagissent à la musique ? Un détecteur de mensonge (enfin presque) ? Ou alors une autre idée ? Venez apprendre à vous servir d’un Arduino avant de vous procurer le vôtre et de faire vos expériences à la maison. Les cours vous feront découvrir une grande partie de ce qu’il est possible de faire avec !</p></div>
            <div><img src="img/arduino.jpg" alt="Image représentant un arduino"></div>
        </div>
        <div id="div_5" class="allDiv grid grid-cols-2 gap-4">
            <div> <p>Envie de tailler ou faire une découpe dans un matériaux comme le métal ou le bois pour créer un élément de décoration ?
            Venez vous essayer à notre Fraiseuse pour réaliser toutes vos envies, il vous suffira simplement de vous de la pièce que vous désirez modifier !</p></div>
            <div><img src="img/image1.png" alt="Image en 3D représentant une fraiseuse"></div>
        </div>
        <div id="div_6" class="allDiv grid grid-cols-2 gap-4">
            <div><p>Envie de retrouver son logo ou dessin sur sweat, t-shirt, casquette ou une serviette ? Venez le dessiner et le broder sur le linge de votre choix !</p></div>
            <div><img src="img/brodeuse.png" alt="Image représentant une brodeuse."></div>
        </div>
</div>
        
    
    
        <?php include ('src/inc/footer.php');?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="service.js" async></script>
</body>
