<?php get_header(); ?>

<div id = "search_popup" style = "display: none;">
    <form action = "/" method = "get">
        <input type = "text" name = "s" placehold = "Search..." id = "search" value = "<?php the_search_query(); ?>" />
        <input type = "submit" alt = "search"/>
    </form
</div>




<?php get_footer(); ?>
