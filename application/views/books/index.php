<h1><?= $title ?></h1>
  <?php foreach ($book as $bo) : ?> 
    <h3><?php echo $bo['title']; ?></h3><br>
	<h5 class="author">By <?php echo $bo['author']; ?></h5>
	    <?php echo word_limiter($bo['describe'], 40); ?>
	    <br><br>
	    <p><a class="btn btn-default" href="<?php echo '/books/'.$bo['slug'] ?>">Read more</a></p>
	    <br>
  <?php endforeach; ?>

