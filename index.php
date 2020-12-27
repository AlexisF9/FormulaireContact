<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Envoyer moi un message !</h1>
        <form class="contact-form" action="contactform.php" method="post">
            <h3>Votre nom</h3>
            <input type="text" name="name" id="name">                  
            <h3>Votre e-amil</h3>
            <input type="text" name="mail" placeholder=" mail@exemple.com" id="mail" > 
            <h3>Sujet de votre message</h3>
            <input type="text" name="subject">
            <h3>Votre message</h3>
            <textarea name="message"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </main>          
</body>
</html>