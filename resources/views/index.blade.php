<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Document</title>
</head>
<body>


<table>
    <tr class="zaza">
        <th>Nom du chat</th>
        <th>Prix du chat</th>
        <th>Description du chat</th>
        <th>Date de naissance du chat</th>
        <th>Image du chat</th>
        <th>Voir plus</th>
        <th>Créer un chat</th>
    </tr>
    @foreach($findall as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td>{{$cat->price}}</td>
            <td>{{$cat->desc}}</td>
            <td>{{$cat->birth_date}}</td>
            <td>{{$cat->image}}</td>
            <td> <a href="/cats/{{$cat->id}}">Voir plus </a> </td>
            <td> <a href="/cats/create">Création</a> </td>
        </tr>
    @endforeach
</table>
</body>
</html>
