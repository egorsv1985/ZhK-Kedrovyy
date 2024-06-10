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
<section class="gallery" id="gallery">
	<div class="container">
		<h2 class="gallery__title title">
			Галерея<span class="gallery__title title title--extrabold">СДАННЫХ ДОМОВ</span>
		</h2>
		<div class="swiper gallerySwiper">
			<div class="swiper-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (CModule::IncludeModule("millcom.phpthumb")) {
		$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 4);
		$arItem["PREVIEW_PICTURE"]["JPG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);
	}
	?>

				<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<picture>
						<source srcset="<?=$arItem["PREVIEW_PICTURE"]["WEBP"]?>" type="image/webp">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["JPG"]?>" alt="prime-foto">
					</picture>
				</div>
				<?foreach ($arItem['PROPERTIES']['IMAGES']['VALUE'] as $IMG):
					if (CModule::IncludeModule("millcom.phpthumb")) {
						$IMAGE["WEBP"] = CMillcomPhpThumb::generateImg($IMG, 4);
						$IMAGE["JPG"] = CMillcomPhpThumb::generateImg($IMG, 5);
					}
					?>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?=$IMAGE["WEBP"]?>" type="image/webp">
						<img src="<?=$IMAGE["JPG"]?>" alt="prime-foto">
					</picture>
				</div>
				<?endforeach;?>
<?endforeach;?>
			</div>
		</div>
		<div class="swiper-scrollbar"></div>
		<div class="gallery__control">
			<div class="swiper-pagination"></div>

			<div class="gallery__buttons">
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>
<script>
	var swiper = new Swiper(".gallerySwiper", {
		slidesPerView: 1,
		grabCursor: true,
		keyboard: {
			enabled: true,
		},
		breakpoints: {
			769: {
				slidesPerView: 1,
			},
		},
		scrollbar: {
			el: ".gallery .swiper-scrollbar",
		},
		navigation: {
			nextEl: ".gallery .swiper-button-next",
			prevEl: ".gallery .swiper-button-prev",
		},
		pagination: {
			el: ".gallery .swiper-pagination",
			clickable: true,
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