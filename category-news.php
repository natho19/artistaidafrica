<?php get_header() ?>

<?php get_template_part('parts/taxonomy-banner') ?>

<!-- blog start-->
<section class="section blog background--brown">
	<div class="container">
		<div class="row offset-margin">
			<div class="col-md-6 col-lg-4">
				<div class="blog-item blog-item--style-1">
					<div class="blog-item__img">
                        <img class="img--bg" src="<?= AAA_IMG_DIR . 'blog_5.jpg' ?>" alt="img" />
					</div>
					<div class="blog-item__content">
						<h6 class="blog-item__title">
                            <a href="http://localhost/artistaidafrica/lorem-ipsum-dolor/">Lorem ipsum dolor</a>
                        </h6>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse illum quo, corrupti, iusto rem, laboriosam necessitatibus pariatur eius cum perspiciatis blanditiis minima a! Quidem exercitationem recusandae perferendis repellendus quo nostrum!</p>
						<div class="blog-item__details">
                            <span class="blog-item__date">23 Jan 2026</span>
                        </div>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-lg-4">
				<div class="blog-item blog-item--style-1">
					<div class="blog-item__img">
                        <img class="img--bg" src="<?= AAA_IMG_DIR . 'blog_6.jpg' ?>" alt="img" />
					</div>
					<div class="blog-item__content">
						<h6 class="blog-item__title">
                            <a href="http://localhost/artistaidafrica/lorem-ipsum-dolor/">Share HHAPI-NeSS this Mother's Day support Save the Children</a>
                        </h6>
						<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
						<div class="blog-item__details">
                            <span class="blog-item__date">23 Jan 2026</span>
                        </div>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-lg-4">
				<div class="blog-item blog-item--style-1">
					<div class="blog-item__img">
                        <img class="img--bg" src="<?= AAA_IMG_DIR . 'blog_7.jpg' ?>" alt="img" />
					</div>
					<div class="blog-item__content">
						<h6 class="blog-item__title">
                            <a href="http://localhost/artistaidafrica/lorem-ipsum-dolor/">Share HHAPI-NeSS this Mother's Day support Save the Children</a>
                        </h6>
						<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
						<div class="blog-item__details">
                            <span class="blog-item__date">23 Jan 2026</span>
                        </div>
					</div>
				</div>
			</div>
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
<!-- blog end-->

<?php get_footer() ?>