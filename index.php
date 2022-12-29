<?php
require_once '/UniversitySPO/SingletonConnection.php';
require_once '/UniversitySPO/Services/StudentService.php';
require_once '/UniversitySPO/Services/UserService.php';
require_once '/UniversitySPO/Repositories/StudentRepository.php';
require_once '/UniversitySPO/Repositories/UserRepository.php';
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

require_once '/UniversitySPO/Views/home.php';
