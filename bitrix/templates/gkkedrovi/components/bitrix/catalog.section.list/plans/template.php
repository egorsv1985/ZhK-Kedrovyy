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
<section class="plans" id="plans">
	<div class="container">
		<h2 class="plans__title title mb-3">
			Планировки<span class="plans__title title title--extrabold">КВАРТИР В ЖК «КЕДРОВЫЙ ПАРК»</span>
		</h2>
		<ul class="plans__tablist nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
<?foreach ($arResult['SECTIONS'] as $key => &$arSection):
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
?>
			<li class="plans__item nav-item text-nowrap m-2" role="presentation" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
				<a class="plans__link nav-link<?=($key ? '' : ' active')?> w-100 w-md-auto" id="plan<?=$arSection['ID'];?>-tab" data-toggle="tab" href="#plan<?=$arSection['ID'];?>" role="tab" aria-controls="plan<?=$arSection['ID'];?>" aria-selected="true"><?=$arSection['NAME']?></a>
			</li>
<?endforeach;?>
		</ul>
		<div class="plans__content tab-content">
			<?foreach ($arResult['SECTIONS'] as $key => &$arSection):?>
			<div class="plans__tab-pane tab-pane<?=($key ? '' : ' active')?>" id="plan<?=$arSection['ID'];?>" role="tabpanel" aria-labelledby="plan<?=$arSection['ID'];?>-tab">
				<div class="row justify-content-center">
					<?
					$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PROPERTY_AREA", "PROPERTY_KITCHEN_AREA", "PROPERTY_IMAGES","PROPERTY_ACTION", "IBLOCK_SECTION_ID");
					$arFilter = Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "IBLOCK_SECTION_ID" => $arSection['ID']);
					$rsElements = CIBlockElement::GetList(Array('SORT' => 'ASC'), $arFilter, false, false, $arSelect);
					while($arElement = $rsElements->GetNext()):
						//print_r($arElement);
						if (CModule::IncludeModule("millcom.phpthumb")) {
							$arElement["PREVIEW_PICTURE_WEBP"] = CMillcomPhpThumb::generateImg($arElement["PREVIEW_PICTURE"], 8);
							$arElement["PREVIEW_PICTURE_JPG"] = CMillcomPhpThumb::generateImg($arElement["PREVIEW_PICTURE"], 9);
						}
						?>
						<div class="col-12 col-sm-6 col-md-4 my-3">
							<div class="plans__content-item pt-1 px-3 pb-4 position-relative">
								<div class="images">
									<picture class="d-block">
										<source srcset="<?=$arElement["PREVIEW_PICTURE_WEBP"]?>" type="image/webp">
										<img src="<?=$arElement["PREVIEW_PICTURE_JPG"]?>" alt="<?=$arElement['NAME']?>" class="plans__img 123 w-100 h-100">
									</picture>
									<?if ($arElement['PROPERTY_IMAGES_VALUE'] && !empty($arElement['PROPERTY_IMAGES_VALUE'])):?>
									<ul>
										<li>
											<a href="<?=CFile::GetPath($arElement["PREVIEW_PICTURE"])?>"  class="fancy" rel="gallery-<?=$arElement['ID']?>" data-fancybox="gallery-<?=$arElement['ID']?>">
												<img src="<?=$arElement["PREVIEW_PICTURE_WEBP"]?>">
											</a>
											<span></span>
										</li>
										<?foreach ($arElement['PROPERTY_IMAGES_VALUE'] as $IMG):
											$WEBP = CMillcomPhpThumb::generateImg($IMG, 8);
										?>
										<li>
											<a href="<?=CFile::GetPath($IMG)?>"  class="fancy" rel="gallery-<?=$arElement['ID']?>" data-fancybox="gallery-<?=$arElement['ID']?>">
												<img src="<?=$WEBP?>">
											</a>
											<span></span>
										</li>
										<?endforeach;?>
									</ul>
									<?endif;?>
								</div>
								<div class="row">
									<div class="col-12 mt-3 mb-2">
										<h3 class="plans__subtitle"><?=$arElement['NAME']?></h3>
									</div>
								</div>
								<div class="plans__box-text row justify-content-between">
									<p class="plans__text col-6">Общая площадь</p>
									<p class="plans__text col-6 text-end"><?=$arElement['PROPERTY_AREA_VALUE']?> м<sup>2</sup></p>
								</div>
								<div class="plans__box-text row justify-content-between mt-2">
									<p class="plans__text col-6">Кухня</p>
									<p class="plans__text col-6 text-end"><?=$arElement['PROPERTY_KITCHEN_AREA_VALUE']?> м<sup>2</sup></p>
								</div>
								<? if ($arElement['PROPERTY_ACTION_VALUE']) : ?>
								<div class="plans__box-text plans__box-text--absolute position-absolute p-1 ">
									<p class="plans__text "><?=$arElement['PROPERTY_ACTION_VALUE']?></p>
								</div>
								<?endif?>
							</div>
						</div>
					<?endwhile;?>
				</div>
			</div>
			<?endforeach;?>
		</div>
	</div>
</section>
