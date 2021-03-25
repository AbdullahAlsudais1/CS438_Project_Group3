<?php  if (count($problem) > 0) : ?>
  <div class="error">
  	<?php foreach ($problem as $problem) : ?>
  	  <p><?php echo $problem ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
