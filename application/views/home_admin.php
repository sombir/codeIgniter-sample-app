<div class="container">
<div class="jumbotron1">
  <h1>Welcome to Admin Page</h1>
	<?php
		if (isset($this->session->userdata['logged_in'])) {
			$username = ($this->session->userdata['logged_in']['username']);
			$email = ($this->session->userdata['logged_in']['email']);
		} else {
			header("location: home");
		}
		echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";

		echo "<br/>";
		echo "Your Username is: <b>" . $username. "</b>";
		echo "<br/>";
		echo "Your Email is: <b>" . $email. "</b>";
		echo "<br/>";
		echo "<br/>";
	?>
</div>
</div>

