<article <?php post_class(); ?>>
    <header>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </header>
    <?php if ( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
    <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    </div>
    </a>
    <?php endif; ?>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
    <footer>
        <?php the_date(); ?>
    </footer>
</article>
<?php
