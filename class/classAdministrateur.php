<?php
    require_once('db_trait.php');
    //attributs de la class administrateur
      class Administrateur{
        use PDO;
        private $NomAdministrateur;
        private $PrenomAdministrateur;
        private $MotPass;
     
        public function getNomAdministrateur()
        {
                return $this->NomAdministrateur;
        }
        public function setNomAdministrateur($nomAdministrateur)
        {
                $this->NomAdministrateur = $nomAdministrateur;

                return $this;
        }
        public function getPrenomAdministrateur()
        {
                return $this->PrenomAdministrateur;
        }
        public function setPrenomAdministrateur($prenomAdministrateur)
        {
                $this->PrenomAdministrateur = $prenomAdministrateur;

                return $this;
        }
        public function getMotPass()
        {
                return $this->MotPass;
        }
        public function setMotPass($motPass)
        {
                $this->MotPass = $motPass;
                return $this;
        }
        // méthodes class administrateur
        public function creationAdmin($nomAdministrateur,$prenomAdministrateur,$motPass)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("INSERT INTO Administrateur(nom_admin,prenom_admin,password) VALUES ($nomAdministrateur,$prenomAdministrateur,$motPass);");
            $sql ->execute();
        }
        public function suppressionAdmin($nomAdministrateur,$prenomAdministrateur,$motPass)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("DELETE FROM Administrateur(nom_admin,prenom_admin,password) WHERE ($idSelection=id_admin);");
            $sql ->execute();
        }
        public function modificationAdmin($nomAdministrateur,$prenomAdministrateur,$motPass,$idSelection)
        {
            $sql = $this->connexionBdd($hote,$user,$motPass,$db);
            $sql ->prepare ("UPDATE Administrateur SET nom_admin=$nomAdministrateur,prenomAdministrateur=$prenom_admin,password=$motPass) WHERE ($idSelection=id_admin);");
            $sql ->execute();
        }
       

    }
?>