<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<?php $category = get_the_category(get_the_ID())[0]->slug ?>

<!-- blog post start-->
<section class="section blog-post">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
				<div class="blog-post__top">
					<div class="blog-post__img">
                        <img class="img--bg" src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')) ?>" alt="<?= esc_attr(get_the_title()) ?>" />
					</div>
					<div class="blog-post__description">
						<div class="row">
							<div class="col-6">
                                <span class="blog-post__date"><?= get_the_date('d M Y') ?></span>
                            </div>
						</div>
					</div>
				</div>

				<h5 class="blog-post__title"><?php the_title() ?></h5>
                
                <?php the_content() ?>

                <?php if ($category == 'events') : ?>
                    <div class="article-information">
                        <div class="row offset-30">
                            <div class="col-sm-6 col-lg-4">
                                <div class="article-information__item" style="background: #32C876;">
                                    <h6 class="article-information__title">Details</h6>
                                    <div class="article-information__details">
                                        <div class="article-information__details-item">
                                            <span>Start:</span>
                                            <span>Sept 30, 2026</span>
                                        </div>
                                        <div class="article-information__details-item">
                                            <span>End:</span><span>Oct 05, 2026</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="article-information__item" style="background: #F76588;">
                                    <h6 class="article-information__title">Organizer</h6>
                                    <div class="article-information__details">
                                        <div class="article-information__details-item">
                                            <span>Phone:</span>
                                            <a href="tel:+31859644725">+31 85 964 47 25</a>
                                        </div>
                                        <div class="article-information__details-item">
                                            <span>E-mail:</span>
                                            <a href="mailto:helpo@gmail.com">test@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="article-information__item" style="background: #49C2DF;">
                                    <h6 class="article-information__title">Venue</h6>
                                    <div class="article-information__details">
                                        <div class="article-information__details-item">
                                            <span>Location:</span><span>Dark Spurt, San Francisco, CA 94528</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

				<!-- <div class="blog-post__details">
					<div class="row">
						<div class="col-lg-3">
                            <h6>Share with:</h6>
							<ul class="blog-post__socials">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<!-- blog post end-->

<?php get_footer() ?>