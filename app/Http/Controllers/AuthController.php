<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return ([
            'NIS'=> '3103119196',
            'Nama' => 'Yehuda Hazaq Evangelli',
            'Gender' => 'Laki - laki',
            'Phone' => '628213884829',
            'Class' => 'XII RPL 6'
        ]);
}


}