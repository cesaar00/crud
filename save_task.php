<?php
include("conexionbd.php");
	if (isset ( $_POST ['save_task'])) 
	{
		$title = $_POST['title'];
		$description = $_POST['description'];

		$query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
		$result = mysqli_query($conn,$query);
		if (!$result) {
		die("Query Failed");
		}

		$_SESSION['message'] = 'Task Saved Succesfully';
		$_SESSION['message_type'] = 'success';

	 	header("Location: index.php");
	} 
	/* CODIGO CHIDO
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include_once('conexiondb.php');
		if (!empty($_POST['title']) && !empty($_POST['description'])) {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$query = "iNSERT INTO task (title, description) VALUES ('$title', '$description')";
			if ($conn->query($query) === TRUE) {
				echo "Datos almacenados";
			} else {
				echo "Ocurrio un error";
			}
			
			$conn->close();

		}
	} */

?>