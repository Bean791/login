<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $Data['Judul'] = 'Profile' ;
        return view('user/index');
    }
   
}
