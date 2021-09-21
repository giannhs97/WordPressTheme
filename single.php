<?php get_header(); ?>

<main class = "single-post">

<?php if(have_posts()):
    while(have_posts()):the_post(); ?>

        <section class = "title"> 
            <h1><?php the_title(); ?></h1>
        </section>
        
        <section class = "thumbnail">
            <?php the_post_thumbnail(); ?>
        </section>

        <section class = "content">
            <?php the_content(); ?>
        </section>

        <section class = "post-info">
            <p>Written by <span><?php the_author(); ?></span> on <span><?php the_date('d/m/Y'); ?></span></p>
            <p><?php the_category(); ?></p>
            <p><?php the_tags(); ?></p>
        </section>

        <section class = "comments-section">
            <?php comments_template(); ?>
        </section>

    <?php endwhile;
endif; ?> 

</main>
<?php get_footer(); ?>