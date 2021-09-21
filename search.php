<?php get_header(); ?>

<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string){
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    }

    $the_query = new WP_Query($search_query);
    if($the_query -> have_posts()): ?>

    <div class = "container search_results">
    <h1>Search Results</h1>
    <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
                    <div class="article">
                        <div class="image-container"><?php the_post_thumbnail(); ?> </div>
                        <div class="article-info"> 
                            <h2><a href = "<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <p><span><?php the_author(); ?></span> , <span><?php the_date('d/m/Y'); ?></span></p>
                            <div class="description"><?php the_excerpt();?></div>
                            <div class="article-categories">
                                <?php echo 'Categories:' . get_the_category_list(',');?>
                                <?php echo 'Tags:' . get_the_tag_list();?>
                            </div>
                        </div>
                    </div>
    <?php endwhile ?>

    <?php wp_reset_postdata(); ?>

    <?php else: ?>
        <h1><?php _e("No results found, try something else..."); ?></h1>
    <?php endif ?>



<?php get_footer(); ?>