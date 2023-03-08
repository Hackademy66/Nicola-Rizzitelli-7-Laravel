<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi {{$user_data['name']}}!</h1>
    <h2>Thanks for contacting us!</h2>
    <p>We will contact you as soon as possible.
    </p>
    <p>This is your request:
        <ul>
            <li>Name: {{$user_data['name']}}</li>
            <li>Email: {{$user_data['email']}}</li>
            <li>Message: {{$user_data['message']}}</li>
        </ul>
    </p>
    <small>If you have not sent the email, ignore it.</small>

</body>
</html> 