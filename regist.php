<?php

include('header.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>CAR SHOP</title>
<script type="module">
var $password = $("#password");
var $confirmPassword = $("#confirm_password");

$("form span").hide();

function isPasswordValid()
 {
  return $password.val().length > 8;
}

function arePasswordsMatching() 
{
  return $password.val() === $confirmPassword.val();
}

function canSubmit() 
{
  return isPasswordValid() && arePasswordsMatching();
}

function passwordEvent()
 {
 if (isPasswordValid()) 
 {
      $password.next().hide();
  } 
  else 
  {
        $password.next().show();
  }
}

function confirmPasswordEvent() 
{
  if (arePasswordsMatching()) 
  {
        $confirmPassword.next().hide();
  }
  else 
  { 
    $confirmPassword.next().show();
  }
}

function enableSubmitEvent()
 {
  $("#submit").prop("disabled", !canSubmit());
}
enableSubmitEvent();
</script>

<link rel="stylesheet" type="text/css" href="css/re.css"/>

</head>
<body>
	<div class="hero">
		<h2>Register</h2>
			

<form action="#" method="post">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
	</form>

 </div>
	</div>
	
</body>
</html>

<?php

include('footer.php');
?>