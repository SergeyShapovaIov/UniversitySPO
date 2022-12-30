<?php

class UserService
{
  private UserRepository $userRepository;

  public function __construct($repository) {
    $this->userRepository = $repository;
  }

  public function registration() {

    $registrationParams = array();

    try {
      $this->checkEmptyParams('name', $registrationParams);
      $this->checkEmptyParams('date_birthday', $registrationParams);
      $this->checkEmptyParams('address', $registrationParams);
      $this->checkEmptyParams('gender', $registrationParams);
      $this->checkEmptyParams('interests', $registrationParams);
      $this->checkEmptyParams('vk', $registrationParams);
      $this->checkEmptyParams('blood_type', $registrationParams);
      $this->checkEmptyParams('rhesus_factor', $registrationParams);
      $this->checkEmptyParams('password', $registrationParams);
      $this->checkEmptyParams('email', $registrationParams);
    } catch (RuntimeException $e) {

    }


    try {
      $this->userRepository->create($registrationParams);
      header('Location: /UniversitySpo/');
    } catch (Exception $exception) {
      header('Location: /UniversitySPO/Views/registration.php');
    }

  }

  public function login() {

    try {

      if(!isset($_GET['email'])){
        throw new RuntimeException();
      }

      if(!isset($_GET['password'])){
        throw new RuntimeException();
      }
    } catch (RuntimeException $exception) {
      header('Location: /UniversitySPO/Views/login.php');
    }

    $user = $this->userRepository->getUser($_GET['email']);
    if(empty($user) || !password_verify($_GET['password'], $user['password'])){
      header('Location: /UniversitySPO/Views/login.php');
    } else {
      session_start();
      $_SESSION['USER_ID'] = $user['id'];
      header('Location: /UniversitySPO/');
    }
  }

  public function getUserByID ($id) {
    return $this->userRepository->getUserByID($id);
  }

  public function checkEmptyParams($key, array &$resultArray){
    if(isset($_POST[$key]))
    {
      $resultArray[$key] = $_POST[$key];
    } else {
      throw new RuntimeException();
    }
  }
}