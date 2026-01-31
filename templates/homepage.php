<?php /* Template Name: Homepage */ ?>

<?php get_header() ?>

<!-- promo start-->
<section class="promo">
    <div class="promo-slider">
        <div class="promo-slider__item promo-slider__item--style-1">
            <picture>
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'promo_2.png' ?>" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-container__item">
                                <div class="promo-slider__wrapper-1">
                                    <h2 class="promo-slider__title">
                                        <span>Empowering African Arts</span>
                                    </h2>
                                </div>
                                <div class="promo-slider__wrapper-2">
                                    <p class="promo-slider__subtitle">ArtistAid Africa uses the transformative power of art to empower artists, inspire social change, and promote sustainable development across the continent.</p>
                                </div>
                                <div class="promo-slider__wrapper-3">
                                    <a class="button promo-slider__button button--primary" href="http://localhost/artistaidafrica/introducing-artistaid-africa-empowering-communities-through-art/">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- promo socials start-->
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
    <!-- promo socials end-->

    <!-- promo pannel start-->
    <div class="promo-pannel-block">
        <div class="promo-pannel">
            <a class="anchor promo-pannel__anchor" href="#about">
                <span>Scroll Down</span>
            </a>
            <div class="promo-pannel__phones">
                <p class="promo-pannel__title">Phone numbers</p>
                <a class="promo-pannel__link" href="tel:+233308092057">+233 30 80 92 057</a>
            </div>
            <div class="promo-pannel__email">
                <p class="promo-pannel__title">Email</p>
                <a class="promo-pannel__link" href="mailto:artistaidafrica@gmail.com">artistaidafrica@gmail.com</a>
            </div>
        </div>
    </div>
    <!-- promo pannel end-->

    <!-- slider nav start-->
    <!-- <div class="slider__nav slider__nav--promo">
        <div class="promo-slider__count"></div>
        <div class="slider__arrows">
            <div class="slider__prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="slider__next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div> -->
    <!-- slider nav end-->
</section>
<!-- promo end-->

<!-- about us start-->
<section id="about" class="section about-us">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="heading heading--primary">
					<h2 class="heading__title"><span>About Artist Aid Africa</span></h2>
				</div>
                <p>ArtistAid Africa is a nonprofit organization dedicated to empowering African artists and communities through the transformative power of art. Based in Ghana, we use creativity as a tool for social change, cultural preservation, and sustainable development.</p>
                <p>By providing training, mentorship, and access to resources and platforms, we support artists while addressing key societal challenges such as education, gender equality, human rights, and environmental sustainability.</p>
                <a class="button button--primary" href="http://localhost/artistaidafrica/about/">More About</a>
			</div>
			<div class="col-lg-6 col-xl-5 offset-xl-1">
				<div class="info-box">
                    <img class="img--bg" src="<?= AAA_IMG_DIR . 'about-us-2.jpg' ?>" alt="img" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about us end-->

<!-- section start-->
<section class="section background--brown">
	<div class="container">
		<div class="row margin-bottom">
			<div class="col-12">
				<div class="heading heading--primary heading--center">
					<h2 class="heading__title"><span>What we do</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_charity.svg' ?>" alt="icon" />
                    </div>
					<div class="icon-item__text">
						<p>Water Delivery</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_child.svg' ?>" alt="icon" />
                    </div>
					<div class="icon-item__text">
						<p>We Care About</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_love.svg' ?>" alt="icon" />
                    </div>
					<div class="icon-item__text">
						<p>New Clothes</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_money_hand.svg' ?>" alt="icon" />
					</div>
					<div class="icon-item__text">
						<p>Fresh Food</p>
					</div>
				</div>
			</div>
		</div>
        <div class="row text-center">
            <div class="col-12">
                <a class="action-block__link button button--primary" href="http://localhost/artistaidafrica/donate/">Donate</a>
            </div>
        </div>
	</div>
</section>
<!-- section end-->

<!-- section start-->
<!-- <section class="section no-padding-top no-padding-bottom">
    <div class="row no-gutters">
        <div class="col-xl-6">
            <div class="action-block">
                <div class="action-block__inner">
                    <img class="img--bg" src="<?= AAA_IMG_DIR . 'action-block_1.jpg' ?>" alt="img" />
                    <h3 class="action-block__title">Our news</h3>
                    <p class="action-block__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ad totam optio minus id fugiat, mollitia eligendi atque dolorum distinctio, minima iusto in fugit esse.</p>
                    <a class="action-block__link button button--primary" href="http://localhost/artistaidafrica/category/news/">All news</a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="action-block">
                <div class="action-block__inner">
                    <img class="img--bg" src="<?= AAA_IMG_DIR . 'action-block_2.jpg' ?>" alt="img" />
                    <h3 class="action-block__title">Our events</h3>
                    <p class="action-block__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ratione eligendi dolor nemo nulla reprehenderit, in itaque, exercitationem officia minima eveniet, a harum possimus consectetur.</p>
                    <a class="action-block__link button button--primary" href="http://localhost/artistaidafrica/category/events/">All events</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- section end-->

<!-- testimonials style-1 start-->
<!-- <section class="section testimonials">
	<div class="container">
		<div class="row align-items-end margin-bottom">
			<div class="col-lg-8 col-xl-7 offset-xl-1">
				<div class="heading heading--primary">
					<h2 class="heading__title"><span>Testimonials</span></h2>
				</div>
			</div>
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
					<div class="testimonials-slider__item">
						<div class="testimonials-slider__icon">“</div>
						<div class="testimonials-slider__text">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dicta eos alias. Nesciunt tempora esse fugiat perspiciatis illo ducimus eius commodi, eos inventore, doloremque cupiditate dolor maxime fugit voluptas dolorum odit dolores illum repellendus sequi nihil at eligendi veritatis. Suscipit.</p>
							<div class="testimonials-slider__author">
                                <span class="testimonials-slider__name">Jack Wolfskin</span>
                            </div>
						</div>
					</div>
					<div class="testimonials-slider__item">
						<div class="testimonials-slider__icon">“</div>
						<div class="testimonials-slider__text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repellat, adipisci quaerat provident iure beatae velit mollitia maxime dolorem soluta totam placeat iste ipsa sequi voluptatem quos dolor, cumque accusantium nobis nulla temporibus assumenda ad asperiores! Error eligendi voluptas consequatur.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum laborum perferendis enim consequuntur! Ea iure rerum facilis, maiores adipisci minus!</p>
							<div class="testimonials-slider__author">
                                <span class="testimonials-slider__name">Jack Wolfskin</span>
                            </div>
						</div>
					</div>
					<div class="testimonials-slider__item">
						<div class="testimonials-slider__icon">“</div>
						<div class="testimonials-slider__text">
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquid ut at eveniet beatae molestias placeat ullam id magni sit?</p>
							<div class="testimonials-slider__author">
                                <span class="testimonials-slider__name">Jack Wolfskin</span>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- testimonials style-1 end-->

<!-- section start-->
<section class="section action-section">
	<div class="jarallax">
		<picture>
			<source srcset="<?= AAA_IMG_DIR . 'counter.jpg' ?> " media="(min-width: 992px)" />
            <img class="jarallax-img" src="<?= AAA_IMG_DIR . 'counter.jpg' ?>" alt="img" />
		</picture>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="action-section__title">Any information?</h2>
				<p class="action-section__text">Have questions or want to learn more about ArtistAid Africa? We're here to help. Reach out to us for partnership opportunities, donations, or general inquiries, and let's work together to empower artists and communities through art.</p>
                <a class="action-section__button button button--primary" href="http://localhost/artistaidafrica/contact/">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<!-- section end-->

<?php get_footer() ?>