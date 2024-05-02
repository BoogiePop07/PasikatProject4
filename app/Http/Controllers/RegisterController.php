<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $fillable = [
        'business_first_name', 'business_last_name', 'email', 'phone_number', 'password',
    ];
}
