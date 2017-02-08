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
		
	public function getUserPass($nome){
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

	public function insertPub($titulo, $descricao, $foto, $data, $hora , $id_areas) {
		$sql = "INSERT INTO publicacoes VALUES('','$titulo','$descricao','$foto','$data', '$hora', $id_areas);";
		mysqli_query($this->conn, $sql);
	}

	public function updatePub($id, $titulo, $descricao, $id_areas){

		$sql = "UPDATE publicacoes SET titulo='$titulo', descricao='$descricao', id_areas=$id_areas WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function deletePub($id){
		$sql = "DELETE FROM publicacoes WHERE id = $id";
		mysqli_query($this->conn, $sql);
	}

	public function getIdFromPub($titulo, $descricao, $id_areas) {

		$sql = "SELECT id FROM publicacoes WHERE titulo = '$titulo' AND descricao = '$descricao' AND id_areas = '$id_areas'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];
		return $result;
	}

	public function getIdFromUsers($nome){
		$sql = "SELECT id FROM utilizadores WHERE nome ='$nome'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];

		return $result;
	}

	public function insertUsersPubs($id_utilizadores, $id_publicacoes) {
		$sql = "INSERT INTO utilizadores_publicacoes VALUES(null,$id_utilizadores,$id_publicacoes);";
		mysqli_query($this->conn, $sql);
	}

	public function getAllNamesFromAreas(){
		$sql = "SELECT nome FROM areas";
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

	public function getNameFromAreas($id){
		$sql = "SELECT nome FROM areas WHERE id ='$id'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['nome'];

		return $result;
	}

	public function getIdFromAreas($nome){
		$sql = "SELECT id FROM areas WHERE nome ='$nome'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];
		return $result;
	}

	public function getAllIdsFromPubs(){
		$sql = "SELECT id FROM publicacoes ORDER BY id DESC";
		$result = mysqli_query($this -> conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($result)) {
				$array[] = $row["id"];
			}
			return $array;
		} else {
			echo "0 results";
		}
	}

	public function getAllPubs($number){

		$sql = "SELECT * FROM publicacoes WHERE id = '$number'";
		$query = mysqli_query($this -> conn, $sql);

		$row = mysqli_fetch_assoc($query);
		return $row;
	}

	public function checkUserPubs($nome_utilizador, $id_publicacao){
		$sql = "SELECT utilizadores.id from utilizadores, utilizadores_publicacoes WHERE utilizadores.nome LIKE '".$nome_utilizador."'
                    AND utilizadores.id = utilizadores_publicacoes.id_utilizadores
                    AND utilizadores_publicacoes.id_publicacoes = ".$id_publicacao.";";


		$query = mysqli_query($this -> conn, $sql);

		return mysqli_num_rows($query);


	}
}
?>