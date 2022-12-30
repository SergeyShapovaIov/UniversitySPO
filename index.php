<?php
require_once 'SingletonConnection.php';
require_once 'Services/StudentService.php';
require_once 'Services/UserService.php';
require_once 'Repositories/StudentRepository.php';
require_once 'Repositories/UserRepository.php';
session_start();

$studentService = new StudentService(new StudentRepository(SingletonConnection::connection()));
$userService = new UserService(new UserRepository(SingletonConnection::connection()));
$students = $studentService->filtredStudents();
$allYears = $studentService->getAllYear();
$years = array_unique($allYears);
if(isset($_SESSION['USER_ID']))
{
  $user = $userService->getUserByID($_SESSION['USER_ID']);
}

require_once 'Views/home.php';
