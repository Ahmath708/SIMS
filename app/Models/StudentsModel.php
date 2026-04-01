<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model{

    public function getStudents(){
        $builder = $this->db->table('students');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function addStudent($data){
        $builder = $this->db->table('students');
        $builder->insert($data);
        if($this->db->affectedRows() > 0){
            return $this->db->insertID();
        }else{
            return false;
        }
    }

    public function getStudentById($student_id){
        $builder = $this->db->table('students');
        $builder->where('student_id', $student_id);
        $query = $builder->get();
        return $query->getRowArray();
    }
}
