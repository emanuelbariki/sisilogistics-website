<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>newsletter Email</title>
</head>
<body>
    <h2>Hi {{!empty($details['admin'])? $details[admin]:'Esteemed Subscriber'}}</h2>
    <p>{{$details['body']}}</p>
</body>
</html>