<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->IncludeComponent(
	"san:catalog.element",
	"san_brand_detail",
	Array(
		"TEMPLATE_THEME" => "blue",
		"DISPLAY_NAME" => "Y",
		"ADD_DETAIL_TO_SLIDER" => "Y",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"DISPLAY_COMPARE" => "Y",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"USE_VOTE_RATING" => "N",
		"USE_COMMENTS" => "N",
		"BRAND_USE" => "N",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "7",
		"ELEMENT_ID" => "",
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"SECTION_ID" => "7",
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"PROPERTY_CODE" => array(),
		"OFFERS_FIELD_CODE" => array(),
		"OFFERS_PROPERTY_CODE" => array(),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "name",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "0",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"PRODUCT_PROPERTIES" => array(),
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"OFFERS_CART_PROPERTIES" => array(),
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"QUANTITY_FLOAT" => "N"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>