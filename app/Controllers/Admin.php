<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $Data['Judul'] = 'User List' ;
        // $users = new \Myth\Auth\Models\UserModel();
        // $Data['users']= $users->findAll();
        //query 
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $builder->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id');
        $query = $builder->get();
        $Data ['users']= $query->getResult();

        return view('Admin/index',$Data);
    }

    public function detail($id)
    {
        $Data['Judul'] = 'User Detail' ;
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email,fullname, user_img, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $builder->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id');
        $builder->where ('users.id',$id);
        $query = $builder->get();
        $Data ['user']= $query->getRow();

        return view('Admin/detail',$Data);
    }
   
}
