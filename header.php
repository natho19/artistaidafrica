<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="<?= AAA_IMG_DIR . 'favicon.png' ?>" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head() ?>
</head>

<body>
	<div class="page-wrapper">
		<!-- aside dropdown start-->
		<div class="aside-dropdown">
			<div class="aside-dropdown__inner">
				<span class="aside-dropdown__close">
					<svg class="icon"><use xlink:href="#close"></use></svg>
				</span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<!-- <li class="aside-menu__item aside-menu__item--active"> for page active -->
						<li class="aside-menu__item">
							<a class="aside-menu__link" href="http://localhost/artistaidafrica/"><span>Home</span></a>
						</li>
						<li class="aside-menu__item">
							<a class="aside-menu__link" href="http://localhost/artistaidafrica/about/"><span>About</span></a>
						</li>
						<!-- <li class="aside-menu__item aside-menu__item--has-child">
							<a class="aside-menu__link" href="#"><span>Blog</span></a>
							<ul class="aside-menu__sub-list">
								<li><a href="http://localhost/artistaidafrica/category/news/"><span>News</span></a></li>
								<li><a href="http://localhost/artistaidafrica/category/events/"><span>Events</span></a></li>
							</ul>
						</li> -->
						<li class="aside-menu__item">
							<a class="aside-menu__link" href="http://localhost/artistaidafrica/category/news/"><span>News</span></a>
						</li>
						<li class="aside-menu__item">
							<a class="aside-menu__link" href="http://localhost/artistaidafrica/gallery/"><span>Gallery</span></a>
						</li>
						<li class="aside-menu__item">
							<a class="aside-menu__link" href="http://localhost/artistaidafrica/contact/"><span>Contact</span></a>
						</li>
					</ul>
				</div>
				<div class="aside-dropdown__item">
					<a class="button button--squared" href="http://localhost/artistaidafrica/donate/"><span>Donate</span></a>
				</div>
			</div>
		</div>
		<!-- aside dropdown end-->

		<!-- header start-->
		<header class="header header--front">
			<div class="container-fluid">
				<div class="row no-gutters justify-content-between">
					<div class="col-auto d-flex align-items-center">
						<div class="dropdown-trigger d-none d-sm-block d-lg-none">
							<div class="dropdown-trigger__item"></div>
						</div>
						<div class="header-logo">
							<a class="header-logo__link" href="http://localhost/artistaidafrica/">
								<img class="header-logo__img logo--light" src="<?= AAA_IMG_DIR . 'logo_white.png' ?>" alt="logo" />
								<img class="header-logo__img logo--dark" src="<?= AAA_IMG_DIR . 'logo_dark.png' ?>" alt="logo" />
							</a>
						</div>
					</div>
					<div class="col-auto">
						<!-- main menu start-->
						<nav>
							<ul class="main-menu">
								<!-- <li class="main-menu__item main-menu__item--active"> for page active -->
								<li class="main-menu__item">
									<a class="main-menu__link" href="http://localhost/artistaidafrica/"><span>Home</span></a>
								</li>
								<li class="main-menu__item">
									<a class="main-menu__link" href="http://localhost/artistaidafrica/about/"><span>About</span></a>
								</li>
								<!-- <li class="main-menu__item main-menu__item--has-child">
									<a class="main-menu__link" href="#"><span>Blog</span></a>
									<ul class="main-menu__sub-list">
										<li><a href="http://localhost/artistaidafrica/category/news/"><span>News</span></a></li>
										<li><a href="http://localhost/artistaidafrica/category/events/"><span>Events</span></a></li>
									</ul>
								</li> -->
								<li class="main-menu__item">
									<a class="main-menu__link" href="http://localhost/artistaidafrica/category/news/"><span>News</span></a>
								</li>
								<li class="main-menu__item">
									<a class="main-menu__link" href="http://localhost/artistaidafrica/gallery/"><span>Gallery</span></a>
								</li>
								<li class="main-menu__item">
									<a class="main-menu__link" href="http://localhost/artistaidafrica/contact/"><span>Contact</span></a>
								</li>
							</ul>
						</nav>
						<!-- main menu end-->
					</div>
					<div class="col-auto d-flex align-items-center">
						<!-- lang select start-->
						<!-- <ul class="lang-select">
							<li class="lang-select__item lang-select__item--active"><span>EN</span>
								<ul class="lang-select__sub-list">
									<li><a href="#">FR</a></li>
								</ul>
							</li>
						</ul> -->
						<!-- lang select end-->
						<div class="dropdown-trigger d-block d-sm-none">
							<div class="dropdown-trigger__item"></div>
						</div>
						<a class="button button--squared" href="http://localhost/artistaidafrica/donate/"><span>Donate</span></a>
					</div>
				</div>
			</div>
		</header>
		<!-- header end-->
		 
		<main class="main">