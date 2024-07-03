<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: black;
        }
        .header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .buttons-container {
            text-align: center;

        }
        .wave-container {
            position: relative;
            height: 100%;
            overflow: hidden;
        }
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            pointer-events: none;
        }
        .wave svg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .card {
            position: relative;
            z-index: 1;
        }
        .btn-signup {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
        }
        .btn-submit {
            background-color: red;
            color: white;
        }
        .home-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

@yield('content')
<a href="{{ route('welcome') }}" class="btn home-button">Home</a>
</body>
</html>
