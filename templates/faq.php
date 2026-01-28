<?php /* Template Name: FAQ */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<!-- faq start-->
<section class="section faq">
	<div class="container">
		<div class="row margin-bottom">
			<div class="col-12">
				<div class="heading heading--primary">
					<h2 class="heading__title no-margin-bottom"><span>General Questions</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-xl-9">
				<div class="accordion accordion--primary">
					<div class="accordion__title-block">
						<h6 class="accordion__title">Question 1</h6>
                        <span class="accordion__close"></span>
					</div>
					<div class="accordion__text-block">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quo consectetur, deleniti numquam eum voluptatibus pariatur? Eligendi tempore expedita iusto in temporibus ea maiores ducimus unde beatae, itaque facere sequi.</p>
					</div>
				</div>
				<div class="accordion accordion--primary">
					<div class="accordion__title-block">
						<h6 class="accordion__title">Question 2</h6>
                        <span class="accordion__close"></span>
					</div>
					<div class="accordion__text-block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ratione fugiat placeat, rerum aspernatur iure consectetur perspiciatis odit fuga explicabo quia magni quam! Sapiente tempora incidunt deserunt sit. Accusantium, similique.</p>
					</div>
				</div>
				<div class="accordion accordion--primary">
					<div class="accordion__title-block">
						<h6 class="accordion__title">Question 3</h6>
                        <span class="accordion__close"></span>
					</div>
					<div class="accordion__text-block">
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores corrupti impedit quibusdam accusantium consequatur tenetur distinctio cupiditate sit dignissimos fugiat, quasi voluptatem! Praesentium, deleniti. Similique culpa adipisci maxime debitis ipsa.</p>
					</div>
				</div>
				<div class="accordion accordion--primary">
					<div class="accordion__title-block">
						<h6 class="accordion__title">Question 4</h6>
                        <span class="accordion__close"></span>
					</div>
					<div class="accordion__text-block">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quos nisi, voluptas beatae voluptate neque mollitia expedita tenetur nihil minus culpa. Ea et quas quo at cupiditate voluptatibus, dignissimos unde.</p>
					</div>
				</div>
				<div class="accordion accordion--primary">
					<div class="accordion__title-block">
						<h6 class="accordion__title">Question 5</h6>
                        <span class="accordion__close"></span>
					</div>
					<div class="accordion__text-block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque quam, velit possimus tempore fugiat vero vel inventore, nihil, ducimus laborum obcaecati ratione repudiandae laudantium praesentium cumque. Accusamus fugit voluptas distinctio?</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3">
				<div class="faq-aside">
                    <img class="img--bg" src="<?= AAA_IMG_DIR . 'about-us.jpg' ?>" alt="img" />
					<h5 class="faq-aside__title">Other Questions?</h5>
					<p>For other questions, please feel free to contact us.</p>
					<a class="faq-aside__link" href="http://localhost/artistaidafrica/contact/">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- faq end-->

<?php get_footer() ?>