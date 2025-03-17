<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $pagine_idoli =[
        ['id'=> 1,
         'nome' => 'Evelyn Hugo',
         'età' => 18,
         'professione' => 'Attrice',
         'image' => 'https://picsum.photos/300' 
        ],
        ['id'=> 2,
         'nome' => 'Celia S.James',
         'età' => 17,
         'professione' => 'Attrice',
         'image' => 'https://picsum.photos/300' 
        ],
        ['id'=> 3,
         'nome' => 'Harry Cameron',
         'età' => 24,
         'professione' => 'Regista',
         'image' => 'https://picsum.photos/300' 
        ],
    ];

    
    return view('HomeSunset.sunsetStudio', compact('pagine_idoli'));

});


Route::get('/noi-us', function(){





    return view('chiSiamo.noi');

})->name('noi');



Route::get('/pagine_idoli/detail/{id}', function($id){
        dd($id);
 })->name('paginaIdolo-detail');


