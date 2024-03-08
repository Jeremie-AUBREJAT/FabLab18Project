<?php
 require_once('db_trait.php');
      class Formation{
        use PDO;
        private $NomFormation;
        private $Photo;
        private $Description;
     
        public function getNomFormation()
        {
                return $this->NomFormation;
        }
        public function setNomFormation($nomFormation)
        {
                $this->NomFormation = $nomFormation;

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
        // Methode Class formation
         public function creationOutil($formation,$photo,$description)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("INSERT INTO Realisation(libel_formation,photo_formation,description_formation) VALUES ($Formation,$photo,$description);");
             $sql ->execute();
         }
         public function suppressionAdmin($formation,$photo,$description,$idSelectionFroamtion)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("DELETE FROM Realisation(libel_formation,photo_formation,description_formation) WHERE ($idSelectionFormation=id_formation);");
             $sql ->execute();
         }
         public function modificationAdmin($formation,$photo,$description,$idSelectionRealisation)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("UPDATE Realisation SET libel_formation=$formation,photo_formation=$photo,description_formation=$description) WHERE ($idSelectionFormation=id_formation);");
             $sql ->execute();
         }
       
    }
?>