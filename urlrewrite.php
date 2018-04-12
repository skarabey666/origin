<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/filter_search/filter/(.+?)/apply/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/indexblocks.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/company/partners/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/partners/index.php",
	),
	array(
		"CONDITION" => "#^/company/licenses/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/licenses/index.php",
	),
	array(
		"CONDITION" => "#^/company/reviews/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/reviews/index.php",
	),
	array(
		"CONDITION" => "#^/company/history/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/history/index.php",
	),
	array(
		"CONDITION" => "#^/company/vacancy/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/vacancy/index.php",
	),
	array(
		"CONDITION" => "#^/info/articles/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/articles/index.php",
	),
	array(
		"CONDITION" => "#^/company/staff/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/staff/index.php",
	),
	array(
		"CONDITION" => "#^/info/stock/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/stock/index.php",
	),
	array(
		"CONDITION" => "#^/info/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/news/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/gruppa_kompani/index.php",
	),
	array(
		"CONDITION" => "#^/projects/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/projects/index.php",
	),
	array(
		"CONDITION" => "#^/info/faq/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/faq/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/catalog/index.php",
	),
);

?>