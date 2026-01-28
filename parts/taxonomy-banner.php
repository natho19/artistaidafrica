<?php $terms = get_queried_object() ?>
<section class="promo-primary">
    <picture>
        <source srcset="<?= AAA_IMG_DIR . '2000x750.png' ?>" media="(min-width: 992px)" />
        <img class="img--bg" src="<?= AAA_IMG_DIR . '2000x750.png' ?>" alt="img" />
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item">
                        <h1 class="promo-primary__title"><span><?= $terms->name ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>