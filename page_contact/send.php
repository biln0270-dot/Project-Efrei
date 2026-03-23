<?php

$nom = $_POST['nom'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$to = "tonemail@gmail.com";

$body = "Nom: $nom\nEmail: $email\n\n$message";

mail($to, $sujet, $body);

header("Location: contact.php?success=1");

?>
<form class="formulaire" action="send.php" method="POST">
    <input type="text" name="nom" required>
<input type="email" name="email" required>
<input type="text" name="sujet">
<textarea name="message"></textarea>