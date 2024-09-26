<?php

use App\Models\Cat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/bjr', function () {
    $username = 'Gwenn';
    $mdp = 'Marzin';
//    return view('bjr', ['username' => $username], ['mdp' => $mdp]
//
//    );
//}); 1ère méthode, deuxième méthode ci dessous
    return view('bjr', compact('username', 'mdp'));

});
////les deux username ci dessous doivent etre egaux
////Route::get('/salut/{username}', function ($username) {
////    return view('salut');
//
//});
Route::get('/Calcul/{nombre1}/{nombre2}', function ($nombre1,$nombre2) {
    $resultat=$nombre1+$nombre2;
    return view('Calcul', compact('resultat', 'nombre1', 'nombre2'));
});
////
///
///
///
/// CRUD :
/// route pour voir toute les cats
Route::get('/cats', function () {
    $findall = Cat::all();
    return view('index', compact('findall'));
});// route pour voir les cats en fonction de leur id
//route pour emmener l'utilisateur sur le formulaire
Route::get('/cats/create', function () {
    return view('create');
});

Route::get('/cats/{id}', function ($id) {
    $lefind = Cat::find($id);
    return view('show', compact('lefind'));
});



// traitement des données de création, store, persister les données
Route::post('/cats', function () {
    //ddrequest();


    $validated = request()->validate([
        'name' => 'required',
        'price' => 'integer',
    ]);
    //dd('c ok');



    $c = new Cat;
    $c-> name=request('name');
    $c-> price=request('price');
    $c-> desc=request('desc');
    $c-> image=request('image');
    $c-> birth_date=request('birth_date');
    $c-> save();
    return redirect('/cats/'.$c->id);
    //return view('Calcul');
});


//emenner l'utilisateur vers un form prerempli
Route::get('/cats/{id}/edit', function () {

    return view('Calcul');
});//persister la maj
Route::patch('/cats/{id}', function () {

    return view('Calcul');
});//supression nom destroy
Route::delete('/cats/{id}', function () {

    return view('Calcul');
});
