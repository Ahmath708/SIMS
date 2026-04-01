<?php

namespace App\Controllers;

use App\Models\StudentsModel;

class Students extends BaseController{

    public function __construct()
    {
        helper(['form']);
        $this->StudentsModel = new StudentsModel();
    }

    public function index(){
        // Default index method
    }

    public function view_students()
    {
        $data['students'] = $this->StudentsModel->getStudents();
        return view('layout/header').view('students/students',$data).view('layout/footer');
    }

    public function create_student(){

        if ($this->request->getVar('action') == 'Add') {

            $reg_no = $this->request->getVar('reg_no');
            $first_name = $this->request->getVar('first_name');
            $last_name = $this->request->getVar('last_name');
            $name_with_initials = $this->request->getVar('name_with_initials');
            $nic = $this->request->getVar('nic');

            $newData = [
                'reg_no' => $reg_no,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'name_with_initials' => $name_with_initials,
                'nic' => $nic
            ];

            $result = $this->StudentsModel->addStudent($newData);
            if ($result) {
                echo "<script>alert('Student created successfully');</script>";
            }else{
                echo "<script>alert('Student creation unsuccessful');</script>";
            }

        }

        return view('layout/header').view('students/student_create').view('layout/footer');

    }

}
