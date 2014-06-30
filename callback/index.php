<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent(
	"san:form",
	"backform",
	Array(
		"START_PAGE" => "new",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_EDIT_PAGE" => "N",
		"SHOW_VIEW_PAGE" => "N",
		"SUCCESS_URL" => "",
		"WEB_FORM_ID" => "1",
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SHOW_ANSWER_VALUE" => "Y",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_STATUS" => "Y",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"NOT_SHOW_FILTER" => array(0=>"",1=>"SIMPLE_QUESTION_558",2=>"",),
		"NOT_SHOW_TABLE" => array(0=>"",1=>"SIMPLE_QUESTION_558",2=>"",),
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "N",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"AJAX_OPTION_ADDITIONAL" => "",
		"VARIABLE_ALIASES" => Array(
			"action" => "action"
		)
	)
);?>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>