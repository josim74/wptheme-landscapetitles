<?php get_header(); ?>
    <div id="content">
        <?php while (have_posts()): the_post() ?>
        <div class="picture"> <?php the_post_thumbnail(); ?></div>
        <div class="contenttext">
        	<h2><?php the_title() ?></h2>
                <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>

