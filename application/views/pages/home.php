<h1>Home</h1>
<?php 
if (!empty($this->session->userdata('username'))) {
	echo "Welcome: ".$this->session->userdata('username')."<br />"; 


	?>
	
	<a href="showprofile">Profiel</a><br>
	<a href="createrecipe">Post recipe</a><br>

	<a href="logout">Logout</a><br>




<?php } else { ?>
<<<<<<< HEAD
<a href="/school/project/login">Login</a><p>or</p><a href="register">Register</a>
<?php } ?>
=======
<a href="login">Login</a><p>or</p><a href="register">Register</a><br>
<?php } 

var_dump($recipes);


foreach ($recipes->result_array() as $row){
	echo $row['title'];?><br><?php 
	echo " " . $row['content'] . " <br> <br>"; 
}

?>
>>>>>>> 6d97598e38ac2cfb433c69eea06bb0eb5a216cef
