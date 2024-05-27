<?php

// EXERCICE BASE

$tableau = array("Clément" => 15, "Noémie" => 20, "Thomas" => 18);

function moyenneNote($tableau){
    $somme = 0;
    $classe = count($tableau);
    foreach ($tableau as $note) {
        $somme += $note;
    }
    return $somme / $classe;
}

$moyenneClasse = moyenneNote($tableau);
echo "\nLa moyenne est de " . $moyenneClasse . "!";


function tableauChaine($nomFichier){

}

$nomFichier = "test.txt";
$chaineTableau = array("\nWake up Neo !", "Follow the white rabbit !");

function ecrireTableau($nomFichier, $chaineTableau){
    $fichier3 = fopen($nomFichier,"a");
    if ($fichier3) {
        foreach($chaineTableau as $ligne4){
            fwrite($fichier3, $ligne4 ."\n");
        }
        fclose($fichier3);
        echo "Ecriture reussi";
    } else {
        echo "Pas top";
    }
}

ecrireTableau($nomFichier, $chaineTableau);

function liretableau ($nomFichier){
    $tableau = array();
    $fichier4 = fopen($nomFichier,"r");
    if ($fichier4){
        while (($ligne4 = fgets($fichier4)) !== false) {
            $tableau[] = trim($ligne4);
    }
    fclose($fichier4);
} else {
    echo "impossible";
}
return $tableau;
}

$contenu = liretableau($nomFichier);
print_r($contenu);

