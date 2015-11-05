<h1>Home</h1>
<?php 
if (!empty($this->session->userdata('username'))) {
	echo "Logged in as: ".$this->session->userdata('username')."<br />"; 


	?>
	
	<a href="createrecipe">Post recipe</a><br>

	<a href="logout">Logout</a>




<?php } else { ?>
<a href="login">Login</a><p>or</p><a href="register">Register</a>
<?php } ?>