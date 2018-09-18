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
            $personne = new Personne('DUPONT','Paul','dupont.paul@gmail.com','Tuteur');
            echo $personne->getNom();
        
            include('InterConnexionBDD.php');
            $conn = new InterConnexionBDD('localhost','root','root','bdd_projet_ping');
            $conn->ConnexionBDD();
            $conn->insertUser('QULORE','Sarah','sarah.qulore@gmail.com','Tuteur', 'sarahQ');
            
        ?>
    </body>
</DOCTYPE>