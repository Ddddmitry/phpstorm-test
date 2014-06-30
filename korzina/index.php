<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent("san:sale.basket.basket", "san_basket", array(
	"COLUMNS_LIST" => array(
		0 => "NAME",
		1 => "DELETE",
		2 => "PRICE",
		3 => "PROPERTY_brand",
		4 => "PROPERTY_brand_collection",
		5 => "PROPERTY_HAR_MATERIAL",
		6 => "PROPERTY_HAR_COLOR",
		7 => "PROPERTY_HAR_DLINA",
		8 => "PROPERTY_HAR_SHIRINA",
		9 => "PROPERTY_HAR_VYSOTA",
		10 => "PROPERTY_HAR_STRANA_PROIZVODITEL",
		11 => "PROPERTY_HAR_NAZNACHENIE",
	),
	"PATH_TO_ORDER" => "/korzina/order",
	"HIDE_COUPON" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"USE_PREPAYMENT" => "N",
	"SET_TITLE" => "Y"
	),
	false
);?>

<?$APPLICATION->IncludeComponent("san:sale.order.ajax", "san_order_ajax", array(
	"PAY_FROM_ACCOUNT" => "Y",
	"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
	"COUNT_DELIVERY_TAX" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"ALLOW_AUTO_REGISTER" => "Y",
	"SEND_NEW_USER_NOTIFY" => "Y",
	"DELIVERY_NO_AJAX" => "N",
	"DELIVERY_NO_SESSION" => "N",
	"TEMPLATE_LOCATION" => ".default",
	"DELIVERY_TO_PAYSYSTEM" => "d2p",
	"USE_PREPAYMENT" => "N",
	"PROP_1" => array(
		0 => "6",
		1 => "5",
		2 => "4",
	),
	"ALLOW_NEW_PROFILE" => "Y",
	"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
	"SHOW_STORES_IMAGES" => "N",
	"PATH_TO_BASKET" => "basket.php",
	"PATH_TO_PERSONAL" => "index.php",
	"PATH_TO_PAYMENT" => "payment.php",
	"PATH_TO_AUTH" => "/auth/",
	"SET_TITLE" => "Y",
	"PRODUCT_COLUMNS" => array(
		0 => "DISCOUNT_PRICE_PERCENT_FORMATED",
		1 => "WEIGHT_FORMATED",
	),
	"DISABLE_BASKET_REDIRECT" => "Y"
	),
	false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>