<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Mail</title>
</head>
<body style="background: #e5e5e5; padding: 30px;">
    <h2>Nouveau message de contact</h2>

    <p><strong>Nom :</strong> {{ $request['name'] }}</p>
    <p><strong>Courriel :</strong> {{ $request['email'] }}</p>
    <p><strong>Numéro de téléphone : </strong><a href="tel:{{ $request['telephone'] }}"> {{ $request['telephone'] }}</a></p>
    
    <hr>

    <div style="max-width: 320px; margin 0 auto; padding: 20px; background: #fff;">
        <h3>Message</h3>
        <div>{{ $request['message'] }}</div>
    </div>

    <p>Merci,<br>
    Votre application</p>
</body>
</html>
