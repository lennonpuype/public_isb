<?php

require_once( __DIR__ . '/DAO.php');

class ProgrammaDAO extends DAO {

  public function filter($locatie = '', $soort = '', $dag = ''){
    $sql = "SELECT * FROM `isb_acts` WHERE 1";

    if (!empty($locatie)) {
      $sql .= " AND `locatie` = :locatie";
    }

    if (!empty($soort)) {
      $sql .= " AND `soort` = :soort";
    }

    if (!empty($dag)) {
      $sql .= " AND `dag` = :dag";
    }

    $sql .= " ORDER BY `dag` ASC";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($locatie)) {
      $stmt->bindValue(':locatie', $locatie);
    }
    if (!empty($soort)) {
      $stmt->bindValue(':soort',$soort);
    }
    if (!empty($dag)) {
      $stmt->bindValue(':dag',$dag);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `isb_acts` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectDuoMusa(){
    $sql = "SELECT * FROM `isb_acts` WHERE `isb_acts`.`classname` = 'musa'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectUitgelicht(){
    $sql = "SELECT * FROM `isb_acts` WHERE `uitgelicht` = 1 ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectOther($soort){
    $sql = "SELECT * FROM `isb_acts` WHERE `soort` = :soort ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':soort', $soort);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
