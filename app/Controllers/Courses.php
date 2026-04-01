<?php

namespace App\Controllers;

use App\Models\CoursesModel;
use App\Models\StudentsModel;

class Courses extends BaseController
{

    public function __construct()
    {
        helper(['form']);
        $this->CoursesModel = new CoursesModel();
        $this->StudentsModel = new StudentsModel();
    }

    public function index()
    {
        // Default index method
    }

    public function view_courses(){
        $data['courses'] = $this->CoursesModel->getCourses();
        return view('layout/header').view('courses/courses',$data).view('layout/footer');
    }

    public function create_course(){

        if ($this->request->getVar('action') == 'Add') {

            $course_code = $this->request->getVar('course_code');
            $course_title = $this->request->getVar('course_title');
            $credits = $this->request->getVar('credits');

            $newData = [
                'course_code' => $course_code,
                'course_title' => $course_title,
                'credits' => $credits
            ];

            $result = $this->CoursesModel->addCourse($newData);
            if ($result) {
                echo "<script>alert('Course created successfully');</script>";
            }else{
                echo "<script>alert('Course creation unsuccessful');</script>";
            }

        }

        return view('layout/header').view('courses/course_create').view('layout/footer');
    }

    public function student_courses(){

        if ($this->request->getVar('action') == 'Add') {

            $student_id = $this->request->getVar('student_id');
            $course_id = $this->request->getVar('course_id');

            $newData = [
                'student_id' => $student_id,
                'course_id' => $course_id
            ];

            $result = $this->CoursesModel->addStudentCourse($newData);
            if ($result) {
                echo "<script>alert('Student course assigned successfully');</script>";
            }else{
                echo "<script>alert('Student course assignment unsuccessful');</script>";
            }

        }

        $data['student_courses'] = $this->CoursesModel->getStudentCourses();
        $data['students'] = $this->StudentsModel->getStudents();
        $data['courses'] = $this->CoursesModel->getCourses();
        return view('layout/header').view('courses/student_courses',$data).view('layout/footer');
    }

}