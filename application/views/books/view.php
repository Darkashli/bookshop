<h3><?php echo $book['title']; ?></h3>
 <br>
 <div>
   <h5 class="author"><?php echo $book['author']; ?></h5>

  <p><?php echo $book['describe']; ?></p>
 </div>
 <hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>/books/edit/<?php echo $book['slug'];  ?>">edit</a>

<?php echo form_open('/books/delete/' .$book['id']); ?>
<input type="submit" value="delete" class="btn btn-danger">
</form>

