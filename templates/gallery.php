<?php /* Template Name: Gallery */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>


<!-- gallery start-->
<?php $gallery_images = get_field('gallery'); if ($gallery_images) : ?>
    <section class="section gallery">
        <div class="row no-gutters gallery-masonry">
            <?php foreach ($gallery_images as $image) : ?>
            <div class="col-12 col-sm-6 col-md-4 gallery-masonry__item">
                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="<?= esc_url($image['url']) ?>" data-fancybox="gallery">
                    <img class="img--bg" src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" />
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<!-- gallery end-->

<?php get_footer() ?>