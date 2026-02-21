<?php
function saisir (string $message):string{
    $valeur = readline($message);
    $valeur = trim($valeur);
    return $valeur;
};
$resultat = saisir("entrer votre message: ");
echo "vous aviez saisi $resultat \n";

function saisirInt($nombre):int{
    $n = readline($nombre);
    $n = trim($n);
    return $n;
}
$r = saisirInt("entrer votre message: ");
echo "vous aviez saisi $r \n";