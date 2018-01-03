<?php

require_once 'model/user.php';

class UserController {

  private $modeluser;

  public function __CONSTRUCT() {
  	$this->modeluser = new User();
  }

  public function Index() {
    $data = $this->modeluser->ListUser();
    require_once 'view/user/index.php';
  }

  public function FormInsert() {
    require_once 'view/user/add.php';
  }

  public function FormUpdate() {
  	$id = $_GET['id'];
  	$user = $this->modeluser->getUser($id);
    require_once 'view/user/edit.php';
  }

  public function InsertUser() {
  	$user = new User();
  	$user->nombre = $_POST['nombre'];
  	$user->apellido = $_POST['apellido'];
  	$user->telefono = $_POST['telefono'];
  	$user->fecha = $_POST['fecha'];
  	$result = $this->modeluser->InsertUser($user);
  	if ($result) {
	  	$message = 'Se guardó correctamente';
	  	echo "
	  	<script type='text/javascript'>
	  		alert('$message');
	  		location.href = '".URL."user';
	  	</script>
	  	";
  	}else{
  		$message = 'No se guardó';
  		echo "<script type='text/javascript'>alert('$message');</script>";
  	}
  }

  public function UpdateUser() {
  	$user = new User();
  	$user->id = $_POST['id'];
  	$user->nombre = $_POST['nombre'];
  	$user->apellido = $_POST['apellido'];
  	$user->telefono = $_POST['telefono'];
  	$user->fecha = $_POST['fecha'];
  	$result = $this->modeluser->UpdateUser($user);
  	if ($result) {
	  	$message = 'Se guardó correctamente';
	  	echo "
	  	<script type='text/javascript'>
	  		alert('$message');
	  		location.href = '".URL."user';
	  	</script>
	  	";
  	}else{
  		$message = 'No se guardó';
  		echo "<script type='text/javascript'>alert('$message');</script>";
  	}
  }

  public function DeleteUser() {
  	$id = $_POST['id'];
  	$result = $this->modeluser->DeleteUser($id);

  	if ($result) {
	  	$message = 'Se eliminó correctamente';	
	  	echo "
	  	<script type='text/javascript'>
	  		alert('$message');
	  		location.href = '".URL."user';
	  	</script>
	  	";
  	}else{
  		$message = 'No se eliminó';
  		echo "<script type='text/javascript'>alert('$message');</script>";
  	}
  }  

}
