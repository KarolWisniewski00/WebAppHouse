<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nowa wiadomość z formularza kontaktowego</title>
</head>
<body>
    <h1>Nowa wiadomość z formularza kontaktowego</h1>
    <p><strong>Imię:</strong> {{ $data['name'] }}</p>
    <p><strong>Nazwisko:</strong> {{ $data['surname'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Tytuł:</strong> {{ $data['title'] }}</p>
    <p><strong>Wiadomość:</strong></p>
    <p>{{ $data['mess'] }}</p>
</body>
</html>
