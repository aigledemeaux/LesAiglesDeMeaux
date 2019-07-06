<?php if (isset(get_the_terms(get_the_ID(), 'categorie')[0]->name)){
         $oneCategory = get_the_terms(get_the_ID(), 'categorie')[0]->name; 
         } ?>
<div class="article">
            <div class="image">
            <img src="<?= the_post_thumbnail_url(); ?>" alt="">
            
                <?php if (isset($oneCategory)): ?>
                <p class="category"><?= $oneCategory ?></p>
                <?php endif; ?>
                
            
            </div>
            <div class="text_link">
            <div class="text">
                <h3><?php the_title(); ?></h3>
                <p>Publié le <span><?php the_time('d/m/Y') ?></span></p>
                <p>Par <span><?php the_author(); ?></span></p>
            </div>
            <div class="link">
                <a href="<?php the_permalink() ?>">Lire la suite</a>
            </div>
            </div>
            </div>


