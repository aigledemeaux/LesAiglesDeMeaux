<?php
get_header();
the_post(); ?>
<div class="wrapper_page">
<h2 class="wrapper_page_title"><?php the_title() ?></h2>
<div class="wrapper_page_content">
<?php the_content(); ?>
</div> 
</div>
<?php get_footer();
?>