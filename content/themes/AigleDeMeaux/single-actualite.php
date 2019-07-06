<?php get_header(); 
the_post(); ?>

<div class="wrapper-single_actu">
    <div class="single">
        <img class="single__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h2 class="single__title" ><?php the_title(); ?></h2>
        <div class="single__infos">
            <div class="single__infos__publish">
                <p class="single__infos__publish__avatar"><?= get_avatar(get_the_author_meta('ID'), 70); ?></p>
                <p class="single__infos__publish__pipe">|</p>
                <div class="single__infos__publish__author">
                    <p class="single__infos__publish__author__date">Publié le <span><?php the_time('d/m/Y'); ?></span></p>
                    <p class="single__infos__publish__author__name">Par <span><?php the_author(); ?></span></p>
                </div>
            </div>
            <p class="single__infos__category">Catégorie : <span><?= get_the_terms(get_the_ID(), 'categorie')[0]->name; ?></span></p>
        </div>
        <div class="single__content">
            <p class="single__content__text"><?php the_content(); ?></p>
        </div>
        <a class="single__back" href="<?= bloginfo('url').'/actualite' ?>">Retour à tous les articles</a>
</div>
<?php get_footer(); ?>