<?php
    require_once('db_trait.php');
    //attributs de la class Commentaire
      class Commentaire{
        use PDO;
        private $Commentaire;
     
        public function getCommentaire()
        {
                return $this->Commentaire;
        }
        public function setCommentaire($Commentaire)
        {
                $this->Commentaire = $commentaire;

                return $this;
        }
 // méthodes CRUD class commentaire
        public function creationCommentaire($commentaire)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("INSERT INTO Commentaire(commentaire) VALUES ($commentaire);");
            $sql ->execute();
        }
        public function suppressionCommentaire($commentaire,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("DELETE FROM Commentaire(commentaire) WHERE $idSelection=id_commentaire;");
            $sql ->execute();
        }
        public function modificationCommentaire($commentaire,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("UPDATE Commentaire SET commentaire=$commentaire) WHERE $idSelection=id_commentaire;");
            $sql ->execute();
        }
        public function editionCommentaire($commentaire,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("SELECT commentaire FROM Commentaire) WHERE $idSelection=id_commentaire;");
            $sql ->execute();
        }

    }
?>