<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<!-- promo start-->
<?php if (have_rows('slides')) : ?>
<section class="promo">
    <div class="promo-slider">
        <?php while (have_rows('slides')) : the_row(); ?>
            <?php
            $promo_background = get_sub_field('background');
            $promo_title = get_sub_field('title');
            $promo_description = get_sub_field('description');
            $promo_link = get_sub_field('link');
            ?>
            <div class="promo-slider__item promo-slider__item--style-1">
                <?php if (($promo_background)) : ?>
                    <picture>
                        <img class="img--bg" src="<?= esc_url($promo_background['url']); ?>" alt="<?= esc_attr($promo_background['alt']); ?>" />
                    </picture>
                <?php endif; ?>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <?php if ($promo_title) : ?>
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title">
                                                <span><?= esc_html($promo_title); ?></span>
                                            </h2>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($promo_description) : ?>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle"><?= esc_html($promo_description); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($promo_link) : ?>
                                        <div class="promo-slider__wrapper-3">
                                            <a class="button promo-slider__button button--primary" href="<?= esc_url($promo_link['url']); ?>">
                                                <?= esc_html($promo_link['title']); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <ul class="promo-socials">
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </li>
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </li>
    </ul>

    <div class="promo-pannel-block">
        <div class="promo-pannel">
            <a class="anchor promo-pannel__anchor" href="#about">
                <span>Scroll Down</span>
            </a>
            <div class="promo-pannel__phones">
                <p class="promo-pannel__title">Phone number</p>
                <a class="promo-pannel__link" href="tel:+233308092057">+233 30 80 92 057</a>
            </div>
            <div class="promo-pannel__email">
                <p class="promo-pannel__title">Email</p>
                <a class="promo-pannel__link" href="mailto:artistaidafrica@gmail.com">artistaidafrica@gmail.com</a>
            </div>
        </div>
    </div>

    <div class="slider__nav slider__nav--promo">
        <div class="promo-slider__count"></div>
        <div class="slider__arrows">
            <div class="slider__prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="slider__next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- promo end-->

<!-- about us start-->
 <?php
$about_title = get_field('home_about_title');
$about_description = get_field('home_about_description');
$about_link = get_field('home_about_link');
$about_image = get_field('home_about_image');
?>
<section id="about" class="section about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <?php if ($about_title) : ?>
                    <div class="heading heading--primary">
                        <h2 class="heading__title"><span><?= esc_html($about_title); ?></span></h2>
                    </div>
                <?php endif; ?>

                <?php if ($about_description) : ?>
                    <?= wp_kses_post($about_description); ?>
                <?php endif; ?>

                <?php if ($about_link) : ?>
                    <a class="button button--primary" href="<?= esc_url($about_link['url']) ?>"><?= esc_html($about_link['title']) ?></a>
                <?php endif; ?>
            </div>

            <?php if ($about_image) : ?>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="info-box">
                        <img class="img--bg" src="<?= esc_url($about_image['url']); ?>" alt="<?= esc_attr($about_image['alt']); ?>" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- about us end-->

<!-- section start-->
<?php
$what_we_do_title = get_field('what_we_do_title');
$what_we_do_link = get_field('what_we_do_link');
?>
<section class="section background--brown">
    <div class="container">
        <?php if ($what_we_do_title) : ?>
            <div class="row margin-bottom">
                <div class="col-12">
                    <div class="heading heading--primary heading--center">
                        <h2 class="heading__title"><span><?= esc_html($what_we_do_title); ?></span></h2>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (have_rows('what_we_do')): ?>
            <div class="row">
                <?php while (have_rows('what_we_do')): the_row(); ?>
                    <?php
                    $illustration = get_sub_field('illustration');
                    $description = get_sub_field('description');
                    ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="icon-item">
                            <?php if ($illustration) : ?>
                                <div class="icon-item__img">
                                    <img src="<?= esc_url($illustration['url']); ?>" alt="<?= esc_attr($illustration['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <?php if ($description) : ?>
                                <div class="icon-item__text">
                                    <p><?= esc_html($description); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ($what_we_do_link) : ?>
            <div class="row text-center">
                <div class="col-12">
                    <a class="action-block__link button button--primary" href="<?= esc_url($what_we_do_link['url']); ?>"><?= esc_html($what_we_do_link['title']); ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- section end-->

<?php
$any_information_background = get_field('any_information_background');
$any_information_title = get_field('any_information_title');
$any_information_description = get_field('any_information_description');
$any_information_link = get_field('any_information_link');
?>
<section class="section action-section">
    <?php if ($any_information_background): ?>
        <div class="jarallax">
            <img class="jarallax-img" src="<?= esc_url($any_information_background['url']); ?>" alt="<?= esc_attr($any_information_background['alt']); ?>" />
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ($any_information_title): ?>
                    <h2 class="action-section__title">
                        <?= esc_html($any_information_title); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($any_information_description): ?>
                    <p class="action-section__text">
                        <?= esc_html($any_information_description); ?>
                    </p>
                <?php endif; ?>

                <?php if ($any_information_link): ?>
                    <a class="action-section__button button button--primary" href="<?= esc_url($any_information_link['url']); ?>">
                        <?= esc_html($any_information_link['title']); ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<!-- testimonials style-1 start-->
<?php
$testimonials_title = get_field('testimonials_title');
$testimonials_items = get_field('testimonials');
if ($testimonials_items) : 
?>
<section class="section testimonials">
    <div class="container">
        <div class="row align-items-end margin-bottom">
            <?php if ($testimonials_title): ?>
                <div class="col-lg-8 col-xl-7 offset-xl-1">
                    <div class="heading heading--primary">
                        <h2 class="heading__title"><span><?= esc_html($testimonials_title); ?></span></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-4 col-xl-3">
                <div class="slider__nav testimonials-style-1__nav">
                    <div class="slider__arrows">
                        <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                        <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="testimonials-slider testimonials-slider--style-1">
                    <?php foreach ($testimonials_items as $item): ?>
                        <?php
                        $testimonial = $item['testimonial'];
                        $author = $item['author'];
                        ?>
                        <div class="testimonials-slider__item">
                            <div class="testimonials-slider__icon">“</div>
                            <div class="testimonials-slider__text">
                                <?php if ($testimonial) : ?>
                                    <p><?= esc_html($testimonial); ?></p>
                                <?php endif; ?>
                                <?php if ($author) : ?>
                                    <div class="testimonials-slider__author">
                                        <span class="testimonials-slider__name"><?= esc_html($author); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- testimonials style-1 end-->

<?php get_footer(); ?>