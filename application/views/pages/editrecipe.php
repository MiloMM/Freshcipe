<?php
include"application/views/templates/header.php";

<<<<<<< HEAD
var_dump(strstr($recipe[0]['tags'],"spicy"));
=======
if ($this->session->userdata('id') == NULL) {
 header("Location: home");
} else {
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
?>

<br />
<form action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="inputPostTitle" class="control-label col-md-1">Recipe Title</label>
        <div class="col-xs-3">
<<<<<<< HEAD
            <input type="text" class="form-control" value="<?php echo $recipe['0']['title'] ?>" name="posttitle" id="inputPostTitle" placeholder="Recipe title">
=======
            <input type="text" class="form-control" value="" name="posttitle" id="inputPostTitle" placeholder="Recipe title">
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostContent" class="control-label col-xs-1">Content</label>
        <div class="col-xs-3">
<<<<<<< HEAD
            <textarea rows="3" type="text" class="form-control" value="<?php echo $recipe['0']['content'] ?>" name="postcontent" id="inputPostContent" placeholder="Content"><?php echo $recipe['0']['content'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPostContent" class="control-label col-xs-1">Tags</label>
        <div class="col-xs-3">
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="spicy" <?php echo((strstr($recipe[0]['tags'],"spicy") != FALSE)?"checked=checked":"") ?>>Spicy
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="indian" <?php echo((strstr($recipe[0]['tags'],"indian") != FALSE)?"checked=checked":"") ?>>Indian <br>
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="crispy" <?php echo((strstr($recipe[0]['tags'],"crispy") != FALSE)?"checked=checked":"") ?>>Crispy 
            <input type="checkbox" name="postTags[]" id="inputPostTags" value="italian" <?php echo((strstr($recipe[0]['tags'],"italian") != FALSE)?"checked=checked":"") ?>>Italian <br>
=======
            <textarea rows="3" type="text" class="form-control" name="postcontent" id="inputPostContent" placeholder="Content"></textarea>
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
        </div>
    </div>
	<!---  COMMENTAAR -->
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
<<<<<<< HEAD
            <button name="createpost" type="submit" class="btn btn-primary">Edit</button>
=======
            <button name="createpost" type="submit" class="btn btn-primary">Create</button>
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
        </div>
    </div>
</form>

<?php
<<<<<<< HEAD
=======
}
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
	include"application/views/templates/footer.php";
?>