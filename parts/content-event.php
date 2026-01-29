<div class="col-xl-10 offset-xl-1">
    <div class="upcoming-item">
        <div class="upcoming-item__date">
            <span><?= get_the_date('d') ?></span>
            <span><?= get_the_date('M, Y') ?></span>
        </div>
        <div class="upcoming-item__body">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-4">
                    <div class="upcoming-item__img">
                        <img class="img--bg" src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')) ?>" alt="<?= esc_attr(get_the_title()) ?>" />
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="upcoming-item__description">
                        <h6 class="upcoming-item__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h6>
                        <?php the_excerpt(); ?>
                        <div class="upcoming-item__details">
                            <p>
                                <svg class="icon">
                                    <use xlink:href="#placeholder"></use>
                                </svg>
                                <strong>Dark Spurt, San Francisco, CA 94528, USA</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>