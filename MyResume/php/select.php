<?php
	include_once'config.php';

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
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>
							Name
						</th>
						<th>
							Password
						</th>
						<th>
							Date of birth
						</th>
					</tr>
					<tr>


  <?php

            $sql = "SELECT  * from studenttb";
           $query=mysqli_query($connect,$sql);
           if ($query) {
		     if (mysqli_num_rows($query)>0){
		     	while ($row=mysqli_fetch_assoc($query)) {
            
                # if td use is php blog ,we have to write it in php blog but here we 
		     		#write it in to html blog ,its easy..
             

  ?>
          

  
        
					<td><?=$row['name']?></td>;
					<td><?=$row['pass']?></td>;
					<td><?=$row['date']?></td>;
					<td>
					<a href="edit.php">Edit</a>
					</td>
					<td>
					<a href="delete.php">delete</a>
					</td>

					


					


					</tr>

						
<?php
                       }
                      } 
                     }

   #this php blog used for closed the uper php blog..
?>				
 
						
				</thead>
			</table>
		</div>
	</div>
</body>
</html>