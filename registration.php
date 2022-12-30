<?php

require_once 'SingletonConnection.php';
require_once 'Repositories/UserRepository.php';
require_once 'Services/UserService.php';

$userService = new UserService(new UserRepository(SingletonConnection::connection()));

$userService->registration();
