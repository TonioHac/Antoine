-- Création de contenu pour les tests
-- @Author: MALETERRE Antoine, QULORE Sarah
-- @Version: 1.1
-- @DateCreation: 14/09/2018
-- @DateDerniereModif: 16/09/2018
-- @NomBaseDeDonnees : bdd_projet_ping

INSERT INTO UserPING  (nom, prenom, email, situation, mdp)
VALUES ('DUPONT', 'Paul','dupont.paul@gmail.com','Tuteur','mdp'), 
	   ('TOTO', 'Toto','toto.toto@gmail.com','Commission','toto'),
       ('DUVAL',  'Marc','duval.marc@gmail.com','Tuteur','mdp'), 
       ('DUFOUR', 'Jean','dufour.jean@gmail.com','Tuteur','mdp'),
       ('WANG', 'Jaja','wang.jaja@gmail.com','Tuteur','mdp');
	   
INSERT INTO Document  (titreDocument, resumeDocument, departement, nomDocument, document, id_User_doc, motsClef)
VALUES  ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 2, 'mot clef'),
        ('Document', 'Test de','UTC','Tuteur_stage','Texte', 1, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 3, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 4, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 5, 'mot clef');