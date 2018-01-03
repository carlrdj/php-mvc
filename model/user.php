<?php

class User {

  private $pdo;

  public function __CONSTRUCT() {
    try {
        $this->pdo = Database::Conectar();
    } catch (Exception $e) {
        die($e->getMessage());
    }
  }

  public function ListUser() {
  	try {
      $stm = $this->pdo->prepare('SELECT * FROM users');
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function InsertUser($data) {
    try {
      $sql = "INSERT INTO users (nombre, apellido, telefono, fecha) 
      VALUES ( ?, ?, ?, ?)";
      $this->pdo->prepare($sql)
        ->execute(
          array(
              $data->nombre,
              $data->apellido,
              $data->telefono,
              $data->fecha
          )
      );
			return true;
    } catch (Exception $e) {
      die($e->getMessage());
			return false;
    }
  }

	public function DeleteUser($id) {
    try {
      $stm = $this->pdo
       	->prepare('DELETE FROM users WHERE id = ?');
      $stm->execute(array($id));
			return true;
    } catch (Exception $e) {
      die($e->getMessage());
			return false;
    }
  }

  public function GetUser($id) {
    try {
      $stm = $this->pdo
              ->prepare('SELECT * FROM users WHERE id = ?');
      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function UpdateUser($data) {
    try {
      $sql = "UPDATE users SET nombre = ?, apellido = ?, telefono = ?, fecha = ? WHERE id = ?";

      $this->pdo->prepare($sql)
        ->execute(
	          array(
	              $data->nombre,
	              $data->apellido,
	              $data->telefono,
	              $data->fecha,
	              $data->id
	          )
      );
      return true;
    } catch (Exception $e) {
      die($e->getMessage());
      return false;
    }
	}

}
