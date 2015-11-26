<?php
include"application/views/templates/header.php";

if ($this->session->userdata('id') == NULL) {
 header("Location: home");
} else {
?>

<br />
<form action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button name="backhome" class="btn btn-secondary"><a href="home">Back</a></button>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostTitle" class="control-label col-md-1">Recipe Title</label>
        <div class="col-xs-3">
            <input type="text" class="form-control"  name="posttitle" id="inputPostTitle" placeholder="Recipe title">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostContent" class="control-label col-xs-1">Content</label>
        <div class="col-xs-3">
            <textarea rows="3" type="text" class="form-control" name="postcontent" id="inputPostContent" placeholder="Content"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostContent" class="control-label col-xs-1">Tags</label>
        <div class="col-xs-3">
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="spicy">Spicy
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="indian">Indian <br>
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="crispy">Crispy 
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="italian">Italian <br>
        </div>
    </div>
	<!---  COMMENTAAR -->
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button name="createpost" type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>

<?php
}
	include"application/views/templates/footer.php";
?>