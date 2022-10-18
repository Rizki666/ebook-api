<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => 3103120151,
            'NAME' => 'Muhammad Rizqi Gunan',
            'PHONE' => '081226110145',
            'CLASS' => 'XII RPL 5'
        ];
    }
}
