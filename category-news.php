<?php get_header() ?>

<?php get_template_part('parts/taxonomy-banner') ?>
<!-- blog start-->
<?php if (have_posts()) : ?>
	<section class="section blog background--brown">
		<div class="container">
			<div class="row offset-margin">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('parts/content-new'); ?>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- pagination start-->
					<ul class="pagination">
						<li class="pagination__item pagination__item--prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span>Back</span>
						</li>
						<li class="pagination__item"><span>1</span></li>
						<li class="pagination__item pagination__item--active"><span>2</span></li>
						<li class="pagination__item"><span>3</span></li>
						<li class="pagination__item"><span>4</span></li>
						<li class="pagination__item"><span>5</span></li>
						<li class="pagination__item pagination__item--disabled">...</li>
						<li class="pagination__item"><span>12</span></li>
						<li class="pagination__item pagination__item--next">
							<span>Next</span>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
					</ul>
					<!-- pagination end-->
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- blog end-->

<?php get_footer() ?>