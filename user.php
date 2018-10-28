<?php
	include_once 'header.php';

?>	

<div class="main-wrapper">


			<h2></h2>

			<?php

				if (isset($_SESSION['u_id'])) {
				}
			?>

				
				<form action="includes/upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
				</form>



</div>
	
<?php
	include_once 'footer.php';
?>	


