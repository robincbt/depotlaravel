<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="" type="text/css">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: blueviolet;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: pink;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }
        .pourcss{
            color: white;
        }
    </style>

</head>
<body>


<form action="/cats" method="POST">
@csrf
    <h1>Ajouter un chat</h1>
    <div>
        <label class ="pourcss" for="name">Nom du chat :</label>
        <input value="{{old('name')}}" type="text" id="name" name="name">
        @error('name') <p>{{$message}} </p> @enderror
    </div>

    <div>
        <label class ="pourcss" for="price">Prix :</label>
        <input value="{{old('price')}} "type="number" id="price" name="price" >
        @error('price') <p>  {{$message}}  <p/> @enderror
    </div>


    <div>
        <label class ="pourcss" for="description">Description :</label>
        <input value="{{old('desc')}}" type="text" id="description" name="desc" >
        @error('desc') <p>  {{$message}}  <p/> @enderror
    </div>


    <div>
        <label class ="pourcss" for="birthdate">Date de naissance :</label>
        <input value="{{old('birth_date')}}" type="date" id="birthdate" name="birth_date" placeholder="JJ/MM/AAAA" >
        @error('birth_day') <p>  {{$message}}  <p/> @enderror
    </div>


    <div>
        <label class ="pourcss" for="image">Image du chat (URL) :</label>
        <input value="{{old('image')}}" type="text" id="image" name="image" >
        @error('image') <p>  {{$message}}  <p/> @enderror
    </div>

    <div>
        <button type="submit">Ajouter</button>
        <button type="button" onclick="window.location.href='/cats';">Retour</button>
    </div>
</form>


</body>
</html>
