<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arServices = Array(
	"main" => array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => array(
			"public.php",
			"template.php",
			"theme.php",
			"menu.php",
			"settings.php",
		),
	),
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK_DEMO_DATA"),
		"STAGES" => Array(
			"types.php",
			"advtbig.php", 
			"advtsmall.php",
			"licenses.php",
			"references.php",
			"references2.php",
			"partners.php",
			"faq.php",
			"staff.php",
			"vacancy.php",
			"reviews.php",
			"projects.php",
			"catalog.php",
			"services.php",
			"stock.php", 
			"news.php",
			"articles.php",
			"forms.php",
			"company.php",
			// "links.php",
		),
	),
	"search" => array(
		"NAME" => GetMessage("SERVICE_SEARCH"),
		"STAGES" => array(
			"search.php",
		),
	),
);
?>