
    <?php $equipes = get_terms(array(
    'taxonomy' => 'equipe')); ?>
    <div class="category-tel">

        <ul class="nav nav-pills">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"> Catégories </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php bloginfo('url')?>/resultat">Aucun tri</a>
                    <div class="dropdown-divider"></div>
                    <?php foreach ($equipes as $equipe): ?>
                    <?php $equipeLink = get_category_link($equipe->term_id) ?>
                    <a class="dropdown-item" href="<?= $equipeLink?>"><?= $equipe->name ?></a>
                    <?php endforeach; ?>
                    


                </div>
            </li>

        </ul>
    </div>
    <div class="category-pc">
        <a href="<?php bloginfo('url')?>/resultat">Aucun tri</a>
        <?php foreach ($equipes as $equipe): ?>
        <?php $equipeLink = get_category_link($equipe->term_id) ?>
        <a href="<?= $equipeLink?>"><?= $equipe->name ?></a>
        <?php endforeach; ?>
    </div>
    </article>