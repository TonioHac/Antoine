-- Création de contenu pour les tests
-- @Author: MALETERRE Antoine, QULORE Sarah
-- @Version: 1.0
-- @DateCreation: 14/09/2018
-- @DateDerniereModif: 14/09/2018
-- @NomBaseDeDonnees : bdd_projet_ping

INSERT INTO UserPING  (nom, prenom, email, situation, mdp)
VALUES ('DUPONT', 'Paul','dupont.paul@mail.com','Tuteur','mdp'), 
	   ('TOTO', 'Toto','toto.toto@mail.com','Commission','toto'),
       ('DUVAL',  'Marc','duval.marc@mail.com','Tuteur','mdp'), 
       ('DUFOUR', 'Jean','dufour.jean@mail.com','Tuteur','mdp');
	   
INSERT INTO Document  (titreDocument, resumeDocument, departement, nomDocument, document, id_User_doc)
VALUES ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 2);	 