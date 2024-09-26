<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="show.css" type="text/css">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        ul {
            list-style: none;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        strong {
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


    <ul>
        <h1> Détail du chat numéro {{$lefind->id}} <h1/>
        <li><strong>Nom du chat:</strong> {{ $lefind->name }}</li>
        <li><strong>Prix du chat:</strong> {{ $lefind->price }}</li>
        <li><strong>Description du chat:</strong> {{ $lefind->desc }}</li>
        <li><strong>Date de naissance du chat:</strong> {{ $lefind->birth_date }}</li>
        <li><strong>Image du chat</strong> {{ $lefind->image }}</li>
        <a href="/cats">Retour</a>
    </ul>

</body>
</html>
