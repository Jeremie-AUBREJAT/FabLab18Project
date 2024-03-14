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
// méthodes CRUD de la class Outil
          public function creationOutil($nomOutil,$photo,$description)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("INSERT INTO Outil(libel_outil,photo_outil,description_outil) VALUES ($nomOutil,$photo,$description);");
              $sql ->execute();
          }
          public function suppressionOutil($nomOutil,$photo,$description,$idSelection)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("DELETE FROM Outil(libel_outil,photo_outil,description_outil) WHERE $idSelection=id_outil;");
              $sql ->execute();
          }
          public function modificationOutil($nomOutil,$photo,$description,$idSelection)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("UPDATE Outil SET libel_outil=$nomOutil,photo_outil=$photo,description_outil=$description) WHERE $idSelection=id_outil;");
              $sql ->execute();
          }
          public function editionOutil($nomOutil,$photo,$description,$idSelection)
          {
              $sql = $this->connexionBdd($hote,$user,$motPass,$db);
              $sql ->prepare ("SELECT libel_outil, photo_outil, description_outil FROM Outil ) WHERE $idSelection=id_outil;");
              $sql ->execute();
          }
    }
?>