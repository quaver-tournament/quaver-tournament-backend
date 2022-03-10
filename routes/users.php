<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return User::all();
});

Route::get('/{id}', function ($id) {
    return User::find($id);

});

Route::post('/', function(Request $req) {
    $user = User::create([
        'id' => $req->input('id'),
        'username' => $req->input('username'),
        'avatar' => $req->input('avatar')
    ]);

    $user->save();
});

Route::put('/{id}', function($id) {
    $user = User::find($id);

    if (!$user) {  
        return [
            "data" => "No user with ID ".$id
        ];
    }
});