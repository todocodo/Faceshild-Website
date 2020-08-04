<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faceshield-contacts-email</title>
</head>
<body>
    <h1>{{ request()->subject }}</h1>
    <p>{{ request()->message }}</p>
    <p>Thank you!</p>

</body>
</html>