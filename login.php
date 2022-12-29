<?php

require_once 'SingletonConnection.php';
require_once 'Services/UserService.php';
require_once 'Repositories/UserRepository.php';

$userService = new UserService(new UserRepository(SingletonConnection::connection()));


$userService->login();
