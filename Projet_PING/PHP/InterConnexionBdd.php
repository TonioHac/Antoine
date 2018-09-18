<?php
    class InterConnexionBDD {
        // Attributs
        private $_host;
        private $_userName;
        private $_passwd;
        private $_dbName;
        private $_mysqli;
        
        // Constructeur demandant 4 paramètres
        public function __construct($host, $userName, $passwd, $dbName) { 
            $this->setHost($host); // Initialisation du Host.
            $this->setUserName($userName); // Initialisation du UserName.
            $this->setPasswd($passwd); // Initialisation du passwd.
            $this->setDbName($dbName); // Initialisation de la dbName.
        }
        
        // Mutateurs et Méthodes
        public function setHost($host) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($host))  {
                trigger_error('Host: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_host = $host;
        }
        
        public function setUserName($userName) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($userName))  {
                trigger_error('UserName: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_userName = $userName;
        }
        
        public function setPasswd($passwd) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($passwd))  {
                trigger_error('Passwd: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_passwd = $passwd;
        }
        
        public function setHost($dbName) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($dbName))  {
                trigger_error('DbName: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_dbName = $dbName;
        }
        
        // Permet de se connecter à la BDD
        public function ConnexionBDD() {
            $this->_mysqli = new mysqli($this->_host, $this->_userName, $this->_passwd, $this->_dbName);

            /* Vérifie la connexion */
            if (mysqli_connect_errno()) {
                printf("Échec de la connexion : %s\n", mysqli_connect_error());
            }
        }
        
        // Permet d'insérer un nouvel utilisateur
        public function insertUser($nom, $prenom, $mail, $situation, $mdp) {
            /* Préparation de la commande d'insertion */
            $query = 'INSERT INTO userPING (nom, prenom, email, situation, mdp) VALUES ('. $nom .','. $prenom .','. $mail .','. $situation .','. $mdp .')';
            
            $stmt = $mysqli->prepare($query);
            
            // A terminer
            
        }
        
        // Permet de se déconnecter de la BDD
        public function DeconnexionBDD() {
            $this->_mysqli->close();
        }
        
    }
?>