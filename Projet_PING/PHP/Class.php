<DOCTYPE HTML>
    <head>
        <meta charset="utf-8">
        <title> Curriculum vitae : QULORE Sarah </title>
        <link rel="stylesheet" href="miseEnPage.css">
    </head>
    
    <body>
        
        Salut :  
        <?php 
            include('Personne.php');        
            include('InterConnexionBDD.php');
            $conn = new InterConnexionBDD('localhost','root','root','bdd_projet_ping');
            $conn->ConnexionBDD();
            $infoUser = $conn->selectUserInfo('dupont.paul@gmail.com');
            if( $infoUser == "error" ){
                echo "Ya rien";
            } else {
                $personne = new Personne($infoUser[0],$infoUser[1],$infoUser[2],$infoUser[3],$infoUser[4]);
                echo $personne->getID() . " " . $personne->getPrenom();
            }
            
            $salt = $conn->getSalt();
            echo "  </br>  Salt:   " . $salt;
            echo "  </br>  Mdp:    " . $conn->getPwdHash("mdp", $salt);
            
            //$conn->insertUser("Mlle", "0663438691", "BOSCH", "16 Rue Auguste Lechesne", 14000, "CAEN", "FRANCE", "QULORE", "Sarah", "sarah.qulore@gmail.com", "TUTRICE", "mdp");
        
            $conn->insertDocument('Document', 'Test de','UTC','Tuteur_stage','Texte', $personne->getID(), 'mot clef');
        ?>
    </body>
</DOCTYPE>