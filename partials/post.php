<article <?php post_class(); ?>>
    <header>
        <?php if ( is_single() ): ?>
        <?php the_title(); ?>
        <?php else: ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php endif; ?>
    </header>
    <?php if ( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
    <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    </div>
    </a>
    <?php endif; ?>
    <div class="content">
        <?php is_single() || is_page() ? the_content() : the_excerpt(); ?>
    </div>
    <footer>
        <div class="date"><p><?php echo get_the_date(); ?></p></div>
    </footer>
</article>
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
