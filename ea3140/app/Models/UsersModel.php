<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{

    public function getUsers(){

        $builder = $this->db->table('users');
        $query = $builder->get();
        return $query->getResultArray();

    }

    public function addUser($data){

        $builder = $this->db->table('users');
        $builder->insert($data);
        if($this->db->affectedRows() > 0){
            return $this->insertID;
        }else{
            return false;
        }

    }

}

