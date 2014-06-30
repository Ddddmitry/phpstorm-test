<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>

<body id="orderBody">
<?
$error="";
if ($_POST["name"]=="") $error.="Не заполнено поле имя<br />";
if ($_POST["phone"]=="") $error.="Не заполнено поле телефон<br />";
if ($_POST["email"]=="") $_POST["email"] = "oneclick@mail.ru";
if ($_POST["id"]=="" || !is_numeric($_POST["id"])) $error.="Не указан либо неправильно указан id товара<br />";
if ((CModule::IncludeModule("catalog")) && (CModule::IncludeModule("sale")) && (strlen($error)==0)) {


	$s_id = "s1"; //идентификатор сайта!!!!!

	$tovar = CCatalogProduct::GetByIDEx($_POST["id"]);
	$arFields = array(
		"LID" => $s_id, // выбираем сайт
		"PERSON_TYPE_ID" => 1, // Тип плательщика
		"PAYED" => "N", // не оплачен
		"CANCELED" => "N", // не отменён
		"STATUS_ID" => "N", // текущий статус "принят"
		"PRICE" => $tovar["PRICES"][1]["PRICE"], // общая сумма заказа
		"CURRENCY" => "RUB", // вылюта
		"USER_ID" => 2, // выбираем анонимного пользователя
		"PAY_SYSTEM_ID" => 1, // платежная система
		"TAX_VALUE" => 0.0, // общая сумма налогов
		"USER_DESCRIPTION" => "Заказ в один клик",
	);

	$ORDER_ID = CSaleOrder::Add($arFields);
	$ORDER_ID = IntVal($ORDER_ID);

	if ($ORDER_ID <= 0) {
		if($ex = $APPLICATION->GetException())
			echo "001".$ex->GetString();
	} else {
		if(!CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID())) {
			if($ex = $APPLICATION->GetException())
				echo "002".$ex->GetString();
		}

		$arFields = array(
			"PRODUCT_ID" => $_POST["id"],
			"PRICE" => $tovar["PRICES"][1]["PRICE"],
			"CURRENCY" => "RUB",
			"QUANTITY" => 1,
			"LID" => $s_id,
			"DELAY" => "N",
			"CAN_BUY" => "Y",
			"NAME" => $tovar["NAME"],
		);

		if(!CSaleBasket::Add($arFields)) {
			if($ex = $APPLICATION->GetException())
				echo "003".$ex->GetString();
		}

		CSaleBasket::OrderBasket($ORDER_ID, CSaleBasket::GetBasketUserID(), $s_id);

		$arFields = array(
			"ORDER_ID" => $ORDER_ID,
			"NAME" => "Город",
			"ORDER_PROPS_ID" => 5,
			"VALUE" => "не указан",
		);
		CSaleOrderPropsValue::Add($arFields);
		$arFields = array(
			"ORDER_ID" => $ORDER_ID,
			"NAME" => "Адрес",
			"ORDER_PROPS_ID" => 6,
			"VALUE" => "не указан",
		);
		CSaleOrderPropsValue::Add($arFields);
		$arFields = array(
			"ORDER_ID" => $ORDER_ID,
			"NAME" => "Телефон",
			"ORDER_PROPS_ID" => 2,
			"VALUE" => $_POST["buyer_phone"],
		);
		CSaleOrderPropsValue::Add($arFields);
		$arFields = array(
			"ORDER_ID" => $ORDER_ID,
			"NAME" => "Фамилия Имя",
			"ORDER_PROPS_ID" => 1,
			"VALUE" => $_POST["buyer_name"],
		);
		CSaleOrderPropsValue::Add($arFields);

		$arEventFields = array(
			"ORDER_ID"                    => $ORDER_ID,
			"ORDER_DATE"                  => date("m.d.y"),
			"ORDER_USER"                  => $_POST["name"].". Тел.:".$_POST["phone"],
			"PRICE"                       => $tovar["PRICES"][1]["PRICE"]." рублей",
			"EMAIL"                       => $_POST["email"],
			"ORDER_LIST"                  => $tovar["NAME"].' - '.$tovar["PRICES"][1]["PRICE"],
			"SALE_EMAIL"                  => "d.voevodin@snow-media.ru",
		);
		CEvent::Send("SALE_NEW_ORDER", $s_id, $arEventFields);

		echo "<h2 id='orderH2'>Спасибо за Ваш заказ!</h2>";
		echo "<p id='orderText'>Наш менеджер свяжется с Вами в ближайшее время.</p>";
	}
} else {
	echo "<font color='red'>".$error."</font>";
}
?>
</body>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>