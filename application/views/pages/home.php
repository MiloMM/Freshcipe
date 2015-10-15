<h1>JKGDuykgyufhgyugyegfygfygyfgfygf</h1>
<?php 
if (!empty($this->session->userdata('username'))) {
	echo "Logged in as: ".$this->session->userdata('username')."<br />"; ?>
	<a href="logout">Logout</a>
<?php } else { ?>
<a href="login">Login</a>
<?php } ?>
