<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<h1>Поиск</h1>
<?$APPLICATION->IncludeComponent("san:search.page", "san_search_page", array(
	"RESTART" => "Y",
	"NO_WORD_LOGIC" => "N",
	"CHECK_DATES" => "Y",
	"USE_TITLE_RANK" => "Y",
	"DEFAULT_SORT" => "rank",
	"FILTER_NAME" => "",
	"arrFILTER" => array(
		0 => "iblock_catalog",
	),
	"SHOW_WHERE" => "Y",
	"arrWHERE" => array(
		0 => "iblock_catalog",
	),
	"SHOW_WHEN" => "N",
	"PAGE_RESULT_COUNT" => "50",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Результаты поиска",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"USE_LANGUAGE_GUESS" => "N",
	"USE_SUGGEST" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>