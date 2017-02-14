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

	public function getAllUserNames(){
		$sql = "SELECT nome FROM utilizadores";
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

	public function getIdFromUser($nome) {

		$sql = "SELECT id FROM utilizadores WHERE nome = '$nome'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];
		return $result;
	}
	
	public function insertUser($nome, $email , $password, $id_tipoUtilizador){
		$sql = "INSERT INTO utilizadores VALUES('','$nome','$email', '$password','','',$id_tipoUtilizador, 0);";
		mysqli_query($this->conn, $sql);
	}

	public function insertPub($titulo, $descricao, $documento, $data, $hora , $id_areas) {
		$sql = "INSERT INTO publicacoes VALUES('','$titulo','$descricao','$documento','$data', '$hora',$id_areas);";
		mysqli_query($this->conn, $sql);
	}

	public function updatePub($id, $titulo, $descricao, $id_areas){

		$sql = "UPDATE publicacoes SET titulo='$titulo', descricao='$descricao',id_areas=$id_areas WHERE id=$id";
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

	public function insertProj($titulo, $descricao, $foto, $documento, $data, $hora , $id_areas) {
		$sql = "INSERT INTO projetos VALUES('','$titulo','$descricao', '$foto','$documento','$data', '$hora',$id_areas);";
		mysqli_query($this->conn, $sql);
	}

	public function updateProj($id, $titulo, $descricao, $id_areas){

		$sql = "UPDATE projetos SET titulo='$titulo', descricao='$descricao', id_areas=$id_areas WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function deleteProj($id){
		$sql = "DELETE FROM projetos WHERE id = $id";
		mysqli_query($this->conn, $sql);
	}

	public function getIdFromProj($titulo, $descricao, $id_areas) {

		$sql = "SELECT id FROM projetos WHERE titulo = '$titulo' AND descricao = '$descricao' AND id_areas = '$id_areas'";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		$result = $row['id'];
		return $result;
	}


	public function insertUsersProjs($id_utilizadores, $id_projetos) {
		$sql = "INSERT INTO utilizadores_projetos VALUES(null,$id_utilizadores,$id_projetos);";
		mysqli_query($this->conn, $sql);
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
		}
	}

	public function getAllPubs($number){

		$sql = "SELECT * FROM publicacoes WHERE id = '$number'";
		$query = mysqli_query($this -> conn, $sql);

		$row = mysqli_fetch_assoc($query);
		return $row;
	}

	public function getAllIdsFromProjs(){
		$sql = "SELECT id FROM projetos ORDER BY id DESC";
		$result = mysqli_query($this -> conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($result)) {
				$array[] = $row["id"];
			}
			return $array;
		}
	}

	public function getAllProjs($number){

		$sql = "SELECT * FROM projetos WHERE id = '$number'";
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

	public function checkUserProjs($nome_utilizador, $id_projeto){
		$sql = "SELECT utilizadores.id from utilizadores, utilizadores_projetos WHERE utilizadores.nome LIKE '".$nome_utilizador."'
                    AND utilizadores.id = utilizadores_projetos.id_utilizadores
                    AND utilizadores_projetos.id_projetos = ".$id_projeto.";";


		$query = mysqli_query($this -> conn, $sql);

		return mysqli_num_rows($query);
	}

	public function getNameOfUserInPubs($id){
		$sql = "SELECT utilizadores.nome from utilizadores, utilizadores_publicacoes WHERE utilizadores_publicacoes.id_publicacoes =$id
				AND utilizadores.id = utilizadores_publicacoes.id_utilizadores;";
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

	public function getNameOfUserInProjs($id){
		$sql = "SELECT utilizadores.nome from utilizadores, utilizadores_projetos WHERE utilizadores_projetos.id_projetos =$id
				AND utilizadores.id = utilizadores_projetos.id_utilizadores;";
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

	public function checkAdmin($nome){
		$sql = "SELECT admin from utilizadores WHERE nome ='$nome';";
		$query = mysqli_query($this -> conn, $sql);
		$row = mysqli_fetch_assoc($query);
		$result = $row['admin'];
		return $result;
	}

	public function getAllPubsFromIdArea($id){

		$sql = "SELECT id FROM publicacoes WHERE id_areas = $id ORDER BY id DESC;";
		$result = mysqli_query($this -> conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($result)) {
				$array[] = $row["id"];
			}
			return $array;
		}
	}

	public function getAllProjsFromIdArea($id){

		$sql = "SELECT id FROM projetos WHERE id_areas = $id ORDER BY id DESC;";
		$result = mysqli_query($this -> conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($result)) {
				$array[] = $row["id"];
			}
			return $array;
		}
	}

	public function getAllFieldsFromUser($id){
		$sql = "SELECT * FROM utilizadores WHERE id = '$id'";
		$query = mysqli_query($this -> conn, $sql);

		$row = mysqli_fetch_assoc($query);
		return $row;
	}

	public function getAllNamesTipoUtilizadoresFromIdTipoUtilizadores($nome){
		$sql = "SELECT tipo_utilizadores.nome FROM tipo_utilizadores, utilizadores where utilizadores.id_tipo_utilizadores = tipo_utilizadores.id and utilizadores.nome = '$nome'";
		$query = mysqli_query($this -> conn, $sql);

		$row = mysqli_fetch_assoc($query);
		return $row;
	}

	public function updateUsers($id, $nome, $descricao, $email, $id_tipo_utilizadores){
		$sql = "UPDATE utilizadores SET nome='$nome', email='$email', descricao='$descricao', id_tipo_utilizadores=$id_tipo_utilizadores WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function updateUserPass($id,$pass){
		$sql = "UPDATE utilizadores SET password='$pass' WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function updateUserFoto($id,$foto){
		$sql = "UPDATE utilizadores SET foto='$foto' WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function updateProjFoto($id,$foto){
		$sql = "UPDATE projetos SET foto='$foto' WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function updateProjFile($id,$file){
		$sql = "UPDATE projetos SET documento='$file' WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function updatePubFile($id,$file){
		$sql = "UPDATE publicacoes SET documento='$file' WHERE id=$id";
		mysqli_query($this->conn, $sql);
	}

	public function deteleUser($id){
		$sql = "DELETE FROM utilizadores WHERE id = $id";
		mysqli_query($this->conn, $sql);
	}

	public  function getAllProjsFromUserName($nome){
		$sql = "SELECT COUNT(utilizadores_projetos.id) as total FROM utilizadores_projetos, utilizadores WHERE utilizadores.id = utilizadores_projetos.id_utilizadores AND utilizadores.nome = '$nome';";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		return $row;
	}

	public  function getAllPubsFromUserName($nome){
		$sql = "SELECT COUNT(utilizadores_publicacoes.id) as total FROM utilizadores_publicacoes, utilizadores WHERE utilizadores.id = utilizadores_publicacoes.id_utilizadores AND utilizadores.nome = '$nome';";
		$sqlquery = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($sqlquery);
		return $row;
	}
}
?>