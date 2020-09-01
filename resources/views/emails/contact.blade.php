<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faceshield-contacts-email</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/product.css') }}" rel="stylesheet">

    <!-- Font Awesome
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     Google Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> --> -->
</head>

<body>

    <!-- <img src="{{ $message->embed(photo/nTrShield_email_beginnnig.png) }}" alt="email_beginning" style="width: 590px;">
    <br><br> -->
    <p class="ml-5" style="color: black;">From:  {{ request()->email }}</p>
    <p class="ml-5" style="color: black;"> With subject: {{ request()->subject }}</p>
    <br>
    <p class="ml-5" style="color: black;">{{ request()->message }}</p>
    <br>
    <p class="ml-5" style="color: black;">Thank you!</p>
    <br>
    <!-- <img src="{{ $message->embed(photo/nTrShield_email_ending.png) }}" alt="email_ending" style="width: 590px;"><br> -->
    <p style="margin-left: 220px; color: black;">www.ntrfaceshield.com</p>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>