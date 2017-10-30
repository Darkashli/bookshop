<article>
 <h3><?= $title ?></h3>
 <br>
  <?php foreach ($book as $bo) : ?> 
  	<h5><?php echo $bo['genre']; ?></h5>
    <h4><?php echo $bo['title']; ?></h4>
	<small class="author">By <?php echo $bo['author']; ?></small>
	<small>in <?php echo $bo['year'] ?></small>
	    <p><?php echo word_limiter($bo['describe'], 40); ?></p>
	    <br>
	    <p><a class="btn btn-default" href="<?php echo '/books/'.$bo['slug'] ?>">Read more</a></p>
	    <br>
  <?php endforeach; ?>
</article>

