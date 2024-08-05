<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
if (!defined("PAGE"))
	define("PAGE", "TEXT");

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
$asset->addCss('https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');
$asset->addJs('https://code.jquery.com/jquery-3.6.0.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js');
$asset->addJs('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
$asset->addJs('https://www.youtube.com/iframe_api');
// $asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
// $asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js');
$asset->addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js');

$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');


?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon.ico" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/favicon/site.webmanifest">
	

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-PGBVBS7');
	</script>
	<!-- End Google Tag Manager -->

</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGBVBS7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="wrapper wrapper-home">
		<header class="header position-fixed top-0 start-0 end-0">
			<div class="container pt-2 pb-3">
				<div class="header__top row align-items-center justify-content-between justify-content-lg-start">
					<div class="col col-sm-3 col-md-2">
						<div class="header__logo logo d-block">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/Логотип_КП_цв.webp" type="image/webp">
								<img src="<?= SITE_TEMPLATE_PATH; ?>/img/Логотип_КП_цв.jpg" alt="logo" class="logo__img w-auto h-auto mw-100" width="95" height="65">
							</picture>
						</div>
					</div>
					<div class="col-4 d-none d-lg-flex">
						<div class="header__box header__box--map">
							<p class="header__text header__text--semibold">ЖК «Кедровый Парк»</p>
							<p class="header__text">Ханты-Мансийский АО - Югра,</p>
							<p class="header__text">г. Сургут, ул. Игоря Киртбая, 31</p>
						</div>
					</div>
					<div class="col-md-4 col-lg-3 d-none d-md-flex">
						<div class="header__box header__box--time">
							<p class="header__text header__text--semibold">Режим работы офиса</p>
							<p class="header__text">Пн.-Пт.: 9:00-18:00</p>
							<p class="header__text">Сб.-Вс.: Выходной</p>
						</div>
					</div>
					<div class="col-7 col-md-3">
						<div class="header__box header__box--tel">
							<p class="header__text header__text--semibold">Отдел продаж</p>
							<p class="header__text">
								<a href="tel:+73462603311" class="header__link">8 (3462) 60-33-11</a>
							</p>
							<p class="header__text">
								<a href="tel:+73462626377" class="header__link">8 (3462) 62-63-77</a>
							</p>
						</div>
					</div>
					<div class="col d-xl-none">
						<button type="button" class="header__burger burger button d-lg-none d-flex ms-auto">
							<span class="burger__inner">
								<span></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="header__bottom justify-content-center align-items-center d-flex">
				<div class="container">
					<nav class="header__menu menu">
						<ul class="menu__list d-flex h-100 flex-column justify-content-center justify-content-lg-between flex-lg-row align-items-center p-0 m-0">
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#advantages">Преимущества</a>
							</li>
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#gallery">Галерея</a>
							</li>
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#build-progress">Ход стройки</a>
							</li>
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#plans">Планировки</a>
							</li>
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#documents">Документация</a>
							</li>
							<li class="menu__item">
								<a class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block" href="#footer">Контакты</a>
							</li>
							<li class="menu__item">
								<button type="button" data-toggle="modal" data-target="#callback" class="menu__link py-3 px-3 my-2 px-lg-0 my-lg-0 d-block"><span>Заказать звонок</span></button>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<main>
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"slider",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "7200",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "N",	// Выводить название элемента
					"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "NAME",
						1 => "PREVIEW_PICTURE",
						2 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "1",	// Код информационного блока
					"IBLOCK_TYPE" => "CONTENT",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "200",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "0",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "LINK_BTN",
						1 => "TEXT",
						2 => "TEXT_BTN",
						3 => "LABEL",
						4 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
					"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				),
				false
			); ?>