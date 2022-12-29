<?php

require_once '/UniversitySPO/SingletonConnection.php';
require_once '/UniversitySPO/Services/UserService.php';
require_once '/UniversitySPO/Repositories/UserRepository.php';

$userService = new UserService(new UserRepository(SingletonConnection::connection()));


$userService->login();
