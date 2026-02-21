<?php
include "input.php";
function validerNom(string $nom): bool{
    $patern = "/^[a-zA-Z\s]{2,}$/i";
    if (preg_match($patern , $nom)) {
        echo "nom valide : $nom" ."\n";
        return true;
        }  
        else {
            echo "nom invalide";
            return false;
            }
            }
$nom = saisir("entrez votre nom : ");
validerNom($nom);

function validerTelephone(string $tel):bool{
    $pattern = "/^(77|70|76|78|75)[0-9]{7}$/";
    if (preg_match($pattern, $tel)) {
        echo "telephone valide : $tel";
        return true;
        }  
        else {
            echo "telephone invalide";
            return false;
            }
            }
$tel = saisir("entrez votre numero de telephone: ");
validerTelephone($tel);