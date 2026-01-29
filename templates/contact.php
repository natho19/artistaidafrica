<?php /* Template Name: Contact */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<!-- section start-->
<section class="section contacts">
	<div class="container">
		<div class="row offset-margin">
			<div class="col-sm-6 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
						<svg class="icon icon-item__icon icon--red">
							<use xlink:href="#location-pin"></use>
						</svg>
					</div>
					<div class="icon-item__text">
						<p>Adress: Elliott Ave, Parkville VIC 3052, Melbourne Canada</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
						<svg class="icon icon-item__icon icon--orange">
							<use xlink:href="#phone-call"></use>
						</svg>
					</div>
					<div class="icon-item__text">
						<p>Phone: <a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
						<svg class="icon icon-item__icon icon--green">
							<use xlink:href="#envelope"></use>
						</svg>
					</div>
					<div class="icon-item__text">
						<p>Email: <a class="icon-item__link" href="mailto:support@helpo.org">support@helpo.org</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
						<svg class="icon icon-item__icon icon--blue">
							<use xlink:href="#share"></use>
						</svg>
					</div>
					<div class="icon-item__text">
						<!-- socials start-->
						<ul class="socials">
							<li class="socials__item">
                                <a class="socials__link" href="#">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
                            </li>
							<li class="socials__item">
                                <a class="socials__link socials__link--active" href="#">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a>
                            </li>
							<li class="socials__item">
                                <a class="socials__link" href="#">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
                            </li>
						</ul>
						<!-- socials end-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end-->
 
<!-- contacts start-->
<section class="section contacts no-padding-top">
	<div class="contacts-wrapper">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-6">
	 				<?= do_shortcode('[contact-form-7 id="a6324ce" title="Contact form" html_class="form message-form"]'); ?>
				</div>
			</div>
		</div>
		<?php $location = get_field('location'); if($location) : ?>
			<div class="contacts-wrapper__map">
				<div class="marker" data-lat="<?= esc_attr($location['lat']); ?>" data-lng="<?= esc_attr($location['lng']); ?>"></div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- contacts end-->

<?php get_footer() ?>