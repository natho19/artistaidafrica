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
						<p>Phone:
							<a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a>
							<a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a>
						</p>
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
						<p>Email:
							<a class="icon-item__link" href="mailto:support@helpo.org">support@helpo.org</a>
						</p>
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
                                <a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
							<li class="socials__item">
                                <a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li class="socials__item">
                                <a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
							<li class="socials__item">
                                <a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
					<form class="form message-form" action="javascript:void(0);">
						<h6 class="form__title">Send Message</h6>
                        <span class="form__text">* The following info is required</span>
						<div class="row">
							<div class="col-lg-6">
								<input class="form__field" type="text" name="first-name" placeholder="First Name *" required="required" />
							</div>
							<div class="col-lg-6">
								<input class="form__field" type="text" name="last-name" placeholder="Last Name *" required="required" />
							</div>
							<div class="col-lg-6">
								<input class="form__field" type="email" name="email" placeholder="Email *" required="required" />
							</div>
							<div class="col-lg-6">
								<input class="form__field" type="tel" name="phone-number" placeholder="Phone" />
							</div>
							<div class="col-12">
								<textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
							</div>
							<div class="col-12">
								<button class="form__submit" type="submit">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="contacts-wrapper__map" id="map" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-longitude="-73.935242" data-latitude="40.730610" data-marker="img/marker.png"></div>
	</div>
</section>
<!-- contacts end-->

<?php get_footer() ?>