<?php

$errors = [];
if (!isset($_POST['name'])) $errors[] = 'Champ "Nom" manquant';
elseif (!isset($_POST['courriel'])) $errors[] += 'Champ "Adresse e-mail" manquant';
elseif (!isset($_POST['phone'])) $errors[] += 'Champ "Numéro de téléphone" manquant';
elseif (!isset($_POST['subject'])) $errors[] += 'Champ "Sujet" manquant';
elseif (!isset($_POST['message'])) $errors[] += 'Champ "Message" manquant';

if (empty($errors))
{
    $name = $_POST['name'];
    $courriel = $_POST['courriel'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $response = array_map('trim', $_POST);
    $response = array_map('htmlentities', $_POST);

    echo "
        Merci $name de nous avoir contacté à propos de \"$subject\"<br><br>
        Un de nos conseillers vous contactera soit à l’adresse $courriel ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :<br><br>
        $message
    ";
}