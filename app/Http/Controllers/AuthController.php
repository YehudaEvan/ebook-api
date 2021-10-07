<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119196,
        'name' => 'Yehuda Hazaq Evangelli',
        'gender' => 'Male',
        'phone' => '085213884829',
        'class' => 'XII RPL 6'];
  }
}
