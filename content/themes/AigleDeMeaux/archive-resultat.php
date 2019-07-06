<?php get_header() ?>
<?php
$args_pag = [

    'prev_text' => 'Page précédente',
    'next_text' => 'Page suivante',
];

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'resultat',
    'paged'          => $paged,
);
     $result = new WP_Query($args); ?>
     

<div class="wrapper-resultats">
<article class="section-articles">
    <h2>Tous nos résultats de matchs</h2>
    
    <?php get_template_part('template-parts/template-part-menu-tri-equipe') ?>
    
    <div class="resultats">
        
        <?php if ($result->have_posts()):while ($result->have_posts()): $result->the_post(); ?>

        <?php   get_template_part('template-parts/template-part-result', 'resultat');?>
        <hr style="border:1px solid black!important;">
        <?php  endwhile; endif; ?>
        <div class="pagination">
            <?php echo paginate_links($args_pag); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>