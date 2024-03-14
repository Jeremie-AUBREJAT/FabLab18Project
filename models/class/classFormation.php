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
// Les methodes CRUD de la Class formation
         public function creationFormation($formation,$photo,$description)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("INSERT INTO Formation(libel_formation,photo_formation,description_formation) VALUES ($Formation,$photo,$description);");
             $sql ->execute();
         }
         public function suppressionFormation($formation,$photo,$description,$idSelectionFormation)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("DELETE FROM Formation(libel_formation,photo_formation,description_formation) WHERE $idSelectionFormation=id_formation;");
             $sql ->execute();
         }
         public function modificationFormation($formation,$photo,$description,$idSelectionFormation)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("UPDATE Formation(libel_formation=$formation,photo_formation=$photo,description_formation=$description) WHERE $idSelectionFormation=id_formation;");
             $sql ->execute();
         }
         public function editionFormation($formation,$photo,$description,$idSelectionFormation)
         {
             $sql = $this->connexionBdd($hote,$user,$motPass,$db);
             $sql ->prepare ("SELECT libel_formation, photo_formation, description_formation FROM Formation ) WHERE $idSelectionFormation=id_formation;");
             $sql ->execute();
         }
       
    }
?>