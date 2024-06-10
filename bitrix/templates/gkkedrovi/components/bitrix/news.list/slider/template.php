<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
			<section class="prime">
				<div class="swiper primeSwiper">
					<div class="prime__control row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<div class="swiper-scrollbar"></div>
								</div>
							</div>
							<div class="row justify-content-between">
								<div class="col-3">
									<div class="swiper-pagination"></div>
								</div>
								<div class="col-9 d-flex justify-content-end">
									<div class="prime__buttons">
										<div class="swiper-button-prev"></div>
										<div class="swiper-button-next"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (CModule::IncludeModule("millcom.phpthumb"))
		$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 1);

	?>
						<div class="swiper-slide" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["WEBP"];?>')" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="prime__content ">
								<div class="container">
									<div class="row align-items-start">
										<div class="prime__content-box col-12 col-xl-9">
											<h2 class="prime__subtitle subtitle d-none"><?=$arItem['PROPERTIES']['LABEL']['VALUE'];?></h2>
											<h1 class="prime__title mb-3">
												<?=nl2br($arItem['PROPERTIES']['TEXT']['VALUE']);?>
											</h1>
											<p class="prime__text--small">* скидка распространяется на ограниченный ассортимент квартир до 30.06.2024 г. Подробности уточняйте в отделе продаж</p>
											<?if ($arItem['PROPERTIES']['TEXT_BTN']['VALUE']):?>
											<a class="prime__btn btn mb-3 mb-xl-0" href="<?=$arItem['PROPERTIES']['LINK_BTN']['VALUE'];?>" role="button"><?=$arItem['PROPERTIES']['TEXT_BTN']['VALUE'];?></a>
											<?endif;?>
										</div>
										<div class="prime__content-box col-12  col-xl-3">
											<div class="prime__text-box">
												<p class="prime__text text text--extrabold">20+</p>
												<p class="prime__text text">Лет успешного опыта на рынке</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
<?endforeach;?>

					</div>
				</div>
			</section>

			<!-- Initialize Swiper -->
			<script>
				// выбираем элемент с id "prime-section" и создаем новый Swiper объект
				var primeSwiper = new Swiper(".primeSwiper", {
					// задаем количество слайдов, которые будут показываться одновременно
					slidesPerView: 1,
					// включаем курсор в виде "руки" при наведении на слайды
					grabCursor: true,
					// включаем использование клавиатуры для навигации по слайдам
					keyboard: {
						enabled: true,
					},
					// задаем настройки для различных ширин экрана
					breakpoints: {
						769: {
							slidesPerView: 1,
						},
					},
					// включаем полосу прокрутки и выбираем элемент, в котором она будет находиться
					scrollbar: {
						el: ".prime .swiper-scrollbar",
					},
					// включаем кнопки "вперед" и "назад" для навигации по слайдам
					navigation: {
						nextEl: ".prime .swiper-button-next",
						prevEl: ".prime .swiper-button-prev",
					},
					// включаем пагинацию и настраиваем внешний вид номеров слайдов
					pagination: {
						el: ".prime .swiper-pagination",
						clickable: true,
						// здесь мы используем функцию renderBullet для создания номеров слайдов вида "01/10"
						renderBullet: function(index, className) {
							return (
								'<span class="' +
								className +
								'">' +
								("0" + (index + 1)).slice(-2) +
								"/" +
								("0" + this.slides.length).slice(-2) +
								"</span>"
							);
						},
					},
				});
			</script>