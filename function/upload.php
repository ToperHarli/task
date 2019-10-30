<?php 

if(isset($_POST['submit'])){
 
 $countfiles = count($_FILES['file']['name']);

 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'../upload/'.$filename))
  {
  	echo 'Файл ' . $_FILES['file']['name'][$i] . ' успішно завантажений <br>';
  }
 
 }
}

echo '<a href="../Index.php">Back</a>';

?>