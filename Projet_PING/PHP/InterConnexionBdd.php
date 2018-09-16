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
        public function insertUser($nom, $prenom, $mail, situation, mdp) {
            /* Préparation de la commande d'insertion */
            $query = "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)";
            $stmt = $mysqli->prepare($query);
            
            // A terminer
            
        }
        
        // Permet de se déconnecter de la BDD
        public function DeconnexionBDD() {
            $this->_mysqli->close();
        }
        
    }

    

    /* Préparation de la commande d'insertion */
    $query = "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($query);

    $stmt->bind_param("sss", $val1, $val2, $val3);

    $val1 = 'Stuttgart';
    $val2 = 'DEU';
    $val3 = 'Baden-Wuerttemberg';

    /* Exécute la requête */
    $stmt->execute();

    $val1 = 'Bordeaux';
    $val2 = 'FRA';
    $val3 = 'Aquitaine';

    /* Exécute la requête */
    $stmt->execute();

    /* Ferme la requête */
    $stmt->close();

    /* Récupère toutes les lignes de la table myCity */
    $query = "SELECT Name, CountryCode, District FROM myCity";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_row()) {
            printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
        }
        /* Libère le résultat */
        $result->close();
    }

?>