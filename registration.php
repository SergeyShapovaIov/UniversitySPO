<?php

require_once '/UniversitySPO/SingletonConnection.php';
require_once '/UniversitySPO/Repositories/UserRepository.php';
require_once '/UniversitySPO/Services/UserService.php';

$userService = new UserService(new UserRepository(SingletonConnection::connection()));

$userService->registration();
