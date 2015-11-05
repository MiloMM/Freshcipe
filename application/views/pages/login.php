<?php
include"application/views/templates/header.php";


?>

<br />
<form action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="inputUsername" class="control-label col-md-1">Username</label>
        <div class="col-xs-3">
            <input type="text" class="form-control"  name="username" id="inputUsername" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-1">Password</label>
        <div class="col-xs-3">
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        </div>
    </div>
	<!---  COMMENTAAR -->
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button name="login" type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>

<?php
	include"application/views/templates/footer.php";
?>