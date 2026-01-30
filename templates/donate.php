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
					<p>Supporting ArtistAid Africa means investing in the power of art to create lasting social, cultural, and economic impact. Your support helps empower African artists, strengthen local communities, preserve cultural heritage, and address critical issues such as education, gender equality, environmental sustainability, and youth empowerment. By helping us, you contribute to building a more inclusive and sustainable creative ecosystem across Africa.</p>
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
                    <p>Support ArtistAid Africa by donating, partnering with us, or sharing our mission. Every contribution helps empower artists, support youth programs, and drive meaningful community impact through art. Thank you for believing in our vision and helping us create positive change across Africa.</p>
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