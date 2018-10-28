<?php 




if(isset($_POST['submit'])) {

	$link = mysqli_connect("localhost", "root", "", "login_system");

	if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt update query execution
	$sql = "UPDATE users SET user_image='test' WHERE user_id=1;";
	if(mysqli_query($link, $sql)){
	    echo "Records were updated successfully.";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
// Close connection
mysqli_close($link);

	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if(in_array($fileActualExt, $allowed)) {
		if($fileError === 0) {
			if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'includes/uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);


				header("Location: user.php?uploadsuccess");
			} else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file! Oops!";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
} else {
	header("Location: ../index.php")
}













 ?>