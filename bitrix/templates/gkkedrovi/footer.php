<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<section class="video">
	<div class="container">
		<h2 class="video__title title">
			Жизнь в Кедровом Парке
			<span class="video__title title title--extrabold">КОМФОРТ, КРАСОТА, НАДЕЖНОСТЬ</span>
		</h2>
		<div class="video__box" id="video-container">
			<div class="video__box-img" id="video-cover">
			</div>
			<iframe class="video__frame" src="https://www.youtube.com/embed/cDiWGuqzzio?autoplay=0&amp;controls=1&amp;modestbranding=1&amp;rel=0&amp;enablejsapi=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
			<button class="video__btn" id="play-button"></button>
		</div>
	</div>
</section>
</main>
<footer class="footer" id="footer">
	<div class="container">
		<div class="footer__wrapper row">
			<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-3 pt-2 pb-5">
				<h3 class="footer__title footer__title--tel">Отдел продаж</h3>
				<a class="footer__link" href="tel:+73462603311">8 (3462) 60-33-11</a>
				<a class="footer__link" href="tel:+73462626377">8 (3462) 62-63-77</a>
			</div>
			<div class="col">

				<div class="footer__wrapper row flex-column-reverse flex-md-row">

					<div class="footer__item d-flex align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4 justify-content-center justify-content-lg-between flex-row">
						<div class="footer__box d-flex flex-column">
							<p class="footer__text text text--semibold text--accent text-center text-md-start">
								ЖК «Кедровый Парк»
							</p>
							<p class="footer__text text text--normal text--accent text-center text-md-start">
								Ханты-Мансийский АО - Югра,
							</p>
							<p class="footer__text text text--normal text--accent text-center text-md-start">
								г. Сургут, ул. Игоря Киртбая, 31
							</p>
						</div>
					</div>
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4">
						<div class="footer__box footer__box--time">
							<p class="footer__text text--semibold">Режим работы офиса</p>
							<p class="footer__text">Пн.-Пт.: 9:00-18:00</p>
							<p class="footer__text">Сб.-Вс.: Выходной</p>
						</div>
					</div>
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4">
						<div class="footer__box footer__box--mail">
							<p class="footer__text text--semibold">Email</p>
							<a href="mailto:ssgbs@mail.ru" class="footer__link:">ssgbs@mail.ru</a>
						</div>
					</div>
				</div>
			</div>
			<!--
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-2 pb-5">
						<h3 class="footer__title footer__title--tel">Приемная</h3>
						<a class="footer__link" href="tel:+89227845766">8(922)784-57-66</a>
						<a class="footer__link" href="tel:+89224057138">8(922)405-71-38</a>
					</div>
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-2 pb-3">
						<h3 class="footer__title footer__title--tel">Отдел продаж</h3>
						<a class="footer__link" href="tel:+89227845766">8(922)784-57-66</a>
						<a class="footer__link" href="tel:+89224057138">8(922)405-71-38</a>
					</div>
						-->
		</div>
		<!--
				<div class="footer__wrapper row flex-column-reverse flex-md-row">

					<div class="footer__item d-flex align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4 justify-content-center justify-content-lg-between flex-row">
						<a href="index.html" class="footer__logo logo d-none d-xl-block">
							<picture><source srcset="<?= SITE_TEMPLATE_PATH ?>/img/logo.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="logo" class="logo__img"></picture>
						</a>
						<div class="footer__box d-flex flex-column">
							<p class="footer__text text text--semibold text--accent text-center text-md-start">
								ЖК «Кедровый»
							</p>
							<p class="footer__text text text--normal text--accent text-center text-md-start">
								Ханты-Мансийский АО - Югра,
							</p>
							<p class="footer__text text text--normal text--accent text-center text-md-start">
								г. Сургут, Микрорайон 35А
							</p>
						</div>
					</div>
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4">
						<div class="footer__box footer__box--time">
							<p class="footer__text text--semibold">Режим работы офиса</p>
							<p class="footer__text">Пн.-Пт.: 9:00-18:00</p>
							<p class="footer__text">Сб.-Вс.: Выходной</p>
						</div>
					</div>
					<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-5 pb-4">
						<div class="footer__box footer__box--mail">
							<p class="footer__text text--semibold">Email</p>
							<a href="mailto:ssgbs@mail.ru" class="footer__link:">ssgbs@mail.ru</a>
						</div>
					</div>
				</div>
				-->
		<div class="row">
			<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-2 pb-5">
				<small class="footer__small text-center text-sm-start">&copy; АО "Специализированный застройщик
					"Сургутспецжелезобетонстрой"</small>
			</div>
			<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-2 pb-5">
				<small class="footer__small text-center text-sm-start">Информация на сайте не является публичной офертой. Распространяется
					для ознакомления</small>
			</div>
			<div class="footer__item d-flex flex-column align-items-center align-items-md-start col-12 col-md-4 pt-2 pb-5">
				<small class="footer__small">
					<a href="#" class="footer__link">Политика конфиденциальности</a></small>
				<small class="footer__small">
					<a href="https://target-kc.ru" target="_blank" class="footer__link">Разработка сайта</a></small>
			</div>
		</div>
	</div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Заказать звонок</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

				</button>
			</div>
			<div class="modal-body">
				<? $APPLICATION->IncludeComponent(
					"bitrix:iblock.element.add.form",
					"form-modal",
					array(
						"AJAX_MODE" => "Y",
						"COMPONENT_TEMPLATE" => "form-modal",
						"STATUS_NEW" => "N",
						"LIST_URL" => "",
						"USE_CAPTCHA" => "N",
						"USER_MESSAGE_EDIT" => "",
						"USER_MESSAGE_ADD" => "Спасибо за заявку! Мы с вами скоро свяжемся!",
						"DEFAULT_INPUT_SIZE" => "30",
						"RESIZE_IMAGES" => "N",
						"IBLOCK_TYPE" => "CONTENT",
						"IBLOCK_ID" => "8",
						"PROPERTY_CODES" => array(
							0 => "14",
							1 => "NAME",
						),
						"PROPERTY_CODES_REQUIRED" => array(
							0 => "14",
							1 => "NAME",
						),
						"GROUPS" => array(
							0 => "2",
						),
						"STATUS" => "ANY",
						"ELEMENT_ASSOC" => "CREATED_BY",
						"MAX_USER_ENTRIES" => "100000",
						"MAX_LEVELS" => "100000",
						"LEVEL_LAST" => "Y",
						"MAX_FILE_SIZE" => "0",
						"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
						"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
						"SEF_MODE" => "N",
						"CUSTOM_TITLE_NAME" => "Имя",
						"CUSTOM_TITLE_TAGS" => "",
						"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
						"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
						"CUSTOM_TITLE_IBLOCK_SECTION" => "",
						"CUSTOM_TITLE_PREVIEW_TEXT" => "",
						"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
						"CUSTOM_TITLE_DETAIL_TEXT" => "",
						"CUSTOM_TITLE_DETAIL_PICTURE" => ""
					),
					false
				); ?>

			</div>
		</div>
	</div>
</div>
</body>

</html>