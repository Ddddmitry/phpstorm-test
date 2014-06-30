<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Ключевые слова");
$APPLICATION->SetPageProperty("description", "В интернет-магазине «Сантехника от А до Я» каждый найдет для себя товар, отвечающий всем требованиям по функционалу, качеству и ценовой категории. Каждая позиция имеет фотокарточку и подробные характеристики.");
$APPLICATION->SetTitle("Интернет-магазин «Сантехника от А до Я»");
?><div class="main-page">
			<h1>Интернет-магазин элитной сантехники</h1>
				<article>
					<p>В нашем магазине вы можете приобрести самые разнообразные сантехнические товары высокого качества по приемлемым ценам. Заказывая у нас, вы можете почувствовать на себе все плюсы индивидуального подхода к клиенту. Представьте: вы видите подробное описание товара, получаете полную консультацию и, не стоя в очередях, с комфортом делаете заказ.</p>
				</article>
	<?
	CModule::IncludeModule("catalog");
	$uf_name = Array("UF_SHOW_ON_MAIN");
	$arFilter = array('IBLOCK_ID' => '1', 'DEPTH_LEVEL' => "1", "ACTIVE"=>"Y");
	$rsSect = CIBlockSection::GetList(array(),$arFilter,false, $uf_name);
	while ($arSect = $rsSect->GetNext())
	{
		if($arSect["UF_SHOW_ON_MAIN"]==1){?>
		<?$APPLICATION->IncludeComponent("san:catalog.top", "main_page", array(
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_ID" => "1",
			"SECTION_ID" => $arSect["ID"],//Секция откуда вытаскивать товары
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"ELEMENT_SORT_FIELD2" => "name",
			"ELEMENT_SORT_ORDER2" => "desc",
			"HIDE_NOT_AVAILABLE" => "N",
			"ELEMENT_COUNT" => "3",
			"LINE_ELEMENT_COUNT" => "0",
			"PROPERTY_CODE" => array(
				0 => "SKIDKA",
				1 => "OLD_PRICE",
				2 => "NOVINKA",
				3 => "HIT",
				4 => "",
			),
			"OFFERS_LIMIT" => "5",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"BASKET_URL" => "/personal/basket.php",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"DISPLAY_COMPARE" => "N",
			"PRICE_CODE" => array(
				0 => "BASE_PRICE",
			),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"PRODUCT_PROPERTIES" => array(
			),
			"USE_PRODUCT_QUANTITY" => "N",
			"CONVERT_CURRENCY" => "Y",
			"CURRENCY_ID" => "RUB"
		),
		false
	);?>

		<?}
	}
	?>




			</div>
			
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
