<?php
    class InterConnexionBdd {
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
        
        public function setDbName($dbName) {
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
            if ($this->_mysqli->connect_error) {
                die("Connection failed: " . $this->_mysqli->connect_error);
            } 
        }
        
        // Permet d'insérer un nouvel utilisateur
        public function insertUser($civilite, $telephone, $societe, $adresse, $codePostal, $ville, $pays, $nom, $prenom, $mail, $situation, $mdp) {
            /* Préparation de la commande d'insertion */
            $salt = $this->getSalt();
            $passWord = $this->getPwdHash($mdp, $salt);
            
            $query = "INSERT INTO userping (civilite, telephone, societe, adresse, codePostal, ville, pays, nom, prenom, email, situation, mdp, salt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            
            if(!($stmt = $this->_mysqli->prepare($query))) {
                echo "Echec lors de la création du compte";
            }
            
            if($stmt->bind_param('ssssdssssssss', $civilite, $telephone, $societe, $adresse, $codePostal, $ville, $pays, $nom, $prenom, $mail, $situation, $passWord,$salt)) {
                echo "Echec de la liaison";
            }
            
            if (!$stmt->execute()) {
                echo "Echec lors de l'exécution";
            }
        }
        
        //Permet d'insérer un nouveau document
        public function insertDocument($titre, $resume, $departement, $nom, $doc, $idUser, $motC) {
            /* Préparation de la commande d'insertion */            
            $query = "INSERT INTO document (titreDocument, resumeDocument, departement, nomDocument, document, id_User_doc, motsClef) VALUES (?,?,?,?,?,?,?)";
            
            if(!($stmt = $this->_mysqli->prepare($query))) {
                echo "Echec lors de la création du compte";
            }
            
            if($stmt->bind_param('ssssbis', $titre, $resume, $departement, $nom, $doc, $idUser, $motC)) {
                echo "Echec de la liaison";
            }
            
            if (!$stmt->execute()) {
                echo "Echec lors de l'exécution";
            }
        }
        
        // Permet de récupérer les informations de l'utilisateur
        public function selectUserInfo($mail) {
            /* Préparation de la demande d'information d'utilisateur */
            $query = "SELECT id_User, nom, prenom, email, situation FROM userping WHERE email = '" . $mail ."'"; 
            $array = "error";
            
            if ($stmt = $this->_mysqli->prepare($query)) {
                /* Exécution de la requête */
                $stmt->execute();

                /* Association des variables de résultat */
                $stmt->bind_result($id, $nom, $prenom, $email, $situation);

                /* Lecture des valeurs */
                while ($stmt->fetch()) {
                    $array = array($id, $nom, $prenom, $email, $situation);
                }

                /* Fermeture de la commande */
                $stmt->close();
            }
            
            return $array;
        }

        // Permet de se déconnecter de la BDD
        public function DeconnexionBDD() {
            $this->_mysqli->close();
        }
        
        //Permet de générer un MDP crypter avec un salt
        public function getPwdHash($passWord, $salt){
            $hashed_password = crypt($passWord, $salt);
            return $hashed_password;
        }
        
        //Permet de générer un Salt aléatoirement
        public function getSalt(){
            //Initialisation des caractères
            $charact = array(0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
            $salt = "";
            
            for($i = 0; $i < 40; $i++){
                $salt .= ($i%2) ? strtoupper($charact[array_rand($charact)]) : $charact[array_rand($charact)];
            }
            
            return $salt;
        }

    }
?>