<h1><?= $title; ?></h1>
  <!-- form_validation have been created in cofig/$autoload['libraries'], second step will be in controller/posts/create -->

<?php echo validation_errors(); ?>

<?php echo form_open('books/create'); ?>

  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="Add Name">
  </div> 
  
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>

  <div class="form-group">
    <label>Genre</label>
    <input type="text" class="form-control" name="genre" placeholder="Add Genre">
  </div>

<div class="form-group">
    <label>Year</label>
    <input type="text" class="form-control" name="year" placeholder="Add Year">
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="describe" placeholder="Add Description"></textarea>
  </div>

 
 <div class="form-group">
 	<label>Category</label>
 	<select name="category_id" class="form-control">
  <?php 

      echo "<pre>";
      print_r($genre);
      echo "</pre>";

        foreach ($grene as $lui) { ?>
          <option value="<?= $lui['id'] ?>"><?= $lui['name'] ?></option>
        <?php  } ?>
 	</select>
 </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
