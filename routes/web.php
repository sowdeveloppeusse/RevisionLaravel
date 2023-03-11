<?php

use App\Models\Combat;
use App\Models\Lutteur;
use App\Models\ResultatCombat;
use Illuminate\Support\Facades\Route;

Route::view('/add', 'pages/vitrine/combat/add');
Route::view('/edit', 'pages/vitrine/combat/edit');
Route::view('/liste', 'pages/vitrine/combat/liste'); 

// Route::view('/add', 'pages/vitrine/lutter/add');
// Route::view('/edit', 'pages/vitrine/lutter/edit');
// Route::view('/liste', 'pages/vitrine/lutter/liste');

// Route::view('/add', 'pages/vitrine/resultat/add');
// Route::view('/edit', 'pages/vitrine/resultat/edit');
// Route::view('/liste', 'pages/vitrine/resultat/liste');


Route::get('/', function () {

    // 👌👌👌 Inserer 7 lutteurs avec Fluend Query Bulder(FQB)👌👌👌
        // $result = $lutteurs = DB::table('lutteurs')->insert(
        //     [
        //         [
        //             'nom' => 'Lo',
        //             'prenom' => 'Modou',
        //             'adresse' => 'Parcell',
        //             'date_naiss' => date('1992-08-05') ,
        //             'lieu_naiss' => 'Parcell',
        //             'categorie' => 'Marier',
        //             'etat' => 1,
        //             'age' => 30,
        //         ],
        //         [
        //             'nom' => 'Gaye',
        //             'prenom' => 'Balla',
        //             'adresse' => 'Guediawaye',
        //             'date_naiss' => date('1992-08-01'),
        //             'lieu_naiss' => 'Guediiawaye',
        //             'categorie' => 'Marier',
        //             'etat' => 1,
        //             'age' => 32,
        //         ],
        //         [
        //             'nom' => 'Mbaye',
        //             'prenom' => 'Siteu',
        //             'adresse' => 'Guediawaye',
        //             'date_naiss' => date('1986-08-01'),
        //             'lieu_naiss' => 'Guediiawaye',
        //             'categorie' => 'Celibataire',
        //             'etat' => 0,
        //             'age' => 29,
        //         ],
        //         [
        //             'nom' => 'Fall',
        //             'prenom' => 'Bombardie',
        //             'adresse' => 'Mbour',
        //             'date_naiss' => date('1992-10-01'),
        //             'lieu_naiss' => 'Mbour',
        //             'categorie' => 'Celibataire',
        //             'etat' => 0,
        //             'age' => 29,
        //         ],
        //         [
        //             'nom' => 'Diall',
        //             'prenom' => 'Yawou',
        //             'adresse' => 'Yeumble',
        //             'date_naiss' => date('1992-08-06'),
        //             'lieu_naiss' => 'Yeumble',
        //             'categorie' => 'Celibataire',
        //             'etat' => 1,
        //             'age' => 28,
        //         ],
        //         [
        //             'nom' => 'Gaye',
        //             'prenom' => 'Sathies',
        //             'adresse' => 'Yeumble',
        //             'date_naiss' => date('1987-08-01'),
        //             'lieu_naiss' => 'Yeumble',
        //             'categorie' => 'Celibataire',
        //             'etat' => 1,
        //             'age' => 28,
        //         ],
        //         [
        //             'nom' => 'Fall',
        //             'prenom' => 'Gouygui',
        //             'adresse' => 'Pikin',
        //             'date_naiss' => date('1987-08-01'),
        //             'lieu_naiss' => 'Yeumble',
        //             'categorie' => 'Marier',
        //             'etat' => 0,
        //             'age' => 34,
        //         ],
        //     ],
        // );
        // dd($result);


    // 👌👌👌 Inserer 3 combats avec Fluend Query Bulder(FQB) 👌👌👌
    //    $result = $combats = DB::table('combats')->insert(
    //     [
    //         [
    //             'nom_combat' => 'Combat 1',
    //             'nom_lutteur1' => 'Modou LO',
    //             'nom_lutteur2' => 'Balla Gaye',
    //             'nom_promoteur' => 'Bekaye Mbaye',
    //             'etat' => 1,
    //             'date' => date('y-m-d'),
    //         ],
    //         [
    //             'nom_combat' => 'Combat 2',
    //             'nom_lutteur1' => 'Papa Sow',
    //             'nom_lutteur2' => 'Gouygui',
    //             'nom_promoteur' => 'Bekaye Mbaye',
    //             'etat' => 1,
    //             'date' => date('y-m-d'),
    //         ],
    //         [
    //             'nom_combat' => 'Combat 3',
    //             'nom_lutteur1' => 'yawou Diall',
    //             'nom_lutteur2' => 'Boy Niang',
    //             'nom_promoteur' => 'Bekaye Mbaye',
    //             'etat' => 1,
    //             'date' => date('y-m-d'),
    //         ],
    //     ],
    //  );
    //  dd($result);

    // 👌👌👌 Inserer 2 Resultat_Combat avec Eloquent 👌👌👌
    //      $resultat = ResultatCombat::create(
    //     [
    //         [
    //             'nom_vainqueur' => "Modou Lo",
    //             'nom_perdant' => "Balla Gaye",
    //             'sans_verdique' => "Null",
    //             'etat' => 0,
    //         ],
    //         [
    //             'nom_vainqueur' => "Eumeu Sene",
    //             'nom_perdant' => "Boy Niang",
    //             'sans_verdique' => "Null",
    //             'etat' => 1,
    //         ],
    //     ],
    // );
    //  dd($resultat);

        // 👌👌👌 Recuperer tous les Lutteurs dont l'age > 10 et etat 1 👌👌👌
            // $lutteur = Lutteur::where('age', '>', 10)
            // ->where('etat', '=', 1)
            // ->get();
            // dd($lutteur);

    // 👌👌👌 Recuperer tous les resultats dont le nom du vainqueur "Modou LO" 👌👌👌
            // $resultat_combats = ResultatCombat::where('nom_vainqueur', "=",  'Modou LO')
            // ->get();
            // dd($resultat_combats);

        // 👌👌👌 Afficher le nombre resultat combat enregistrer 👌👌👌
            // $resultat_combats = ResultatCombat::get();
            // dd($resultat_combats);

        // 👌👌👌 Modifier la date du 3em Combat 👌👌👌
            // $combats = Combat::where('id', '=', 3)
            // ->update(['date' =>date('y-m-d') ]);
            // dd($combats);

        // 👌👌👌 Suppremier le 6em lutteur 👌👌👌
            $lutteur = lutteur::where('id', '=', 6)->delete();
            dd($lutteur);

        // 👌👌👌 Recuperer l'etat et l'age du lutteur dont l'id > à 3 👌👌👌
        // $lutteur = lutteur::where('id', '>', 3)
        //  ->get(['etat', 'age']);
        //  dd($lutteur);

           

        
        return view('welcom');


    });