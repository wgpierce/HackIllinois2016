<?php
session_start();
include_once 'deere_service.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.html'); ?>

  <body>
  
  <?php
	// Store the Access Token object in Session, that would later be used to make calls, under AbstractService.php/request() method
	
	// Fetch user info and store in session
	if(!isset($_SESSION['account_name']) || $_SESSION['account_name'] == '') {
		$result = json_decode( $deereService->request( '/users/@currentUser' ), true );
		//print_r($result); exit;
		$_SESSION['account_name'] = $result['accountName'];
		$_SESSION['user'] = $result['givenName'].' '.$result['familyName'];
		$_SESSION['user_type'] = $result['userType'];
		$_SESSION['access_token'] = $config['access_token'];
		$_SESSION['access_token_secret'] = $config['access_token_secret'];
	}
  ?>

    <div class="container">

      <?php include('includes/nav.html'); ?>

    </div> <!-- /container -->
	
	<div class="container">
      <div class="page-header">
        <h2>Welcome <?php echo $_SESSION['user']; ?>!</h2>
		<br><br>
		<table id="user_details">
		<tr><td>Account Name</td><td><?php echo $_SESSION['account_name']; ?></td></tr>
		<tr><td>User Type</td><td><?php echo $_SESSION['user_type']; ?></td></tr>
		<tr><td>Access Token</td><td><?php echo $config['access_token']; ?></td></tr>
		<tr><td>Access Token Secret</td><td><?php echo $config['access_token_secret']; ?></td></tr>
		</table>
      </div>
		
    </div>
	
	<footer class="footer">
      <div class="container">
        <p class="text-muted">MyJD API</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
