<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation de mail</title>
</head>
<body>
    <h1 class="">Activation de compte</h1>
    <p> Pour activer votre compte, veuillez cliquez sur le lien  ci-dessous:</p>
    <a href="<?= WEBSITE_URL.'/activation.php?p='.$pseudo.'&amp;token='.$token ?>" class="">Lien d'activation</a>
</body>
</html>