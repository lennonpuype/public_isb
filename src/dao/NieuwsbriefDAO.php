<?php
require_once __DIR__ . '/DAO.php';

class NieuwsbriefDAO extends DAO {
  public function selectById($id) {
    $sql = "SELECT * FROM `isb_nieuwsbrief` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `isb_nieuwsbrief` (`email`) VALUES (:email)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function validate($data) {
    $errors = array();
    if(empty($data['email'])) {
      $errors['email'] = "*Dit veld is verplicht";
    }
    return $errors;
  }
}
?>
