<?php
			session_start();
			$gl_err_count=0;
			$gl_login_err_count = 0;
			
			
$user_name = "";
$password = "";
$db = "bike";
$con = mysqli_connect('localhost', 'bike', 'password', $db);
if (!$con) {
	die(mysql_error);
}
if (isset($_POST['reg_user'])){
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
  
  if ($password_1 != $password_2) {
	$message="passwords do not match";
	  echo "<script type='text/javascript'>
	  alert('$message');
	  </script>
	  ";
	  $gl_err_count++;
  }
  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $message="username already exists!";
	  echo "<script type='text/javascript'>
	  alert('$message');
	  </script>
	  ";
	  $gl_err_count++;
    }

    if ($user['email'] === $email) {
      $message="email already exists!";
	  echo "<script type='text/javascript'>
	  alert('$message');
	  </script>
	  ";
	  $gl_err_count++;
    }
  }
  if ($gl_err_count == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: contact.php');
  }
  


			}
			
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  

 
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND email = '$email' AND password='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: contact.php');
  	}
	else {
		$message2 = "User doesn't exist";
		echo "<script type='text/javascript'>
	  alert('$message2');
	  </script>
	  ";
	  
  	}
  
}
 if (isset($_POST['send_message'])){

$message2 = "User doesn't exist";
		echo "<script type='text/javascript'>
	  alert('$message2');
	  </script>
	  ";
/* $query = "INSERT INTO con_form(name, email, phone, message) VALUES ('$_POST[name]','$_POST[email]','$_POST[tel]','$_POST[text]')";
$qr = mysqli_query($con, $query);
if ($qr) {
	echo "your message has been sent";
}
mysql_close($con);
			}  */

?>