<?php
	include_once'config.php';

	if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$uid = $_POST['uid'];
		
		
		
		if (empty($uname) || (empty($pass))) {
			echo "<br>";
			echo "The  field can not be empty";
			echo "<br>";
		}
		else if ((strlen($uname)<5) || (strlen($pass)<5)) {
			echo "The username and password field can not less than 5";
		}
		else{
			$sql = "UPDATE  student set name = '$uname', password = '$pass' where id='$uid'";
			$query = mysqli_query($connect, $sql);
			if ($query) {
				header('location:select.php');
			}
			else{
				echo "successfully not inserted". mysqli_error($connect);
			}
			
		}

		

	}
	$id='';
	$username='';
	$password='';

	if (isset($_GET['id'])){
		$sql = "SELECT * from student where id =".$_GET['id'];
		$query = mysqli_query($connect,$sql);
		if ($query) {
			if (mysqli_num_rows($query)>0) {
				while ($row=mysqli_fetch_assoc($query)) {


					$id = $row['id'];
					$username = $row['name'];
					$password = $row['password'];
			}
		}

	}
}
		# code...
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<h2>Form control: input</h2>
  		<p>The form below contains two input elements; one of type text and one of type password:</p>
  		<form method="POST">
  			<div class="form-group" >
  				
  				<label for="uname">
  					User Name
  				</label>
  				<input type="text" name="uname"  class="form-control" 
  				value="<?=$username;?>">
  			</div>
  			<div class="form-group">
  				
  				<label for="pass">
  					Password
  				</label>
  				<input type="password" name="pass"  class="form-control" value="<?=$password;?>">
  			</div>
  			<div class="form-group">
  				
  				
  				<input type="hidden" name="uid"  class="form-control" value="<?=$id;?>">
  			</div>
  			
  			<div class="form-group">
  				<button class="btn btn-default" value="submit" name="submit">
  					Submit
  				</button>
  			</div>
  		</form>		
	</div>

</body>
</html>