<?php
    require_once('db_trait.php');
      class Realisation{
        use PDO;
        private $NomRealisation;
        private $Photo;
        private $Description;
     
        public function getNomRealisation()
        {
                return $this->NomRealisation;
        }
        public function setNomRealisation($nomRealisation)
        {
                $this->NomRealisation = $nomRealisation;

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
// les méthodes CRUD de la class Realialisation
        public function creationRealisation($nomRealisation,$photo,$description)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("INSERT INTO Realisation(libel_realisation,description_realisation,description_realisation) VALUES ($nomRealisation,$photo,$description);");
            $sql ->execute();
        }
        public function suppressionAdmin($nomRealisation,$photo,$description,$idSelectionRealisation)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("DELETE FROM Realisation(libel_realisation,description_realisation,description_realisation) WHERE $idSelectionRealisation=id_realisation;");
            $sql ->execute();
        }
        public function modificationAdmin($nomRealisation,$photo,$description,$idSelectionRealisation)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("UPDATE Realisation SET libel_realisation=$nomRealisation,description_realisation=$photo,photo_realisation=$photo) WHERE $idSelectionRealisation=id_realisation;");
            $sql ->execute();
        }
        public function editionAdmin($nomRealisation,$photo,$description,$idSelectionRealisation)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("SELECT libel_realisation, description_Realisation, photo_realisation FROM Realisation) WHERE $idSelectionRealisation=id_realisation;");
            $sql ->execute();
        }
       
    }
?>