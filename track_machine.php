<?php
	include('/include/head.html');
	include('/include/header.html');
?>

<?php 

if (isset($_POST['submit'])) {
	$userName = $_POST['userName'];
	echo "You entered $userName<br>";	
		
} else {
	echo '<form action="track_machine.php" method="POST" enctype="multipart/form-data">
			<label>Name of User:<input type="text" name="userName"></label><br>
			<input type="submit" value="Submit" name="submit">
		</form>';
}

?>

<?php include('include/footer.html'); ?>
