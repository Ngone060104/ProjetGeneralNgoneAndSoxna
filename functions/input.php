<?php
function saisir (string $message):string{
    $valeur = readline($message);
    $valeur = trim($valeur);
    return $valeur;
};
$resultat = saisir("entrer votre message: ");
echo "vous aviez saisi $resultat \n";