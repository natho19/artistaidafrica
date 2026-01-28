<?php /* Template Name: About */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<!-- about-us start-->
<section class="section about-us">
    <div class="container">
        <div class="row align-items-center">
			<?php $about_image = get_field('about_image'); if ($about_image) : ?>
            <div class="col-lg-6 col-xl-5">
                <div class="img-box">
                    <div class="img-box__img">
                        <img class="img--bg" src="<?= esc_url($about_image['url']) ?>" alt="<?= esc_attr($about_image['alt']) ?>" />
                    </div>
                </div>
            </div>
			<?php endif; ?>
            <div class="col-lg-6 col-xl-6 offset-xl-1">
				<?php if (get_field('about_title')) : ?>
					<div class="heading heading--primary">
						<h2 class="heading__title"><span><?= esc_html(get_field('about_title')) ?></span></h2>
					</div>
				<?php endif; ?>
				<?= wp_kses_post(get_field('about_description')) ?>
            </div>
        </div>
    </div>
</section>
<!-- about-us end-->

<!-- our mission start-->
<section class="section about-us about-us--style-2 no-padding-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
				<?php if (get_field('mission_title')) : ?>
					<div class="heading heading--primary">
						<h2 class="heading__title"><span><?= esc_html(get_field('mission_title')) ?></span></h2>
					</div>
				<?php endif; ?>
				<?= wp_kses_post(get_field('mission_description')) ?>
            </div>
			<?php $mission_image = get_field('mission_image'); if ($mission_image) : ?>
				<div class="col-lg-6 col-xl-5 offset-xl-1">
					<div class="img-box">
						<div class="img-box__img">
							<img class="img--bg" src="<?= esc_url($mission_image['url']) ?>" alt="<?= esc_attr($mission_image['alt']) ?>" />
						</div>
					</div>
				</div>
			<?php endif; ?>
        </div>
    </div>
</section>
<!-- our mission end-->

<!-- our statistics start-->
<?php if (get_field('statistics_display')) : ?>
	<section class="section statistics">
		<div class="container">
			<?php if (get_field('statistics_title')) : ?>
				<div class="row margin-bottom">
					<div class="col-12">
						<div class="heading heading--primary heading--center">
							<h2 class="heading__title no-margin-bottom"><span><?= esc_attr(get_field('statistics_title')) ?></span></h2>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if (have_rows('statistics')) : ?>
				<div class="row offset-margin">
					<?php while(have_rows('statistics')) : the_row(); ?>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<?php if (get_sub_field('counter')) : ?>
									<div class="icon-item__img">
										<span class="js-counter"><?= esc_html(get_sub_field('counter')) ?></span>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('counter_text')) : ?>
									<div class="icon-item__text">
										<p><?= esc_html(get_sub_field('counter_text')) ?></p>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
<!-- our statistics end-->

<!-- team start-->
<?php if (get_field('team_display')) : ?>
	<section class="section team">
		<div class="container">
			<?php if (get_field('team_title')) : ?>
				<div class="row">
					<div class="col-12">
						<div class="heading heading--primary">
							<h2 class="heading__title no-margin-bottom"><span><?= esc_html(get_field('team_title')) ?></span></h2>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if (have_rows('team_members')) : ?>
				<div class="row margin-bottom">
					<?php while(have_rows('team_members')) : the_row(); ?>
						<div class="col-sm-6 col-lg-4 col-xl-3">
							<!-- iteam start-->
							<div class="team-item team-item--rounded">
								<div class="team-item__img-holder">
									<img class="img--layout" src="<?= AAA_IMG_DIR . 'team_4.png' ?>" alt="layout" />
									<?php $member = get_sub_field('picture'); if ($member) : ?>
									<div class="team-item__img">
										<img class="img--bg" src="<?= esc_url($member['url']) ?>" alt="<?= esc_attr($member['alt']) ?>" />
									</div>
									<?php endif; ?>
								</div>
								<div class="team-item__description">
									<?php if (get_sub_field('name')) : ?>
										<div class="team-item__name"><?= esc_html(get_sub_field('name')) ?></div>
									<?php endif; ?>
									<?php if (get_sub_field('function')) : ?>
										<div class="team-item__position"><?= esc_html(get_sub_field('function')) ?></div>
									<?php endif; ?>
								</div>
							</div>
							<!-- iteam end-->
						</div>
					<?php endwhile ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
<!-- team end-->

<!-- donors start-->
<?php if (get_field('donors_display')) : ?>
	<section class="section donors">
		<div class="container">
			<?php if (get_field('donors_title')) : ?>
				<div class="row margin-bottom">
					<div class="col-12">
						<div class="heading heading--primary heading--center">
							<h2 class="heading__title no-margin-bottom"><span><?= esc_html(get_field('donors_title')) ?></span></h2>
						</div>
					</div>
				</div>
			<?php endif ?>
			<?php if (have_rows('donors')) : ?>
				<div class="row">
					<div class="col-12">
						<!-- donors slider start-->
						<div class="slider-holder">
							<div class="donors-slider donors-slider--style-1">
								<?php while(have_rows('donors')) : the_row(); ?>
									<?php $donor = get_sub_field('logo'); if ($donor) : ?>
										<div class="donors-slider__item">
											<div class="donors-slider__img">
												<img src="<?= esc_url($donor['url']) ?>" alt="<?= esc_attr($donor['alt']) ?>" />
											</div>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							</div>
						</div>
						<!-- donors slider end-->
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif ?>
<!-- donors end-->

<?php get_footer() ?>