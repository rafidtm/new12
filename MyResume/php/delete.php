<?php
	include 'config.php';
	if(isset($_GET['id'])) {
		$sql = "DELETE from student where id=".$_GET['id'];
		$query = mysqli_query($connect,$sql);
		if($query){
			header('location:select.php');
		}
		else{
			echo "error".mysqli_error($connect);
		}
	}
?>