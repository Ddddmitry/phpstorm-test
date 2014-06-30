<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<h1>Сравнение товаров</h1>
<div style="display: none;">
<?$APPLICATION->IncludeComponent("bitrix:catalog.compare.list", "", array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"DETAIL_URL" => "/#IBLOCK_CODE#/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"COMPARE_URL" => "/compare/",
		"NAME" => "CATALOG_COMPARE_LIST",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
</div>


<?$APPLICATION->IncludeComponent("san:catalog.compare.result", "san_rafael", array(
	"NAME" => "CATALOG_COMPARE_LIST",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"FIELD_CODE" => array(
		0 => "PREVIEW_PICTURE",
	),
	"PROPERTY_CODE" => array(
		0 => "SKIDKA",
		1 => "OLD_PRICE",
		2 => "NOVINKA",
		3 => "HIT",
		4 => "MODEL",
		5 => "PROIZVODITEL",
		6 => "SERIYA",
		7 => "BOX_CONTAINER",
		8 => "HAR_ARTICUL",
		9 => "HAR_TIP",
		10 => "HAR_FORMA",
		11 => "HAR_UGLOVAYA_KONSTRUKCIYA",
		12 => "HAR_MATERIAL",
		13 => "HAR_KOLVO_CHELOVEK",
		14 => "HAR_GIDROMASSAJ",
		15 => "HAR_GIDROMASSAJ_SPINY",
		16 => "HAR_GIDROMASSAJ_BOK",
		17 => "HAR_GIDROMASSAJ_NOG",
		18 => "HAR_AEROMASSAJ",
		19 => "HAR_COLOR",
		20 => "HAR_DLINA",
		21 => "HAR_SHIRINA",
		22 => "HAR_VYSOTA",
		23 => "HAR_PITANIE",
		24 => "HAR_GARANTIA",
		25 => "HAR_STRANA_PROIZVODITEL",
		26 => "HAR_BOCHOK",
		27 => "HAR_SIS_INSTALL",
		28 => "HAR_NAZNACHENIE",
		29 => "HAR_FORMA_CHASHI",
		30 => "HAR_ANTIVSPLESK",
		31 => "HAR_VYPUSK",
		32 => "HAR_SLIV_VODY",
		33 => "HAR_MECH_SLIVA",
		34 => "HAR_SIDENIE",
		35 => "HAR_MATERIAL_SIDELKI",
		36 => "HAR_COLOR_SIDELKA",
		37 => "HAR_MICROLIFT",
		38 => "HAR_BIDE",
		39 => "BRAND",
		40 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"DETAIL_URL" => "/#IBLOCK_CODE#/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"PRICE_CODE" => array(
		0 => "BASE_PRICE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"ELEMENT_SORT_FIELD_BOX" => "name",
	"ELEMENT_SORT_ORDER_BOX" => "asc",
	"ELEMENT_SORT_FIELD_BOX2" => "sort",
	"ELEMENT_SORT_ORDER_BOX2" => "desc",
	"HIDE_NOT_AVAILABLE" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"san:sale.viewed.product",
	"san_viewed_product",
	Array(
		"VIEWED_COUNT" => "4",
		"VIEWED_NAME" => "Y",
		"VIEWED_IMAGE" => "Y",
		"VIEWED_PRICE" => "Y",
		"VIEWED_CURRENCY" => "default",
		"VIEWED_CANBUY" => "Y",
		"VIEWED_CANBASKET" => "Y",
		"VIEWED_IMG_HEIGHT" => "133",
		"VIEWED_IMG_WIDTH" => "128",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SET_TITLE" => "Y"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>