<footer><h5>&#169 JohnStam Theme<h5>
    <nav>
            <div class="bot-nav">
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'main_menu_footer'));?>
    </nav>  
    
    <nav>
            <div class="second-bot-nav">
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'second_footer_menu'));?>
    </nav> 
    
    <div class="thanks"><?php dynamic_sidebar('Thanks Section'); ?></div>
    <div class="social"><?php dynamic_sidebar('Social Media'); ?></div>


</footer>

<?php wp_footer();?>


</body>
</html>