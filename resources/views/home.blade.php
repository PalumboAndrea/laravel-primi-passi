<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <h1>Hello Laravel!</h1>
    <ul>
        <li>
            <a href="{{ route('page1') }}">Page1 </a>
        </li>
        <li>
            <a href="{{ route('page2') }}">Page2 </a>
        </li>
    </ul>
    
</body>
</html>