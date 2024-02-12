<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
    <!--appel au header-->
    <?php
    include('inc/header.php');
    ?>
    <!--zone de recherche des formations-->
    <div class="pageForm">
        <div class="presentationF">
        <div class="selectP">
        <h2>Information Service</h2>
            <label class="Formation" for="Formation">  Formation</label>
            <select class="formation" name="Formation">
                <option value="Montage vidéo">Montage vidéo</option>
                <option value="Designspark: Dessiner en 2D">Designspark: Dessiner en 2D</option>
                <option value="Brodeuse numérique">Brodeuse numérique</option>
                <option value="Fraiseuse CNC">Fraiseuse CNC</option>
                <option value="Arduino">Arduino</option>
                <option value="Imprimante 3D">Imprimante 3D</option>
                </select>
                <br>
            <label class= "Outil" for="Outil">  Outil   </label>
            <select class="outil" name="Outil">
                <option value="montage vidéo">Montage vidéo</option>
                <option value="designspark: Dessiner en 2D">Designspark: Dessiner en 2D</option>
                <option value="brodeuse numérique">Brodeuse numérique</option>
                <option value="fraiseuse CNC">Fraiseuse CNC</option>
                <option value="arduino">Arduino</option>
                <option value="imprimante 3D">Imprimante 3D</option>
            </select>
            </div>
            <br>
            <div class="affichage">
                <img src="" id="image" alt="Image de la formation">
                 <p id="texte"></p>
            </div>
            </div>
            <script>
                function afficherImage() {
                  const select = document.querySelector("#formation");
                  const valeur = select.value;
                  let image, texte;
                  switch (valeur) {
                    case "montage_video":
                      image = "url(montage_video.jpg)";
                      texte = "Découvrez les techniques de montage vidéo.";
                      break;
                    case "designspark_2D":
                      image = "url(designspark_2D.jpg)";
                      texte = "Apprenez à dessiner en 2D avec Designspark.";
                      break;
                    case "brodeuse_numerique":
                      image = "url(brodeuse_numerique.jpg)";
                      texte = "Devenez un pro de la broderie numérique.";
                      break;
                    case "fraiseuse_CNC":
                      image = "url(fraiseuse_CNC.jpg)";
                      texte = "Apprenez à utiliser une fraiseuse CNC.";
                      break;
                    case "arduino":
                      image = "url(arduino.jpg)";
                      texte = "Découvrez l'univers de la programmation avec Arduino.";
                      break;
                    case "imprimante_3D":
                      image = "url(imprimante_3D.jpg)";
                      texte = "Imprimez en 3D grâce à notre formation.";
                      break;
                    default:
                      image = "";
                      texte = "";
                  }
                  document.querySelector("#image").style.backgroundImage = image;
                  document.querySelector("#texte").textContent = texte;
                }
              </script>
         
        <div class="formulaireC">
            <h2>Contact</h2>
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
    require_once('inc/footer.php');
    ?>
</body>
</html>