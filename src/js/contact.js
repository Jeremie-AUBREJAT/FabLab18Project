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