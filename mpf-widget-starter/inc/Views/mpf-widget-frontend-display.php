<?php

$sticky = get_option( 'sticky_posts' );
//The args 
$query_args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
	'order' => 'DESC',
	'ignore_sticky_posts' => 1, //this only ignores the fact that it' sticky, doesn't remove it from the list.
	'post__not_in' => $sticky
);

// The Query
$the_recent_query = new WP_Query( $query_args );		

// The Loop
if ( $the_recent_query->have_posts() ) {
	echo '<ul class="mpf-recent-post-widget">';
	while ( $the_recent_query->have_posts() ) {
		$the_recent_query->the_post();

		?>
		
		<a href="<?php the_permalink(); ?>">
			<li>
				
				<?php  if ( ! has_post_thumbnail() ) : ?>

					<div class="mpf-recent-col-1">
						<i class="fa fa-list-ul fa-3x" aria-hidden="true"></i>
					</div>
				
				<?php else: ?>
					<div class="mpf-recent-col-1">
						<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
					</div>
				<?php endif; ?>
					
				<div class="mpf-recent-col-2">
					<?php the_title(); ?>
				</div>

			</li>
		</a>	
		
		<?php
		
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}