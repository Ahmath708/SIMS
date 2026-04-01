<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route redirects to login
$routes->get('/', 'Login::index');

// Login routes
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::index');
$routes->get('login/logout', 'Login::logout');

// Dashboard
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

// User routes
$routes->get('users/view_users', 'Users::view_users', ['filter' => 'auth']);
$routes->get('users/create_users', 'Users::create_users', ['filter' => 'auth']);
$routes->post('users/create_users', 'Users::create_users', ['filter' => 'auth']);

// Student routes
$routes->get('students/view_students', 'Students::view_students', ['filter' => 'auth']);
$routes->get('students/create_student', 'Students::create_student', ['filter' => 'auth']);
$routes->post('students/create_student', 'Students::create_student', ['filter' => 'auth']);

// Course routes
$routes->get('courses/view_courses', 'Courses::view_courses', ['filter' => 'auth']);
$routes->get('courses/create_course', 'Courses::create_course', ['filter' => 'auth']);
$routes->post('courses/create_course', 'Courses::create_course', ['filter' => 'auth']);
$routes->get('courses/student_courses', 'Courses::student_courses', ['filter' => 'auth']);
$routes->post('courses/student_courses', 'Courses::student_courses', ['filter' => 'auth']);
