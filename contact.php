
<body>
    <link rel="stylesheet" href="src/css/bodyContact.css">
    <!--appel au header-->
    <?php
    include('src/inc/header.php');
    include('src/inc/head.php');
    ?>
    <!--zone de recherche des formations-->
    <div class="pageForm">
        <div class="presentationF">
        <div class="selectP">
        <h2 class="formations">Information Service</h2>
            <label class="formation" for="Formation">  Formation</label>
            <select class="selecteur" name="Formation">
                <option value="Formation montage vidéo">Formation montage vidéo</option>
                <option value="Formation designspark: Dessiner en 2D">Formation dessiner en 2D</option>
                <option value="Formation brodeuse numérique">Formation Brodeuse numérique</option>
                <option value="Formation fraiseuse CNC">Formation fraiseuse CNC</option>
                <option value="Formation Arduino">Formation Arduino</option>
                <option value="Formation imprimante 3D">Formation imprimante 3D</option>
                </select>
                <br>
            <label class= "Outil" for="Outil">  Outil   </label>
            <select class="outil" name="Outil">
                <option value="outilt montage vidéo">Outil Montage vidéo</option>
                <option value="outil designspark: Dessiner en 2D">Outil Designspark: Dessiner en 2D</option>
                <option value="outil brodeuse numérique">Outil brodeuse numérique</option>
                <option value="outil fraiseuse CNC">Outil fraiseuse CNC</option>
                <option value="outil arduino">Outil Arduino</option>
                <option value="outil imprimante 3D">Outil imprimante 3D</option>
            </select>
            </div>
            <br>
            <div class="affichage">
                <img src="" id="image" alt="Image de la formation">
                 <p id="texte">Text de formation</p>
            </div>
            </div>
            
         
        <div class="formulaireC">
            <h2 class="contacts">Contact</h2>
            <div class="infoF">
                 <form name="contact" methode="POST" action="donnees_souscripteur.php">
                 <label for="nom">Nom: </label>
                 <br>
                 <input type="text" name="nom" id="nom" placeholder="votre nom" required>
                 <br>
                <label for="prenom">Prénom : </label>
                <br>
                <input type="text" name="prenom" id="prenom" placeholder="votre prénom" required>
                <br>
                <label for="email">Email   : </label>
                <br>
                <input type="email" name="email" id="email" placeholder="XXXX.XXXXX@XXXX.XXX" required>
            </div>
            <br>
            <label for="presentation">Présentation</label>
            <textarea class = "area" name="presentation"></textarea>
            <br>
            <div class="validation">
            <input type="radio" name="DonneesPerso" id="DonneesPerso" value=" "><label for="DonneesPerso">En cochant cette case, j'accepte que mes données personnelles fournies dans ce formulaire soit utilisées pour traiter ma demande.</label>
            <br>
            <button class="button" type="submit" name="submit" >Envoyer</button>
            </div>
            </form>
        </div>
    </div>
    <!--appelle au footer-->
    <?php
    require_once('src/inc/footer.php');
    ?>
    <script src="src/js/contact.js" async></script>
</body>
</html>