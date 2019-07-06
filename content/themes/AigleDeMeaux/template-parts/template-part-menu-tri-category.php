
    <?php $categories = get_terms(array(
    'taxonomy' => 'categorie')); ?>
    <div class="category-tel">

        <ul class="nav nav-pills">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"> Catégories </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php bloginfo('url')?>/actualite">Aucun tri</a>
                    <div class="dropdown-divider"></div>
                    <?php foreach ($categories as $category): ?>
                    <?php $categoryLink = get_category_link($category->term_id) ?>
                    <a class="dropdown-item" href="<?= $categoryLink?>"><?= $category->name ?></a>
                    <?php endforeach; ?>
                    


                </div>
            </li>

        </ul>
    </div>
    <div class="category-pc">
    <a href="<?php bloginfo('url')?>/actualite">Aucun tri</a>
    <?php foreach ($categories as $category): ?>
        <?php $categoryLink = get_category_link($category->term_id) ?>
        <a href="<?= $categoryLink?>"><?= $category->name ?></a>
        <?php endforeach; ?>
    </div> 