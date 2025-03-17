<?php

use Illuminate\Support\Facades\Route;

const PAGINE_IDOLI = [
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


//HOME
Route::get('/', function () {


    return view('HomeSunset.sunsetStudio', ['pagine_idoli' => PAGINE_IDOLI]);

});

//CHI SIAMO
Route::get('/noi-us', function(){




    return view('chiSiamo.noi',);

})->name('noi');



//PagineInterne
Route::get('/pagine_idoli/detail/{pagina}', function($id){

    


    $pagina = collect(PAGINE_IDOLI)->firstWhere('id', $id);

        return view('PagineInterne.detail',compact('pagina'));
 })->name('paginaIdolo-detail');


