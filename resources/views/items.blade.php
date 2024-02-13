<?php 
    echo 'Liste des annonces :';
    $Liste = ["Bonbon" => 20, "chaussure" => 2000 , "voiture"=>48000, "tee-shirt"=>180];

    foreach($Liste as $items ){
        echo $items.'<br>';
    }

    $etudiants = array(
        array("nom" => "Smith", "note" => 85),
        array("nom" => "Jones", "note" => 92),
        array("nom" => "Taylor", "note" => 78)
    );
    
    // Affichage des données
    foreach ($etudiants as $etudiant) {
        foreach ($etudiant as $cle => $valeur) {
            echo "$cle: $valeur  ";
        }
        echo "<br>";
    }

?>