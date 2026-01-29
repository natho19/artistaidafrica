<div class="col-md-6 col-lg-4">
    <div class="blog-item blog-item--style-1">
        <?php if (has_post_thumbnail()) : ?>
        <div class="blog-item__img">
            <img class="img--bg" src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')) ?>" alt="<?= esc_attr(get_the_title()) ?>" />
        </div>
        <?php endif; ?>
        <div class="blog-item__content">
            <h6 class="blog-item__title">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h6>
            <p><?php the_excerpt(); ?></p>
            <div class="blog-item__details">
                <span class="blog-item__date"><?= get_the_date('d M Y') ?></span>
            </div>
        </div>
    </div>
</div>