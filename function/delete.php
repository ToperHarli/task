<?php

$file = $_GET['file'];

if(file_exists('../upload/'.$file)){
    unlink('../upload/'.$file);
    echo 'File '.$file. ' delete <br>';
}else{
    echo 'File not found';
}


echo '<a href="../Index.php">Back</a>';
?>