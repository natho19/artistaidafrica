<?php /* Template Name: Homepage */ ?>

<?php get_header() ?>

<!-- promo start-->
<section class="promo">
    <div class="promo-slider">
        <div class="promo-slider__item promo-slider__item--style-1">
            <picture>
                <source srcset="<?= AAA_IMG_DIR . 'promo_1.jpg' ?>" media="(min-width: 835px)" />
                <source srcset="<?= AAA_IMG_DIR . '834promo_1.jpg' ?>" media="(min-width: 376px)" />
                <img class="img--bg" src="<?= AAA_IMG_DIR . '375promo_1.jpg' ?>" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-container__item">
                                <div class="promo-slider__wrapper-1">
                                    <h2 class="promo-slider__title">
                                        <span>We help all people in need</span>
                                    </h2>
                                </div>
                                <div class="promo-slider__wrapper-2">
                                    <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                </div>
                                <div class="promo-slider__wrapper-3">
                                    <a class="button promo-slider__button button--primary" href="#">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-slider__item promo-slider__item--style-2">
            <picture>
                <source srcset="<?= AAA_IMG_DIR . 'promo_2.jpg' ?>" media="(min-width: 835px)" />
                <source srcset="<?= AAA_IMG_DIR . '834promo_2.jpg' ?>" media="(min-width: 376px)" />
                <img class="img--bg" src="<?= AAA_IMG_DIR . '375promo_2.jpg' ?>" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="align-container">
                            <div class="align-container__item">
                                <div class="promo-slider__wrapper-1">
                                    <h2 class="promo-slider__title">
                                    <span>Our Helping</span>
                                </div>
                                <div class="promo-slider__wrapper-2">
                                    <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                </div>
                                <div class="promo-slider__wrapper-3">
                                    <a class="button promo-slider__button button--primary" href="#">Discover</a>
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
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </li>
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </a>
        </li>
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li class="promo-socials__item">
            <a class="promo-socials__link" href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
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
                <a class="promo-pannel__link" href="tel:+180012345678">+ 1800 - 123 456 78</a>
            </div>
            <div class="promo-pannel__email">
                <p class="promo-pannel__title">Email</p>
                <a class="promo-pannel__link" href="mailto:support@helpo.org">support@helpo.org</a>
            </div>
        </div>
    </div>
    <!-- promo pannel end-->

    <!-- slider nav start-->
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quidem laboriosam deleniti aliquam magnam blanditiis deserunt. Hic dolores dicta saepe quam commodi delectus vitae earum repellat. Nostrum error numquam magnam?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus ipsum molestias hic quae, nobis vero recusandae adipisci repudiandae dolore architecto quasi porro officia voluptatum, corporis libero ullam natus quos laborum, nesciunt quidem ex assumenda! Sint quae non natus vitae provident doloremque beatae quidem delectus nisi cumque? Aliquam ab nulla ex?</p>
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
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_animal_shelter.svg' ?>" alt="icon" />
                    </div>
					<div class="icon-item__text">
						<p>Medicine Help</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_beggar.svg' ?>" alt="icon" />
                    </div>
					<div class="icon-item__text">
						<p>We Build and Create</p>
					</div>
				</div>
			</div>
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
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_phone_donate.svg' ?>" alt="icon" />
					</div>
					<div class="icon-item__text">
						<p>Best Volounteers</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3">
				<div class="icon-item">
					<div class="icon-item__img">
                        <img src="<?= AAA_IMG_DIR . 'svg/icons_3/2_piggy_bank.svg' ?>" alt="icon" />
					</div>
					<div class="icon-item__text">
						<p>Donation Around the World</p>
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
<section class="section no-padding-top no-padding-bottom">
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
</section>
<!-- section end-->

<!-- testimonials style-1 start-->
<section class="section testimonials">
	<div class="container">
		<div class="row align-items-end margin-bottom">
			<div class="col-lg-8 col-xl-7 offset-xl-1">
				<div class="heading heading--primary">
					<h2 class="heading__title"><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3">
				<!-- slider nav start-->
				<div class="slider__nav testimonials-style-1__nav">
					<div class="slider__arrows">
						<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
						<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
					</div>
				</div>
				<!-- slider nav end-->
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
</section>
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
				<p class="action-section__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas reprehenderit dicta facilis unde? Adipisci provident quisquam autem maiores quis ipsum in sequi tenetur neque cum!</p>
                <a class="action-section__button button button--primary" href="http://localhost/artistaidafrica/contact/">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<!-- section end-->

<?php get_footer() ?>