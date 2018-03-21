<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
	
</head>
<body>
	<div class="hero">
		<h2>Login</h2>
		<form class="ui form segment">
  <div class="field">
    <label>Username</label>
    <input placeholder="Username" name="username" type="email" required>
  </div>
  <div class="field">
    <label>Password</label>
    <input placeholder="Password"  name="password" type="password" required>
  </div>
  <div class="inline field">
    <div class="ui checkbox">
      <input name="terms" type="checkbox">
      <label>I agree to the terms and conditions</label>
    </div>
  </div>
  <input type="submit" value="Submit" id="Sub">
</form>
</br>
</br>

<label>Don't have an account click here for registration</label>
		<a href="regist.php">Register</a>
	</div>
	
</body>
</html>
<?php
include('footer.php');
?>