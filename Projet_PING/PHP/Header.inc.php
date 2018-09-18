<?php
    session_start();
    $personne = new Personne();
    $_SESSION['personne'] = serialize($personne);
    $personne = unserialize($_SESSION['personne']);
        
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count']++;
    }
      
?>