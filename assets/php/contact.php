<?php

// var_dump($_POST);

$errors = [];
$senderName = $_POST['name'];
$senderEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if(!array_key_exists('name', $_POST) | $senderName == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if(!array_key_exists('email', $_POST) | $senderEmail == '' | filter_var($senderEmail, $filter = FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseigné votre email ou elle n'est pas valide";
}

if(!array_key_exists('subject', $_POST) | $subject == '') {
    $errors['email'] = "Vous n'avez pas précisé l'objet de votre message";
}

if(!array_key_exists('message', $_POST) | $message == '') {
    $errors['message'] = "Votre message est vide";
}

session_start();

if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = [
        'name' => $senderName,
        'email' => $senderEmail,
        'subject' => $subject, 
        'message'=> $message
    ];
    header('Location: ../../index.php#contact_section');
} else {
    $_SESSION['success'] = 1;
    $recipientEmail = "quentin.brouillet@gmail.com";
    $headers = "FROM : $recipientEmail";

    mail($recipientEmail, 'Formulaire de contact : ' . $subject, 'Nom: $senderName // Email: $senderEmail // Message: $message', $headers);
    header('Location: ../../index.php#contact_section');
}


