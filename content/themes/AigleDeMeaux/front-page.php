<?php 
/*
Template Name: home
*/
get_header() ?>
    </div>
    <div class="header-bottom__buttons">
        <a href="#actu" class="header-bottom__buttons__button">Nos articles</a>
        <a href="#rules" class="header-bottom__buttons__button">Découvrez le baseball</a>
    </div>
</div>
</header>
<hr>
<section class="resultat">
  <h2>Résultat du dernier match</h2>
  <div class="teams">
    <div class="teams__one">
      <p class="teams__one__name"><strong>Les aigles de Meaux</strong></p>
      <img class="teams__one__logo" src="content/themes/AigleDeMeaux/public/images/aigleLogo.png" alt="">
    </div>
    <div class="teams__middle">
      <p class="teams__middle__versus">VS</p>
      <p class="teams__middle__score">8-18</p>
    </div>
    <div class="teams__two">
      <p class="teams__two__name"><strong>Chantilly</strong></p>
      <img class="teams__two__logo" src="content/themes/AigleDeMeaux/public/images/orgevalLogo.png" alt="">
    </div>
  </div>
</section>
<hr>
<section class="carousel">
  <h2 class="title">Quelques photos</h2>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="content/themes/AigleDeMeaux/public/images/inscription.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="content/themes/AigleDeMeaux/public/images/reprise.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="content/themes/AigleDeMeaux/public/images/reprise2.jpg" class="d-block w-100" alt="...">
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<hr>
<article class="section-articles">
  <h2 class="title" id="actu">Nos actualités</h2>
  <div class="articles">

<?php

  $args = [
     'post_type'         => 'actualite',
     'posts_per_page'    => 3,
     'orderby'           => 'desc',
     ];
     $cheese = new WP_Query($args);
     if ($cheese->have_posts()): while ($cheese->have_posts()): $cheese->the_post(); ?>
      <div class="article">
            <p class="article__category"><?= get_the_terms(get_the_ID(), 'categorie')[0]->name; ?></p>
            <h3 class="article__title"><?php the_title(); ?></h3>
            <img src="<?= the_post_thumbnail_url(); ?>" alt="" class="article__image">
            <p class="article__text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>" class="article__link">Lire la suite</a>
          </div>
   <?php endwhile; wp_reset_postdata(); endif; ?>

  </div>
  <a href="<?php bloginfo('url')?>/articles" class="link">Voir plus d'articles</a>

</article>
<hr>
<section class="rules">
  <h2 class="rules__title" id="rules">Découvrez le baseball</h2>
  <div class="rules__position">
    <img src="content/themes/AigleDeMeaux/public/images/TerrainDeBaseball.png" alt="" class="rules__position__image">
    <div class="rules_position_text">
    <p><span>C (catcher) :</span> Attrape la balle du lanceur.</p>
    <p><span>P (Pitcher) :</span> Lance la batte au batteur.</p>
    <p><span>2B (2ème base) :</span> Se tient prêt a réceptionner la balle en 2ème base.</p>
    <p><span>3B (3ème base) :</span> Se tient prêt a réceptionner la balle en 3ème base.</p>
    <p><span>LF (Left Field) :</span> Attrape la balle du lanceur.</p>
    <p><span>CF (Center Field) :</span> Attrape la balle du lanceur.</p>
    <p><span>RF (Right Field) :</span> Attrape la balle du lanceur.</p>
    <p><span>SS (Short Stop) :</span> Attrape la balle du lanceur.</p>
</div>
  </div>
</section>



<?php get_footer() ?>