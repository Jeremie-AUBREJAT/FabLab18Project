<?php
     require_once('db_trait.php');
      class Outil{
        use PDO;
        private $NomOutil;
        private $Photo;
        private $Description;
     
        public function getNomOutil()
        {
                return $this->NomOutil;
        }
        public function setNomOutil($nomOutil)
        {
                $this->NomOutil = $nomOutil;

                return $this;
        }
        public function getPhoto()
        {
                return $this->Photo;
        }
        public function setPhoto($photo)
        {
                $this->Photo = $photo;

                return $this;
        }
        public function getDescription()
        {
                return $this->Description;
        }
        public function setDescription($description)
        {
                $this->Description = $description;
                return $this;
        }
          // méthodes de la class Outil
          public function creationOutil($nomOutil,$photo,$description)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("INSERT INTO Realisation(libel_outil,photo_outil,description_outil) VALUES ($nomOutil,$photo,$description);");
              $sql ->execute();
          }
          public function suppressionAdmin($nomOutil,$photo,$description,$idSelectionOutil)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("DELETE FROM Realisation(libel_outil,photo_outil,description_outil) WHERE ($idSelectionOutil=id_outil);");
              $sql ->execute();
          }
          public function modificationAdmin($nomOutil,$photo,$description,$idSelectionRealisation)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("UPDATE Realisation SET libel_outil=$nomOutil,photo_outil=$photo,description_outil=$description) WHERE ($idSelectionOutil=id_outil);");
              $sql ->execute();
          }
    }
?>