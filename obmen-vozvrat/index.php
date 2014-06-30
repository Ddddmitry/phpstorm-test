<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?$APPLICATION->IncludeComponent(
	"san:catalog.element",
	"simplePage",
	Array(
		"IBLOCK_TYPE" => "infoblock",
		"IBLOCK_ID" => "4",
		"ELEMENT_ID" => "",
		"ELEMENT_CODE" => "obmen-vozvrat",
		"SECTION_ID" => "4",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>