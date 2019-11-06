<?php
require_once __DIR__ . '/DAO.php';

class BarbecueDAO extends DAO {
  public function selectById($id) {
    $sql = "SELECT * FROM `isb_barbecue` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `isb_barbecue` (`voornaam`, `naam`, `email`,`personen`) VALUES (:voornaam, :naam, :email,:personen)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':voornaam', $data['voornaam']);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':personen', $data['personen']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function validate($data) {
    $errors = array();
    if(empty($data['voornaam'])) {
      $errors['voornaam'] = "*Dit veld is verplicht";
    }
    if(empty($data['naam'])) {
      $errors['naam'] = "*Dit veld is verplicht";
    }
    if(empty($data['email'])) {
      $errors['email'] = "*Dit veld is verplicht";
    }
    if(empty($data['personen'])) {
      $errors['personen'] = "*Gelieve geldig aantal personen in te geven";
    }
    return $errors;
  }
}
?>
