-- Création de contenu pour les tests
-- @Author: MALETERRE Antoine, QULORE Sarah
-- @Version: 1.2
-- @DateCreation: 14/09/2018
-- @DateDerniereModif: 20/09/2018
-- @NomBaseDeDonnees : bdd_projet_ping

INSERT INTO UserPING  (civilite, telephone, societe, adresse, codePostal, ville, pays, nom, prenom, email, situation, mdp)
VALUES ('Mr', '0614080419', 'Airbus', 'rue Saint Sever', '76100', 'Rouen', 'France', 'DUPONT', 'Antoine','dupont.paul@gmail.com','Tuteur','mdp'), 
	   ('Mme', '0665759876', 'Sopra', 'rue Saint Sever', '76100', 'Paris', 'France', 'DUPONT', 'Paul','dupont.paul@gmail.com','Tuteur','mdp'),
       ('Mlle', '0677545723', 'Thales', 'rue Saint Sever', '76600', 'Le Havre', 'France', 'DUPONT', 'Marc','dupont.paul@gmail.com','Tuteur','mdp'), 
       ('Mr', '5787252678', 'Bosch', 'rue Saint Sever', '81990', 'Albi', 'France', 'DUPONT', 'Paul','dupont.paul@gmail.com','Tuteur','mdp'),
       ('Mlle', '5820285622', 'Air France', 'rue Saint Sever', '31300', 'Toulouse', 'France', 'DUPONT', 'Paul','dupont.paul@gmail.com','Tuteur','mdp');
	   
INSERT INTO Document  (titreDocument, resumeDocument, departement, nomDocument, document, id_User_doc, motsClef)
VALUES  ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 2, 'mot clef'),
        ('Document', 'Test de','UTC','Tuteur_stage','Texte', 1, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 3, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 4, 'mot clef'),
        ('Test', 'Test de document','TIC','Tuteur_stage','Texte', 5, 'mot clef');