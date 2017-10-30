<article>
 <h3><?php echo $book['title']; ?></h3>
  <br>
   <div>
   <h5><?php echo $book ['genre']; ?></h5>
   <p class="author">By <?php echo $book['author']; ?>
   in <?php echo $book['year'] ?></p>
   <p><?php echo $book['describe']; ?></p>
  </div>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>/books/edit/<?php echo $book['slug'];  ?>">edit</a>

<?php echo form_open('/books/delete/' .$book['id']); ?>
  <input type="submit" value="delete" class="btn btn-danger">
</form>
</article>


