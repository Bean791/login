<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data=[
            "title"=>'Tambah Data'
        ];
        return view ('user/tambah',$data);
    }
}
