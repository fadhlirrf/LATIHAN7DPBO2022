<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// No.1 Menambahkan Data
	function addTask(){
		// Menampung variabel
		$name = $_POST['tname'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$deadline = $_POST['tdeadline'];

		// Query Insert Data
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) 
				  VALUES ('$name', '$details', '$subject', '$priority', '$deadline', 'Sudah')";

		return $this->execute($query);
	}
	
	// No.2 Menghapus Data
	function delTask($id){
		// Query Delete Data
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";

		return $this->execute($query);
	}

	// No.3 Mengubah Status
	function updateTask($id){
		// Query Update Status 
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";

		return $this->execute($query);
	}

	// Bonus 
	function ascTask($key){
		// Query Sorting Data secara Ascending
		$query = "SELECT * FROM tb_to_do ORDER BY $key ASC";

		return $this->execute($query);
	}
}

?>