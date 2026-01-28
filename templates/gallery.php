<?php /* Template Name: Gallery */ ?>

<?php get_header() ?>

<?php get_template_part('parts/page-banner') ?>

<!-- gallery start-->
<section class="section gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- filter panel start-->
                <ul class="filter-panel">
                    <li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All Causes</span></li>
                    <li class="filter-panel__item" data-filter=".category_1"><span>Water Delivery</span></li>
                    <li class="filter-panel__item" data-filter=".category_2"><span>Medicine</span></li>
                    <li class="filter-panel__item" data-filter=".category_3"><span>Education</span></li>
                    <li class="filter-panel__item" data-filter=".category_4"><span>Food</span></li>
                </ul>
                <!-- filter panel end-->
            </div>
        </div>
    </div>
    <div class="row no-gutters gallery-masonry">
	    <div class="col-6 col-md-4 gallery-masonry__item category_1">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_1.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_1.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-4 gallery-masonry__item category_1">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_2.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_2.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-4 gallery-masonry__item category_2">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_3.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_3.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-4 gallery-masonry__item category_2">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_4.jpg' ?> data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_4.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-8 gallery-masonry__item category_3">
            <a class="gallery-masonry__img gallery-masonry__item--height-1" href="<?= AAA_IMG_DIR . 'gallery_5.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_5.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
            </a>
        </div>
	    <div class="col-6 col-md-4 gallery-masonry__item category_3">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_6.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_6.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-8 gallery-masonry__item category_4">
            <a class="gallery-masonry__img gallery-masonry__item--height-3" href="<?= AAA_IMG_DIR . 'gallery_7.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_7.jpg' ?>" alt="img" />
			    <h6 class="gallery-masonry__description">He Need Your Protection</h6>
		    </a>
        </div>
	    <div class="col-6 col-md-4 gallery-masonry__item category_4">
            <a class="gallery-masonry__img gallery-masonry__item--height-2" href="<?= AAA_IMG_DIR . 'gallery_8.jpg' ?>" data-fancybox="gallery">
                <img class="img--bg" src="<?= AAA_IMG_DIR . 'gallery_8.jpg' ?>" alt="img" />
				<h6 class="gallery-masonry__description">He Need Your Protection</h6>
			</a>
        </div>
    </div>
</section>
<!-- gallery end-->

<?php get_footer() ?>