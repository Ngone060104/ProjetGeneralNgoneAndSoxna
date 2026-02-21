<?php
include "input.php";
function validerNom(string $nom): bool{
    $patern = "/^[a-zA-Z\s]{2,}$/i";
    if (preg_match($patern , $nom)) {
        echo "nom valide : $nom";
        return true;
        }  
        else {
            echo "nom invalide";
            return false;
            }
            }
$nom = saisir("entrez votre nom : ");
validerNom($nom);
