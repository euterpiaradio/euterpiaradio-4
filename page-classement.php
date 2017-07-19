<?php
$the_query = new WP_Query( array(
	'posts_per_page' => 1,
	'post_type'      => 'charts'
) );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post();
		get_template_part( 'partials/post', get_post_type() );
	endwhile;
	wp_reset_postdata();
}
