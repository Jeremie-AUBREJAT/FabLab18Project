-- création de la database
CREATE DATABASE Fablab18
--création des tables avec les liens
CREATE TABLE Membre(
   ID_membre INT PRIMARY KEY AUTO_INCREMENT,
   nom_membre VARCHAR(50),
   prenom_membre VARCHAR(50),
   email_membre VARCHAR(50)
);

CREATE TABLE Commentaire(
   ID_commentaire INT PRIMARY KEY AUTO_INCREMENT,
   commentaire VARCHAR(250),
   ID_membre INT NOT NULL,
   FOREIGN KEY(ID_membre) REFERENCES Membre(ID_membre)
);

CREATE TABLE Formation(
   ID_formation INT PRIMARY KEY AUTO_INCREMENT,
   libel_formation VARCHAR(50),
   photo_formation VARCHAR(50),
   description_formation VARCHAR(250)
);

CREATE TABLE Outil(
   ID_outil INT PRIMARY KEY AUTO_INCREMENT,
   libel_outil VARCHAR(50),
   photo_outil VARCHAR(50),
   description_outil VARCHAR(250),
   ID_formation INT NOT NULL,
   FOREIGN KEY(ID_formation) REFERENCES Formation(ID_formation)
);

CREATE TABLE Realisation(
   ID_realisation INT PRIMARY KEY AUTO_INCREMENT,
   libel_realisation VARCHAR(50),
   description_realisation VARCHAR(250),
   photo_realisation VARCHAR(50),
   ID_outil INT NOT NULL,
   FOREIGN KEY(ID_outil) REFERENCES Outil(ID_outil)
);

CREATE TABLE Administrateur(
   ID_administrateur INT PRIMARY KEY AUTO_INCREMENT,
   nom_admin VARCHAR(50),
   prenom_admin VARCHAR(50),
   password VARCHAR(50)
);

CREATE TABLE choisir(
   ID_membre INT,
   ID_formation INT,
   ID_outil INT,
   PRIMARY KEY(ID_membre, ID_formation),
   FOREIGN KEY(ID_membre) REFERENCES Membre(ID_membre),
   FOREIGN KEY(ID_formation) REFERENCES Formation(ID_formation),
   FOREIGN KEY(ID_outil) REFERENCES Outil(ID_outil)
);
