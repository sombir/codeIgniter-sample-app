<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">  
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/signin.css">  
</head>
<body>
<div class="container">
  <form class="form-signin" method="post" action="/home/user_login">
	<h2 class="form-signin-heading">Please sign in</h2>
	<label for="username" class="sr-only">Username</label>
	<input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
	<label for="password" class="sr-only">Password</label>
	<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
	<div class="checkbox">
	  <label>
		<input type="checkbox" value="remember-me"> Remember me
	  </label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->
</body>
</html>
