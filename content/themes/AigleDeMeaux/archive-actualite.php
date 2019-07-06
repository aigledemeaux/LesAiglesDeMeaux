<?php get_header(); ?>
<?php
$args_pag = [

    'prev_text' => 'Page précédente',
    'next_text' => 'Page suivante',
];

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'actualite',
    'paged'          => $paged,
);

$the_query = new WP_Query( $args );

?>
<article class="section-articles">
    <h2>Toutes les actualités</h2>
<?php get_template_part('template-parts/template-part-menu-tri-category') ?>
    

    <div class="articles">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php if (isset(get_the_terms(get_the_ID(), 'categorie')[0]->name)){
         $oneCategory = get_the_terms(get_the_ID(), 'categorie')[0]->name; 
         } ?>
         <?php   get_template_part('template-parts/template-part-article', 'article');?>
        
        <?php endwhile; endif; ?>
        <div class="pagination">
            <?php echo paginate_links($args_pag); ?>
        </div>

    </div>
</article>
<?php get_footer(); ?>