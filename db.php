<?php
class Labsi2_db{
	var $conn;
	
	public function connect(){
		$serverusername = "localhost";
		$sqlusername = "henrique";
		$sqlpassword = "";
		$dbname = "pi3";
	
		$this -> conn = mysqli_connect($serverusername, $sqlusername, $sqlpassword, $dbname);
	
		if (!$this -> conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
	
	public function close_connect(){
		mysqli_close($this -> conn);
	}
	
	public function getIdFromTipoUtilizadores($nome){
		$sql = "SELECT id FROM tipo_utilizadores WHERE nome ='$nome'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];
		return $result;
	}
	
	public function getAllNamesFromTipoUtilizadores(){
		$sql = "SELECT nome FROM tipo_utilizadores";
		$result = mysqli_query($this -> conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($result)) {
				$array[] = $row["nome"];
			}
			return $array;
		} else {
			echo "0 results";
		}
		
		}
		
	public function getUser($nome){
		$sql = "SELECT password FROM utilizadores WHERE nome = '$nome'";
 
		$result = mysqli_query($this->conn, $sql);
		$row = mysqli_num_rows($result);
		
		if($row == 1) {
			$row = mysqli_fetch_assoc($result);
		} else {
			$row = null;
		}	
		return $row;
	}
		
	public function getUserName($nome) {
		$sql = "SELECT nome FROM utilizadores WHERE utilizadores.nome = '$nome'";
 
		$result = mysqli_query($this->conn, $sql);
		$row = mysqli_num_rows($result);
		
		if($row == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	public function insertUser($nome, $email , $password, $id_tipoUtilizador){
		$sql = "INSERT INTO utilizadores VALUES('','$nome','$email', '$password', $id_tipoUtilizador);";
		mysqli_query($this->conn, $sql);
	}
	
}
?>