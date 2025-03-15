<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $pagine_idoli =[
        ['id'=> 1,
         'nome' => 'Evelyn Hugo',
         'età' => 18,
         'professione' => 'Attrice',
         'image' => 'https://picsum.photos/301' 
        ],
        ['id'=> 2,
         'nome' => 'Celia S.James',
         'età' => 17,
         'professione' => 'Attrice',
         'image' => 'https://picsum.photos/302' 
        ],
        ['id'=> 3,
         'nome' => 'Harry Cameron',
         'età' => 24,
         'professione' => 'Regista',
         'image' => 'https://picsum.photos/303' 
        ],
    ];

    
    return view('HomeSunset.sunsetStudio', compact('pagine_idoli'));

});
