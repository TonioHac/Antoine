-- @Author: MALETERRE Antoine, QULORE Sarah
-- @Version: 1.0
-- @DateCreation: 14/09/2018
-- @DateDerniereModif: 14/09/2018
-- @NomBaseDeDonnees : bdd_projet_ping


-- Suppression des tables si elles existes

drop table if EXISTS UserPING;
drop table if EXISTS Document;


-- creation de la table UserPING

create table UserPING
(
  	id_User int AUTO_INCREMENT primary key,
  	nom varchar(45) not null,
  	prenom varchar(45) not null,
	email varchar(45) not null,
	situation varchar(45) not null,
	mdp varchar(128) not null
);

-- creation de la table Document

create table Document
(
  	id_Document int AUTO_INCREMENT primary key,
	titreDocument varchar(45) not null,
	resumeDocument varchar(280),
	departement varchar(45) not null,
  	nomDocument varchar(45) not null,
	document longblob not null,
	id_User_doc int references UserPING(id_User)
);
