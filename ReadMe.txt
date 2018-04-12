Исправление отображения кнопок на слайдере.

Для отображения текста на кнопках в слайдере убрал дополнительный css класс т.е. в файле

/bitrix/templates/aspro-stroy/components/bitrix/news.list/front-banners-big/template.php

до			
									<a href="<?=$arItem['PROPERTIES']['BUTTON1LINK']['VALUE']?>" class="btn <?=(strlen($arItem['PROPERTIES']['BUTTON1CLASS']['VALUE']) ? $arItem['PROPERTIES']['BUTTON1CLASS']['VALUE'] : 'btn-default white')?>">

после

<a href="<?=$arItem['PROPERTIES']['BUTTON1LINK']['VALUE']?>" class="btn <?=(strlen($arItem['PROPERTIES']['BUTTON1CLASS']['VALUE']) ? $arItem['PROPERTIES']['BUTTON1CLASS']['VALUE'] : 'btn-default')?>">

Резервная копия файла
/reserv/template.php

.................................................................................

Исправления шапки сайта.


Закоментировал css класс в файле

/bitrix/templates/aspro-stroy/themes/12/colors.css

.topmenu-COLOR .menu-only {
  background-color: #af1c11;
}


Закоментировал строки в файле по причине нечитаемого текста на кнопках вне шапки сайта

/bitrix/templates/aspro-stroy/themes/12/colors.css

.btn-default.white * {
  color: #c21f13 !important;
  border: 1px solid #c21f13;
}


Изменил
/bitrix/templates/aspro-stroy/themes/12/colors.css
до
.btn-default {
  background-color: #c21f13;
  border-color: #c21f13;
  color: #ffffff !important;
}

После
.btn-default {
  background-color: #c21f13;
  border-color: #c21f13;
  color: #ffffff;
}



Переназначил классы в файл

/bitrix/templates/aspro-stroy/css/custom.css

.mega-menu table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    max-width: 100%;
    background-color: #af1c11;
 }


.btn-default.white {
    color: black;
}

.menu-row {
    position: relative;
    z-index: -10;
}

.logo_and_menu-row > .row{
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 28px;
    position: static;
    height: 50px;
}

.search {
    background: none repeat scroll 0 0 #e0e7ea !important;
    border: medium none;
    box-shadow: 0 1px 0px rgba(0, 0, 0, 0.1);
    height: 75px;
    padding: 30px 0;
    /* position: absolute; */
    right: 0;
    top: 60px;
    width: 100%;
    z-index: 9;
}


Резервные копии файлов
/reserv/colors.css
/reserv/custom.css
















































