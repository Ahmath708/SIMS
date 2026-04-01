<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model{

    public function getCourses(){
        $builder = $this->db->table('courses');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function addCourse($data){
        $builder = $this->db->table('courses');
        $builder->insert($data);
        if($this->db->affectedRows() > 0){
            return $this->db->insertID();
        }else{
            return false;
        }
    }

    public function getCourseById($course_id){
        $builder = $this->db->table('courses');
        $builder->where('course_id', $course_id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function addStudentCourse($data){
        $builder = $this->db->table('student_courses');
        $builder->insert($data);
        if($this->db->affectedRows() > 0){
            return $this->db->insertID();
        }else{
            return false;
        }
    }

    public function getStudentCourses(){
        $builder = $this->db->table('student_courses');
        $builder->join('students', 'students.student_id = student_courses.student_id');
        $builder->join('courses', 'courses.course_id = student_courses.course_id');
        $builder->select('students.reg_no, students.name_with_initials, courses.course_code, courses.course_title');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
