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
    <h1>Toutes les actualités</h1>
    <?php $categories = get_terms(array(
    'taxonomy' => 'categorie')); ?>
    <pre>
        <?php var_dump($categories); ?>
        <pre>
    <div class="category">
        <a href="#">Match</a>
        <a href="#">Tournoi</a>
        <a href="#">L'equipe</a>
        <a href="#">Baseball</a>
        <a href="#">Divers</a>
    </div>

    <div class="articles">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
    $category = get_the_terms(get_the_ID(), 'categorie');
    ?>

        <div class="article">
            <p class="article__category"><?= $category[0]->name ?></p>
            <h3 class="article__title"><?php the_title()?></h3>
            <img class="article__image" src="<?php the_post_thumbnail_url() ?>" alt="image de l'actualité">
            <p class="article__text"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="article__link">Lire la suite</a>
        </div>

    <?php endwhile; endif; ?>
    <div class="pagination">
    <?php echo paginate_links($args_pag); ?>
    </div>

    </div>
</article>
<?php get_footer(); ?>
    