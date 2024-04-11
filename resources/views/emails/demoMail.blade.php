<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Mail</title>
</head>

<body>
    <h3>{{ $mailData['title'] }}</h3>
    <p>{{ $mailData['body'] }}</p>

    <p>You ordered the following food products:
        <br>
        <strong>{{ $mailData['food'] }}</strong>
    </p>

    <p>{{$food->price}}</p>
</body>

</html>
