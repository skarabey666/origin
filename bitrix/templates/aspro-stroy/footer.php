<?CStroy::checkRestartBuffer();?>
					<?IncludeTemplateLangFile(__FILE__);?>
					<?if(!$isIndex):?>
								<?if(!$isMenu):?>
									<?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "LEFT"):?>
									<?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "RIGHT"):?>
									<?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
									<?if($APPLICATION->GetProperty("MENU")=="Y"){?>
										<div class="col-md-3 col-sm-3 col-xs-4 right-menu-md">
											<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "subleft",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?>
											<div class="sidearea">
												<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
												<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/under_sidebar.php"
	)
);?>
											</div>
										</div>
									<?}?>
								<?endif;?>
						<?if(!$isContacts):?>
							<?// class="maxwidth-theme?>
						<?// class=row?>
						<?endif;?>
					<?endif;?>
				<?// class=container?>
				<?if($isIndex):?>
										</div>
					<?=$indexEpilog; // buffered from indexblocks.php?>
				<?endif;?>
				<?if($isPrices):?>
					<?@include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DIR.'/priceblocks.php'));?>
					<?=$priceProlog; // buffered from priceblocks.php?>
				<?endif;?>
			<?// class=main?>
		<?// class=body?>
		</div></div></div></div></div></div></div>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="maxwidth-theme">
						<div class="col-md-3 hidden-sm hidden-xs">
							<div class="copy">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div class="social">
										<?$APPLICATION->IncludeComponent(
	"aspro:social.info.stroy",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A"
	)
);?>
							</div>
							<div id="bx-composite-banner"></div>
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="row">
								<div class="col-md-9 col-sm-9">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom1",
		"USE_EXT" => "Y"
	)
);?>
										</div>
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom2",
		"USE_EXT" => "Y"
	)
);?>
										</div>
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom3",
		"USE_EXT" => "Y"
	)
);?><div class="mmit_logo" style="padding-top: 75%;padding-left: 65%;"><a href="http://mmit.ru" rel="nofollow" target="_blank" title="Перейти на страницу разработчика сайта" style="position: absolute;"><img src="/upload/logo-mmit.png"><span style="position: absolute;padding-left: 13px;font-size: 14px;font-family: 'Verdana';padding-top: 3px;color: white;width: 150px;">поддержка сайта</span></a></div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="info">
										<div class="phone">
											<i class="fa fa-phone"></i>
											<div class="info_ext">
												<?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone.php", array(), array(
														"MODE" => "html",
														"NAME" => "Phone",
													)
												);?>
												<div class="popup_form_ext" data-event="jqm" data-param-id="21" data-name="callback">
													<span>Заказать звонок</span>
												</div>
											</div>
										</div>
										<div class="compass">
											<i class="fa fa-map-marker"></i>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-address.php", array(), array(
													"MODE" => "html",
													"NAME" => "�����",
												)
											);?>
										</div>
										<div class="email">
											<i class="fa fa-envelope"></i>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
													"MODE" => "html",
													"NAME" => "E-mail",
												)
											);?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 hidden-md hidden-lg">
							<div class="copy last">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div id="bx-composite-banner"></div>
						</div>
					</div>
				</div>
			</div>
		 </footer>
		<div class="bx_areas">
			<?$APPLICATION->IncludeFile(SITE_DIR."include/invis-counter.php", Array(), Array(
					"MODE" => "text",
					"NAME" => "Counters place for Yandex.Metrika, Google.Analytics",
				)
			);?>
		</div>
		<?CStroy::SetMeta();?>