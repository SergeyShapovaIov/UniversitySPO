<?php

use \PDO as PDO;
class UserRepository
{
  private PDO $db;

  public function __construct($db){
    $this->db = $db;
  }

  public function create($params){
    $stmt = $this->db->prepare('
    INSERT INTO user (`name`, date_birthday, address,gender,interests, vk, blood_type, rhesus_factor, email,password ) 
    VALUES (?,?,?,?,?,?,?,?,?,?)
    ');

    $stmt->execute([
      $params['name'],
      $params['date_birthday'],
      $params['address'],
      $params['gender'],
      $params['interests'],
      $params['vk'],
      $params['blood_type'],
      $params['rhesus_factor'],
      $params['email'],
      password_hash($params['password'], PASSWORD_BCRYPT),
    ]);
  }

  public function getUser($email){
    $stmt = $this->db->prepare('
    SELECT * FROM user WHERE email = ?
    ');
    $stmt->execute([
      $email
    ]);
    return $stmt->fetch();
  }

  public function getUserByID($id) {
    $stmt = $this->db->prepare('
    SELECT * FROM user WHERE id = ?
    ');
    $stmt->execute([
      $id
    ]);
    return $stmt->fetch();
  }
}