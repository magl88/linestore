<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Linestore.by</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="wrapper">
	<header>
		<nav class="container-fluid nav-top hide visible-lg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu-top">
							<li class="item item1 active"><a href="/news-cat.php" title="новости">новости</a></li>
							<li class="item item2"><a href="/page-form.php" title="обратная связь">обратная связь</a></li>
							<li class="item item3"><a href="/page-oplata.php" title="оплата и доставка">оплата и доставка</a></li>
							<li class="item item4"><a href="/page-magazin.php" title="о магазине">о магазине</a></li>
							<li class="item item5"><a href="/page-garant.php" title="Гарантия">Гарантия</a></li>
							<li class="item item6"><a href="/news-page.php" title="отзывы">отзывы</a></li>
							<li class="item item7"><a href="/page.php" title="о нас">о нас</a></li>
							<li class="item item8"><a href="/page-pdroduct.php" title="регистрация"><i class="glyphicon glyphicon-user"></i>регистрация</a></li>
							<li class="item item9 hide"><a href="#" title="Личный кабинет"><i class="glyphicon glyphicon-user"></i>Личный кабинет</a></li>
							<li class="item item10"><a href="#" title="авторизация"><i class="glyphicon glyphicon-log-in"></i>авторизация</a></li>
							<li class="item item11 hide"><a href="#" title="Выход"><i class="glyphicon glyphicon-log-out"></i>Выход</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<div class="container head">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-10">
					<a href="/" class="logo" title="Linestore.by">
						<img src="/img/logo.jpg" alt="Linestore.by">
					</a>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-6 hidden-xs">
					<div class="row tel-search">
						<div class="col-lg-4 col-sm-6">
							<a class="tel1 tel" href="tel:+74959264949" title="+7 (495) 926-49-49">+7 (495) <strong>926-49-49</strong></a>
							<a class="mail" href="mileto:info@linestore.by">info@linestore.by</a>
						</div>
						<div class="col-lg-4 col-sm-6 hidden  visible-sm visible-lg visible-md">
							<a class="tel2 tel" href="tel:+74959264949" title="+7 (495) 926-49-49">+7 (495) <strong>926-49-49</strong></a>
							<span class="work-time">Ежедневно c 9:00 до 20:00</span>
						</div>
						<div class="col-lg-4 hide visible-lg">
							<div class="block-search">
								<form action="#">
									<input type="text" class="search-inp" placeholder="Поиск">
									<input type="submit" class="search-send" title="Искать" >
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-1 col-xs-2">
					<div class="mob-nav dropdown hidden-lg">
						<button id="dLabel-nav" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Меню
						</button>
						<ul class="dropdown-menu-top" aria-labelledby="dLabel-nav" >
							<li class="item item1 active"><a href="#" title="новости">новости</a></li>
							<li class="item item2"><a href="#" title="обратная связь">обратная связь</a></li>
							<li class="item item3"><a href="#" title="оплата и доставка">оплата и доставка</a></li>
							<li class="item item4"><a href="#" title="о магазине">о магазине</a></li>
							<li class="item item5"><a href="/page-garant.php" title="Гарантия">Гарантия</a></li>
							<li class="item item6"><a href="#" title="отзывы">отзывы</a></li>
							<li class="item item7"><a href="/page.php" title="о нас">о нас</a></li>
							<li class="item item8"><a href="#" title="регистрация"><i class="glyphicon glyphicon-user"></i>регистрация</a></li>
							<li class="item item9 hide"><a href="#" title="Личный кабинет"><i class="glyphicon glyphicon-user"></i>Личный кабинет</a></li>
							<li class="item item10"><a href="#" title="авторизация"><i class="glyphicon glyphicon-log-in"></i>авторизация</a></li>
							<li class="item item11 hide"><a href="#" title="Выход"><i class="glyphicon glyphicon-log-out"></i>Выход</a></li>
						</ul>
					</div>
					<div class="dropdown mini-cart visible-lg-block">
						<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="col-tow hide">4</span>
							<span class="title">В корзине</span>
							<span class="tov">товаров: 0 шт</span>
							<span class="summ">на сумму: 0 руб</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="dLabel">
							Корзина
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container head-mob hidden-lg">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-9">
					<div class="block-catalog-nav dropdown row">
						<div id="dLabel-cat" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Каталог товаров</span></div>
						<nav aria-labelledby="dLabel-cat" class="navmenu navmenu-default" role="navigation">
							<ul class="nav navmenu-nav">
								<li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Спорт и Отдых</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Гироскутеры</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Квадракоптеры</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Красота и Мода</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Экш камеры <span
											class="new">new</span></a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Умные часы</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Видоригестраторы</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Портативная акустика</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Внешние аккумуляторы и
										портативные зарядные устройства</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Популярное</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 1.1</a></li>
										<li><a href="#">Пункт 1.2</a></li>
										<li><a href="#">Пункт 1.3</a></li>
										<li><a href="#">Пункт 1.4</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-sm-6 col-sm-offset-1 hidden-xs">
					<div class="block-search">
						<form action="#">
							<input type="text" class="search-inp" placeholder="Поиск">
							<input type="submit" class="search-send" title="Искать" >
						</form>
					</div>
				</div>
				<div class="col-md-2 col-sm-1 col-xs-2 col-xs-offset-1 col-sm-offset-0">
					<div class="mob-mini-cart">
						<a href="#" class="in-tow">Корзина<span>4</span></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="content-wrapper">