<?php $first_logo = wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'first_team_logo', true))[0]; ?>
<?php $second_logo = wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'second_team_logo', true))[0]; ?>
<div class="resultat">
            <h2><?php the_title() ?></h2>
            <div class="teams">
                <div class="teams__one">
                    <p class="teams__one__name"><strong><?= get_post_meta(get_the_ID(), 'first_team', true) ?></strong>
                    </p>
                    <img class="teams__one__logo" src="<?= $first_logo ?>" alt="">
                </div>
                <div class="teams__middle">
                    <p class="teams__middle__versus">VS</p>
                    <p class="teams__middle__score"><?= get_post_meta(get_the_ID(), 'first_team_score', true) ?> -
                        <?= get_post_meta(get_the_ID(), 'second_team_score', true) ?></p>
                </div>
                <div class="teams__two">
                    <p class="teams__two__name"><strong><?= get_post_meta(get_the_ID(), 'second_team', true) ?></strong>
                    </p>
                    <img class="teams__two__logo" src="<?= $second_logo ?>" alt="">
                </div>
            </div>
            <p class="match_comment"><?= get_the_content(); ?></p>
    </div>
    