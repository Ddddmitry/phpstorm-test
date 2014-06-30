<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<?if(is_numeric($_GET["id"])):?>
<?
	if (!CModule::IncludeModule("catalog")) {
		echo "Ошибка подключения модуля catalog.";
		die;
	}
	$tovar = CCatalogProduct::GetByIDEx($_GET["id"]);

	if($tovar["PREVIEW_PICTURE"])
		$small_img = CFile::ResizeImageGet($tovar["PREVIEW_PICTURE"], array('width'=>210, 'height'=>170), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	else
		$small_img = CFile::ResizeImageGet($tovar["DETAIL_PICTURE"], array('width'=>210, 'height'=>170), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	$small_img = $small_img["src"];

	CModule::IncludeModule("sale");
	//количество товаров в корзине (без цикла)
	$cntBasketItems = CSaleBasket::GetList(
		array(),
		array(
			"FUSER_ID" => CSaleBasket::GetBasketUserID(),
			"LID" => SITE_ID,
			"ORDER_ID" => "NULL"
		),
		array()
	);

	?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Купить в один клик</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link href="/oneclick/style.css" type="text/css" rel="stylesheet" />
	<script src = "<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
</head>
<body>

	<div class="best-card" style=" float: none; height: 358px;">

        <p class="title" style="font-size: 18px; margin: 0 0 15px 0; color: #8a9836;"><?=$tovar["NAME"]?></p>
        <div class="image" style="float: left;">
                <img src="<?=$small_img?>" alt="<?=$tovar["NAME"]?>">
        </div>
        <div class="desc">
            <div class="text" style="height: auto;">
				<?
	            echo "<i>".$tovar['PROPERTIES']['ARTICUL']['NAME']."</i> ".$tovar['PROPERTIES']['ARTICUL']['VALUE']."<br/>";
	            //echo "<i>Характеристики:</i> ".$tovar["DETAIL_TEXT"];
				?>
            </div>
            <div class="order">
                Цена: <b><?=$tovar["PRICES"][1]["PRICE"]?></b> руб.<br>
            </div>
	        <?if($cntBasketItems>=1):?>
	            <span class="infoMess">В вашей корзине находятся товары, которые не будут включены в данный заказ.</span>
		    <?endif?>
        </div>
        <div style="clear: both; height: 30px;"></div>
        <form action="/oneclick/order.php" method="POST" id="form">
            <table style="margin: 0px auto;">
                <tr>
                    <td><label for="buyer_name">Имя получателя*:</label></td>
                    <td><input type="text" name="buyer_name" id="buyer_name" placeholder="Имя" required=""></td>
                </tr>
                <tr>
                    <td><label for="buyer_phone">Телефон для связи*:</label></td>
                    <td><input type="text" name="buyer_phone" id="buyer_phone" placeholder="+74951234567" required=""></td>
                </tr>
				<tr>
					<td><label for="buyer_email">Email:</label></td>
					<td><input type="text" name="buyer_email" id="buyer_email" placeholder="info@example.com" required=""></td>
				</tr>
                <tr>
                    <td colspan="2">* - поля, обязательные для заполнения</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding-top: 20px;">
                        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
                        <input type='submit' value='Заказать' id="submit">
                        
                    </td>
                </tr>
            </table>
        </form>
    </div>
	<?else:?>
<p>Не выбран товар для покупки</p>
	<?endif;?>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>