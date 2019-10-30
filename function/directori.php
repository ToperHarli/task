<?php 
$dir = 'upload';
$files = scandir($dir, 0);

for($i = 2; $i < count($files); $i++): ?>

    <tr>
    	<td><?=$files[$i]?></td>
    	<td><?=round((filesize('upload/'.$files[$i])/1000), 2)?></td>
    	<td><a class="btn btn-primary" href="upload/<?=$files[$i] ?>"  download role="button">Download</a></td>
    	<td><a class="btn btn-danger" href="function/delete.php?file=<?=$files[$i] ?>" role="button">Delete</a></td>
    </tr>	

<?php endfor ?>