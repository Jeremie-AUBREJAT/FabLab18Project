<html>
<body>
  <link rel="stylesheet" href="../public/assets/css/bodyAdministration.css">
  <!--connection formation-->
  <div class="pageAdministration">
    <div class="formAdmin">
      <h2 class="administration">Administration</h2>
        <br>
        <div class="inputAdmin">
          <form name="contact" methode="POST" action="connexion.php" onload="traitementAdmin()">
            <label for="nom">Nom: </label>
            <br>
            <input type="text" name="nom" id="nom" placeholder="votre nom" required>
            <br>
            <label for="prenomA">Prénom : </label>
            <br>
            <input type="text" name="prenomA" id="prenomA" placeholder="Votre prénom" required>
            <br>
            <label for="password">Mot de passe:</label>
            <br>
            <input type="password" name="password1" id="password1" placeholder="password" required>
            <br>
            <label for="password">Répéter mot de passe:</label>
            <br>
            <input type="password" name="password2" id="password2" placeholder="password" required>
            <br>
            <button class="buttonAdmin" type="submit" name="submit" id="submit" disabled="disabled">Connexion</button>
          </form>
        </div>
    </div>
    <div class="formFormation">
      <h2 class="MAJ">Mise a jour Formation</h2>
        <br>
        <div class="inputFormation">
          <form name="formation" methode="POST" action="formation.php" onload="traitementFormation()">
            <label for="libelleFormation">Formation:</label>
            <br>
            <input type="text" name="libelleFormation" id="libelleFormation" placeholder="libelle de Formation">
            <br>
            <label for="photoFormation">Fichier photo :</label>
            <br>
            <input type="text" name="photoFormation" id="photoFormation" placeholder="Fichier photo" >
            <br>
            <label for="descriptionFormation" class="descriptionFormation" id="descriptionFormation">Description de la formation</label> 
              <textarea class = "descriptionFormation" name="descriptionFormation" id="descriptionFormation"></textarea>
            <br>
            <label for="libelleOutil">Outil:</label>
            <br>
            <input type="text" name="libelleOutil" id="libelleOutil" placeholder="libelle de l'outil">
            <br>
            <label for="photoOutil">Fichier photo de l'outil:</label>
            <br>
            <input type="text" name="photoOutil" id="photoOutil" placeholder="Fichier photo de l'outil" >
            <br>
            <label for="descriptionOutil" class="descriptionOutil" id="descriptionOutil">Description de l'Outil</label> 
              <textarea class = "descriptionOutil" name="descriptionOutil" id="descriptionOutil"></textarea>
            <br>
            <label for="libellerealisation">Réalisation:</label>
            <br>
            <input type="text" name="libelleRealisation" id="libelleRealisation" placeholder="libelle de la realisation">
            <br>
            <label for="photoRealisation">Fichier photo de la realisation:</label>
            <br>
            <input type="text" name="photoRealisation" id="photoRealisation" placeholder="Fichier photo de la realisation" >
            <br>
            <label for="descriptionRealisation" class="descriptionRealisation" id="descriptionRealisation">Description de la réalisation</label> 
              <textarea class = "descriptionRealisation" name="descriptionRealisation" id="descriptionRealisation"></textarea>
            <br>
            <button class="modif" type="submit" name="modif" id="submit" disabled="disabled">Modification</button>
            <button class="creation" type="submit" name="creation" id="submit" disabled="disabled">Création</button>
            <button class="edition" type="submit" name="edition" id="submit" disabled="disabled">Edition</button>
        </form>
      </div>
    <div>
  </div>
    <!--appelle au footer-->
    <script src="src../public/assets/js/administration.js" async></script>
</body>
</html>