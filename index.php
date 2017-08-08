<?php get_header(); ?>

<!--BLOMG DI EDIT BLOG-->
	<div class="row">
<div class='rowi'>
		<div class="col-sm-8 blog-main">

		
 
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; ?>
			
			<nav>
	<div class="pager">
	<div class='pp'><?php 
if($link = get_previous_posts_link()) {
	previous_posts_link( 'Previous' );
	} else {
		echo "<span>Previous</span>";
	}
	?></div>
		<div class='pn'><?php
    if($link = get_next_posts_link()) {
	next_posts_link( 'Next' );
	} else {
		echo "<span>Next</span>";
	}
?></div>
		<div style='clear:both'></div>
	</div>
</nav> <?php endif; 
			?>

		</div> <!-- /.blog-main -->

		</div>

	</div> <!-- /.row -->
	

<!--BLOMG DI EDIT BLOG END-->
<?php get_footer(); ?>