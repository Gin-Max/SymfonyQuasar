<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ta_base', 'user', 'password');
    echo "Connexion OK\n";
} catch (PDOException $e) {
    echo "Erreur PDO : " . $e->getMessage() . "\n";
}
