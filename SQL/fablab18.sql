CREATE TABLE Membre(
   ID_membre INT PRIMARY KEY AUTO_INCREMENT,
   nom_membre VARCHAR(50),
   prenom_membre VARCHAR(50),
   email_membre VARCHAR(50),
   PRIMARY KEY(ID_membre)
);

CREATE TABLE Commentaire(
   ID_commentaire INT PRIMARY KEY AUTO_INCREMENT,
   commentaire VARCHAR(250),
   ID_membre INT NOT NULL,
   PRIMARY KEY(ID_commentaire),
   FOREIGN KEY(ID_membre) REFERENCES Membre(ID_membre)
);

CREATE TABLE Formation(
   ID_formation INT PRIMARY KEY AUTO_INCREMENT,
   libel_formation VARCHAR(50),
   ID_membre INT NOT NULL,
   PRIMARY KEY(ID_formation),
   FOREIGN KEY(ID_membre) REFERENCES Membre(ID_membre)
);

CREATE TABLE Outil(
   ID_outil INT PRIMARY KEY AUTO_INCREMENT,
   libel_outil VARCHAR(50),
   photo_outil VARCHAR(50),
   description_outil VARCHAR(150),
   ID_membre INT NOT NULL,
   PRIMARY KEY(ID_outil),
   FOREIGN KEY(ID_membre) REFERENCES Membre(ID_membre)
);

CREATE TABLE Realisation(
   ID_realisation INT,
   libel_realisation VARCHAR(50),
   description_realisation VARCHAR(150),
   photo_realisation VARCHAR(50),
   ID_outil INT NOT NULL,
   PRIMARY KEY(ID_realisation),
   FOREIGN KEY(ID_outil) REFERENCES Outil(ID_outil)
);
