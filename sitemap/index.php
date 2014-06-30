<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->IncludeComponent("bitrix:main.map","",Array(
		"LEVEL" => "3",
		"COL_NUM" => "2",
		"SHOW_DESCRIPTION" => "Y",
		"SET_TITLE" => "Y",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>