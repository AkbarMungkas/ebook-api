<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nama' => 'Pamungkas',
            'nis' => 3103119010,
            'kelas' => 'XII RPL 1',
            'gender' => 'Laki-laki',
            'Nomor HP' => 1112222333
        ];
    }
}
