<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request){
    return [
        'data' => [
            [
                'id'=> 1,
                'name'=> 'Pablo Alves',
            ]
        ]
    ];
}
);

