<?php 
/*
Template Name: home
*/
get_header() ?>


<div class="buttons">
  <a href="#actu" class="buttons__button">Nos articles</a>
  <a href="#rules" class="buttons__button">Découvrez le baseball</a>
</div>
<hr>
<?php

  $arguments = [
     'post_type'         => 'resultat',
     'posts_per_page'    => 1,
     'orderby'           => 'desc',
     ];
     $result = new WP_Query($arguments); ?>

<section class="resultat">
<?php if ($result->have_posts()):while ($result->have_posts()): $result->the_post(); ?>
<?php   get_template_part('template-parts/template-part-result', 'resultat');?>
</section>
<?php  endwhile; endif; ?>
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
     $actualite = new WP_Query($args);
     if ($actualite->have_posts()): while ($actualite->have_posts()): $actualite->the_post(); ?>

<?php   get_template_part('template-parts/template-part-article', 'article');?>
    
    <?php endwhile; wp_reset_postdata(); endif; ?>

  </div>
  <a href="<?php bloginfo('url')?>/actualite" class="link">Voir plus d'articles</a>

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