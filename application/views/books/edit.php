<article>
<h3><?= $title; ?></h3>

<?php echo validation_errors(); ?>

<?php echo form_open('books/update'); ?>
<input type="hidden" name="id" value="<?php echo $book['id']; ?>">

 <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="Add the author" value="<?php echo $book['author']; ?>">
  </div>

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add the title" value="<?php echo $book['title']; ?>">
  </div>

  <div class="form-group">
    <label>Genre</label>
    <input type="text" class="form-control" name="genre" placeholder="Add the genre" value="<?php echo $book['genre']; ?>">
  </div>

  <div class="form-group">
    <label>Year</label>
    <input type="text" class="form-control" name="year" placeholder="Add the year" value="<?php echo $book['year']; ?>"> 
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="describe" placeholder="Add the description"><?php echo $book['describe']; ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">edit</button>
</form>
</article>
