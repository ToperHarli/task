<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload file</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<div class="container">
	 <h2>Choose file for upload</h2>

	 <form method='post' action='function/upload.php' enctype=multipart/form-data>

     	<div class="form-group">
    	 	<input type="file" name="file[]" required multiple title="file" class="form-control-file">
			<br>
    		<button type="submit" name="submit" class="btn btn-primary mb-2">Send</button>
 		 </div>
	</form>

<?php
  $dir = 'upload'; // dir path assign here
  $contents = (count(glob("$dir/*")) === 0);

  if(!$contents):?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">File</th>
      <th scope="col">Size, KB</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

<?php require_once ("function/directori.php");?>

  </tbody>
</table>  

<?php else: ?>
  <p>Directory is empty</p>

<?php endif; ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</body>
</html>