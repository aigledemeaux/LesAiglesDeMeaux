<?php get_header(); ?>

<?php if(isset($categorie)): ?>
<?php $args_pag = [

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
    <h2><?= $categorie ?></h2>
<?php get_template_part('template-parts/template-part-menu-tri-category') ?>

    <div class="articles">
        <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

        <?php   get_template_part('template-parts/template-part-article', 'article');?>

        
        <?php endwhile; endif; ?>
        <div class="pagination">
            <?php echo paginate_links($args_pag); ?>
        </div>

    </div>
</article>
    <?php endif; ?>

    <!-- ---------------------------------------------------------------------------- -->

    <?php if(isset($equipe)): ?>
    <?php
$args_pag = [

    'prev_text' => 'Page précédente',
    'next_text' => 'Page suivante',
];

/*$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'resultat',
    'paged'          => $paged,
);*/
     //$result = new WP_Query($args); ?>
     

<div class="wrapper-resultats">
<article class="section-articles">
    <h2><?= $equipe ?></h2>
    

    <?php get_template_part('template-parts/template-part-menu-tri-equipe') ?>

    <div class="resultats">
        
        <?php if (have_posts()):while (have_posts()): the_post(); ?>

        <?php   get_template_part('template-parts/template-part-result', 'resultat');?>
        <hr style="border:1px solid black!important;">
        <?php  endwhile; endif; ?>
        <div class="pagination">
            <?php echo paginate_links($args_pag); ?>
        </div>
    </div>
</div>
<?php endif; ?>

    
<?php get_footer(); ?>