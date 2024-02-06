<?php include ('src/inc/header.php');?>
<body>
    <div class="formation flex">
        <select name="session" class="bg-gray-300 text-black rounded-md shadow-lg p-5 m-5 text-xl">
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

        <div class="divOriginal p-5 m-5 text-3xl">Choisissez une formation</div>
        <div id="div_1" class="allDiv p-5 m-5 text-3xl">
            <p>Envie de créer sa propre figurine ou réparer un objet cassé ? L’imprimante 3D pour vous servir. Venez apprendre les bases de la manipulation 3D en utilisant vos filaments PLA pour un choix total de la couleur !</p>
            <a href="img/impri.jpg"></a>
        </div>
        <div id="div_2" class="allDiv p-5 m-5 text-3xl">
           <p>Passionné(e) par le montage ? Venez apprendre à modifier vos propres vidéos avec le logiciel Pinnacle !
              Logiciel de montage vidéo de niveau professionnel. Réalisez vos montages librement avec un contrôle et une précision exceptionnels. Chez nous, vous apprendrez à votre rythme à utiliser ce logiciel et commencerez à prendre plaisir dessus.</p>
        </div>
        <div id="div_3" class="allDiv">
           <p>Apprenez à maquetter en 2D ou en 3D sur un logiciel dédié !</p>
        </div>
        <div id="div_4" class="allDiv">
           <p>Envie de faire des leds qui réagissent à la musique ? Un détecteur de mensonge (enfin presque) ? Ou alors une autre idée ? Venez apprendre à vous servir d’un Arduino avant de vous procurer le vôtre et de faire vos expériences à la maison. Les cours vous feront découvrir une grande partie de ce qu’il est possible de faire avec !</p>
        </div>
        <div id="div_5" class="allDiv">
           <p>Envie de tailler ou faire une découpe dans un matériaux comme le métal ou le bois pour créer un élément de décoration ?
Venez vous essayer à notre Fraiseuse pour réaliser toutes vos envies, il vous suffira simplement de vous de la pièce que vous désirez modifier !</p>
        </div>
        <div id="div_6" class="allDiv">
           <p>Envie de retrouver son logo ou dessin sur sweat, t-shirt, casquette ou une serviette ? Venez le dessiner et le broder sur le linge de votre choix !</p>
        </div>




    <script>$('div.allDiv').hide(); //On cache une toutes les div avant la sélection d'une formation

$("select[name='session']").change(function(){ //On effectue un changement en fonction du select
    let id = "div_"+$(this).val(); //On créer une variable id qui recuperera la valeur
    $('div.allDiv').hide();
    $('div.divOriginal').hide();//On recache encore une fois toutes les div non concerne
    $('#'+id).show();//On affiche la div correspondante
 });</script>
</body>
<?php include ('src/inc/footer.php');?>