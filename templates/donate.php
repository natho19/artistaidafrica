<?php /* Template Name: Donate */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<!-- donors inner start-->
<section class="section text-section">
    <img class="donors-inner__bg" src="<?= AAA_IMG_DIR . 'donors_inner.png' ?>" alt="img" />
	<div class="container">
		<div class="row margin-bottom">
			<div class="col-12">
				<div class="heading heading--primary heading--center">
					<h2 class="heading__title"><span>Why help us</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quidem enim, ab assumenda rerum ullam quisquam minus aliquam natus voluptates voluptatibus ipsam autem, vero, modi aliquid saepe iste incidunt! Aperiam.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- donors inner end-->

<!-- pricing style-1 start-->
<section class="section pricing pricing-style--1">
    <div class="container">
        <div class="row offset-margin">
            <div class="col-lg-4">
                <div class="heading heading--primary">
                    <h2 class="heading__title"><span>Support us</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ipsam rem quam deserunt in quo facilis reprehenderit earum molestias quod!</p>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
                <div class="pricing-item pricing-item--primary">
                    <h6 class="pricing-item__plan">Fast & easy</h6>
                    <div class="pricing-item__price">Mobile Money</div>
                    <ul class="pricing-item__list">
                        <li>MTN MoMo</li>
                        <li>Orange Money</li>
                        <li>Instant transfer</li>
                    </ul>
                    <p class="pricing-item__info">
                        <span>Mobile:</span>
                        <strong>+233 54 2162 708</strong>
                    </p>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
                <div class="pricing-item pricing-item--primary">
                    <h6 class="pricing-item__plan">Larger and international</h6>
                    <div class="pricing-item__price">Bank Transfer</div>
                    <ul class="pricing-item__list">
                        <li>Secure transfer</li>
                        <li>Bank account</li>
                        <li>Manual confirmation</li>
                    </ul>
                    <p class="pricing-item__info">
                        <span>Account:</span>
                        <strong>XXXX XXXX XXXX XXXX</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing style-1 end-->

<?php get_footer() ?>