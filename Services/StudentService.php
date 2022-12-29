<?php
class StudentService {

  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function filtredStudents() {
    if(isset($_GET['fio']) && isset($_GET['group_name']) && isset($_GET['year'])) {
      return $this->db->fetchStudents($this->preparedGet());
    } else {
      return $this->db->fetch();
    }
  }

  private function preparedGet() {
      $this->replaceIfNotExist('fio');
      $this->replaceIfNotExist('group_name');
      $this->replaceIfNotExist('year');
    return $_GET;
  }

  private function replaceIfNotExist($key) {
    if (isset($_GET[$key])) {
      if($_GET[$key] === '') {
        $_GET[$key] = '%';
      }
    }
  }
}
