<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$mailData['title']}} </h1>
    <p> {{$mailData['body']}} </p>

    
    @if ($mailData['check'])
        <h2>Welcome Back. The below link will take you to the login panel</h2>
        <a href="http://127.0.0.1:8000/login/{{$mailData['link']}}">Click Here to Login</a>
        <br/>
    @else
        <h2>You are registered in our website. Please follow the link below to register yourself</h2>
        <a href="http://127.0.0.1:8000/register/{{$mailData['link']}}">Click Here to Register</a>
        <br/>
    @endif
    <p>Thank You.</p>
</body>
</html>