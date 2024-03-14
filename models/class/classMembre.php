<?php
    require_once('db_trait.php');
    //attributs de la class Membre
      class Membre{
        use PDO;
        private $NomMembre;
        private $PrenomMembre;
        private $Email;
     
        public function getNomMembre()
        {
                return $this->NomMembre;
        }
        public function setNomMembre($nomMembre)
        {
                $this->NomMembre = $nomMembre;

                return $this;
        }
        public function getPrenomMembre()
        {
                return $this->PrenomMembre;
        }
        public function setPrenomMembre($prenomMembre)
        {
                $this->PrenomMembre = $prenomMembre;

                return $this;
        }
        public function getEmail()
        {
                return $this->Email;
        }
        public function setEmail($email)
        {
                $this->Email = $email;

                return $this;
        }
// méthodes CRUD class Membre
        public function creationMembre($nomMembre,$prenomMembre,$email)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("INSERT INTO Membre(nom_membre,prenom_membre,email) VALUES ($nomMembre,$prenomMembre,$email);");
            $sql ->execute();
        }
        public function suppressionMembre($nomMembre,$prenomMembre,$email,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("DELETE FROM Membre(nom_membre,prenom_membre,email) WHERE $idSelection=id_Membre;");
            $sql ->execute();
        }
        public function modificationMembre($nomMembre,$prenomMembre,$email,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("UPDATE Membre SET nom_membre=$nom_membre,prenomMembre=$prenom_membre,email=$Email) WHERE $idSelection=id_Membre;");
            $sql ->execute();
        }
        public function editionMembre($nomMembre,$prenomMembre,$email,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("SELECT nom_membre, prenomMembre, email FROM Membre) WHERE $idSelection=id_Membre;");
            $sql ->execute();
        }  

    }
?>