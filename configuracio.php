<?php
  require_once 'vendor/autoload.php';

  $clientID = '944809174262-u193dr27l3ppnns9tnt42eh6a8r5da8n.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Practiques/Pt05_AlexVazquez/Controlador/usuari_controlador.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>