<?php
// Utilisation de majuscules pour les constantes (convention PHP)
const STATUT_ATTENTE = "rendez-vous en attente";
const STATUT_VALIDE = "rendez-vous validé";

// Définit le fuseau horaire sur Dakar
date_default_timezone_set('Africa/Dakar');
// Vérification du fuseau et affichage de l'heure actuelle
echo "Fuseau configuré : " . date_default_timezone_get() . "<br>";
echo "Heure à Dakar : " . date('d-m-Y H:i:s'); // Affiche l'heure locale de Paris
 