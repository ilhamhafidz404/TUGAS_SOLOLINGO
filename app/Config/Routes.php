<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'DashboardController::index', ['as' => "student.dashboard"]);

$routes->get('/admin/dashboard', 'Admin\DashboardController::index', ['as' => "admin.dashboard"]);

$routes->get('/admin/users', 'Admin\UserController::index', ['as' => "admin.users"]);
$routes->get('/admin/users/delete', 'Admin\UserController::destroy', ['as' => "admin.users.delete"]);

$routes->get('/admin/courses', 'Admin\CourseController::index', ['as' => "admin.courses"]);
$routes->post('/admin/courses', 'Admin\CourseController::store', ['as' => "admin.courses.store"]);
$routes->get('/admin/courses/detail', 'Admin\CourseController::show', ['as' => "admin.courses.show"]);

$routes->post('/admin/questions', 'Admin\QuestionController::store', ['as' => "admin.question.store"]);


$routes->get('/teacher/dashboard', 'Teacher\DashboardController::index', ['as' => "teacher.dashboard"]);

// auth
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::registration');
$routes->post('/logout', 'AuthController::logout');
