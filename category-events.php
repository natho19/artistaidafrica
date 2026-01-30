<?php get_header() ?>

<?php get_template_part('parts/taxonomy-banner') ?>

<!-- events inner start-->
 <?php if (have_posts()) : ?>
	<section class="section events-inner">
		<div class="container">
			<div class="row offset-30">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('parts/content-event'); ?>
				<?php endwhile; ?>
			</div>

			<!-- <div class="row">
				<div class="col-12">
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
				</div>
			</div> -->
		</div>
	</section>
<?php endif; ?>
<!-- events inner end-->

<?php get_footer() ?>