<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001523533680';
$dateexpire = '001526125680';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:2:{s:7:"results";a:13:{i:0;a:5:{s:5:"title";s:291:"Обнаружено как минимум 1 файлов или директорий с доступом на запись для всех пользователей окружения в котором работает веб-сервер (не пользователей Bitrix Framework)";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:275:"Право на запись у всех системных пользователей может служить причиной полной компрометации ресурса, путем модификации исходного кода вашего проекта";s:14:"recommendation";s:119:"Необходимо отобрать лишние права у всех системных пользователей";s:15:"additional_info";s:66:"Последние 1 файлов/директорий:<br>/bitrix";}i:1;a:5:{s:5:"title";s:62:"Конфигурация CORS не была проверена";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:117:"Произошла ошибка обработки запроса, тест не может быть завершен";s:14:"recommendation";s:172:"Попробуйте отключить контроль активности или повысить производительность генерации страниц";s:15:"additional_info";s:547:"Причина: Таймаут ожидания<br>Адрес: <a href="http://bais.megamir38.ru/bitrix/tools/public_session.php?rnd=0.937407659733" target="_blank">http://bais.megamir38.ru/bitrix/tools/public_session.php?rnd=0.937407659733</a><br>Запрос/Ответ: <pre>GET /bitrix/tools/public_session.php?rnd=0.937407659733 HTTP/1.1
origin: batman.origin.string
host: bais.megamir38.ru
accept: */*
user-agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter

----------Connection closed by timeout (CODE: REQUEST_TIMEOUT)----------</pre>";}i:2;a:5:{s:5:"title";s:128:"Уровень безопасности административной группы не является повышенным";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:182:"Пониженный уровень безопасности административной группы может значительно помочь злоумышленнику";s:14:"recommendation";s:337:"Ужесточить <a href="/bitrix/admin/group_edit.php?ID=1&tabControl_active_tab=edit2"  target="_blank">политики безопасности административной</a> группы или выбрать предопределенную настройку уровня безопасности "Повышенный".";s:15:"additional_info";s:0:"";}i:3;a:5:{s:5:"title";s:102:"Пароль к БД не содержит спецсимволов(знаков препинания)";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:138:"Пароль слишком прост, что повышает риск взлома учетной записи в базе данных";s:14:"recommendation";s:57:"Добавить спецсимволов в пароль";s:15:"additional_info";s:0:"";}i:4;a:5:{s:5:"title";s:101:"Не удалось проверить доступность обновлений платформы";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:193:"Возможно доступно обновление системы SiteUpdate или у вашей копии продукта истек период получения обновлений";s:14:"recommendation";s:143:"Подробнее на странице: <a href="/bitrix/admin/update_system.php" target="_blank">Обновление платформы</a>";s:15:"additional_info";s:0:"";}i:5;a:5:{s:5:"title";s:148:"Предположительно в директории хранения сессий находятся сессии других проектов";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:180:"Это может позволить читать/изменять сессионные данные, через скрипты других виртуальных серверов";s:14:"recommendation";s:192:"Сменить директорию хранения либо включить хранение сессий в БД: <a href="/bitrix/admin/security_session.php">Защита сессий</a>";s:15:"additional_info";s:1699:"Причина: файл сессии не содержит подписи текущего сайта<br>
Файл: /tmp/u0037701/sess_d94dca1197e67ceb00d208d30f956823<br>
Подпись текущего сайта: 654e335dda994d66739cc323bc4a32e4<br>
Содержимое файла: <pre>SESS_AUTH|a:1:{s:6:&quot;POLICY&quot;;a:13:{s:15:&quot;SESSION_TIMEOUT&quot;;i:24;s:15:&quot;SESSION_IP_MASK&quot;;s:7:&quot;0.0.0.0&quot;;s:13:&quot;MAX_STORE_NUM&quot;;i:10;s:13:&quot;STORE_IP_MASK&quot;;s:7:&quot;0.0.0.0&quot;;s:13:&quot;STORE_TIMEOUT&quot;;i:525600;s:17:&quot;CHECKWORD_TIMEOUT&quot;;i:525600;s:15:&quot;PASSWORD_LENGTH&quot;;i:6;s:18:&quot;PASSWORD_UPPERCASE&quot;;s:1:&quot;N&quot;;s:18:&quot;PASSWORD_LOWERCASE&quot;;s:1:&quot;N&quot;;s:15:&quot;PASSWORD_DIGITS&quot;;s:1:&quot;N&quot;;s:20:&quot;PASSWORD_PUNCTUATION&quot;;s:1:&quot;N&quot;;s:14:&quot;LOGIN_ATTEMPTS&quot;;i:0;s:21:&quot;PASSWORD_REQUIREMENTS&quot;;s:83:&quot;Пароль должен быть не менее 6 символов длиной.&quot;;}}SESS_IP|s:12:&quot;93.158.152.4&quot;;SESS_TIME|i:1476789550;BX_SESSION_SIGN|s:32:&quot;c573b85586f572f4e43af1f89c2d14dd&quot;;SESS_OPERATIONS|a:0:{}fixed_session_id|s:32:&quot;ce7f6babf8d8b6a83c9f5dd643829391&quot;;BITRIX_CONVERSION_CONTEXT_s1|a:3:{s:2:&quot;ID&quot;;N;s:6:&quot;EXPIRE&quot;;i:1476835140;s:6:&quot;UNIQUE&quot;;a:0:{}}SALE_USER_ID|i:0;SALE_USER_BASKET_PRICE|a:1:{s:2:&quot;s1&quot;;a:1:{i:0;i:0;}}SALE_USER_BASKET_QUANTITY|a:1:{s:2:&quot;s1&quot;;a:1:{i:0;i:0;}}VOTE|a:1:{s:5:&quot;VOTES&quot;;a:0:{}}IBLOCK_CATALOG_COMMENTS_PARAMS_10_516|a:22:{s:9:&quot;IBLOCK_ID&quot;;s:2:&quot;10&quot;;s:10:&quot;ELEMENT_ID&quot;;s:3:&quot;516&quot;;</pre>";}i:6;a:5:{s:5:"title";s:113:"Разрешено отображение сайта во фрейме с произвольного домена";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:307:"Запрет отображения фреймов сайта со сторонних доменов способен предотвратить целый класс атак, таких как <a href="https://www.owasp.org/index.php/Clickjacking" target="_blank">Clickjacking</a>, Framesniffing и т.д.";s:14:"recommendation";s:1875:"Скорее всего, вам будет достаточно разрешения на просмотр сайта в фреймах только на страницах текущего сайта.
Сделать это достаточно просто, достаточно добавить заголовок ответа "X-Frame-Options: SAMEORIGIN" в конфигурации вашего frontend-сервера.
</p><p>В случае использования nginx:<br>
1. Найти секцию server, отвечающую за обработку запросов нужного сайта. Зачастую это файлы в /etc/nginx/site-enabled/*.conf<br>
2. Добавить строку:
<pre>
add_header X-Frame-Options SAMEORIGIN;
</pre>
3. Перезапустить nginx<br>
Подробнее об этой директиве можно прочесть в документации к nginx: <a href="http://nginx.org/ru/docs/http/ngx_http_headers_module.html" target="_blank">Модуль ngx_http_headers_module</a>
</p><p>В случае использования Apache:<br>
1. Найти конфигурационный файл для вашего сайта, зачастую это файлы /etc/apache2/httpd.conf, /etc/apache2/vhost.d/*.conf<br>
2. Добавить строки:
<pre>
&lt;IfModule headers_module&gt;
	Header set X-Frame-Options SAMEORIGIN
&lt;/IfModule&gt;
</pre>
3. Перезапустить Apache<br>
4. Убедиться, что он корректно обрабатывается Apache и этот заголовок никто не переопределяет<br>
Подробнее об этой директиве можно прочесть в документации к Apache: <a href="http://httpd.apache.org/docs/2.2/mod/mod_headers.html" target="_blank">Apache Module mod_headers</a>
</p>";s:15:"additional_info";s:2085:"Адрес: <a href="http://bais.megamir38.ru/" target="_blank">http://bais.megamir38.ru/</a><br>Запрос/Ответ: <pre>GET / HTTP/1.1
host: bais.megamir38.ru
accept: */*
user-agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter

HTTP/1.1 200 OK
Server: nginx
Date: Tue, 18 Oct 2016 11:19:53 GMT
Content-Type: text/html; charset=UTF-8
Content-Length: 96608
Connection: keep-alive
Vary: Accept-Encoding
X-Powered-By: PHP/5.5.30
P3P: policyref=&quot;/bitrix/p3p.xml&quot;, CP=&quot;NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA&quot;
X-Powered-CMS: Bitrix Site Manager (c237d1ab88fe0fc226332eca7e5ce978)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: PHPSESSID=d92746d24b5244381af7f9c8800a7050; path=/; HttpOnly

&lt;!DOCTYPE html&gt;
&lt;html class=&quot;  &quot;&gt;
	&lt;head&gt;
						&lt;title&gt;байс - Главная&lt;/title&gt;
		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
		&lt;link href=\'http://fonts.googleapis.com/css?family=Exo+2:400,600,600italic,400italic&amp;subset=latin,cyrillic\'; rel=\'stylesheet\' type=\'text/css\'&gt;
																&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
&lt;meta name=&quot;description&quot; content=&quot;Компания специализируется на оказании широкого спектра услуг как для корпоративных клиентов так и для частных лиц. Профессионализм и ответственность ключевые преимущества нашей компании.&quot; /&gt;
&lt;link href=&quot;/bitrix/cache/css/s1/aspro-stroy/kernel_main/kernel_main.css?147271123444417&quot; type=&quot;text/css&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/bitrix/cache/css/s1/aspro-stroy/template_d2c388ae7466503dea172c2bf1c79cb1/template_d2c388ae7466503dea172
----------Only 1Kb of body shown----------<pre>";}i:7;a:5:{s:5:"title";s:68:"Разрешено чтение файлов по URL (URL wrappers)";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:256:"Если эта, сомнительная, возможность PHP не требуется - рекомендуется отключить, т.к. она может стать отправной точкой для различного типа атак";s:14:"recommendation";s:89:"Необходимо в настройках php указать:<br>allow_url_fopen = Off";s:15:"additional_info";s:0:"";}i:8;a:5:{s:5:"title";s:119:"Временные файлы хранятся в пределах корневой директории проекта";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:271:"Хранение временных файлов, создаваемых при использовании CTempFile, в пределах корневой директории проекта не рекомендовано и несет с собой ряд рисков.";s:14:"recommendation";s:884:"Необходимо определить константу "BX_TEMPORARY_FILES_DIRECTORY" в "bitrix/php_interface/dbconn.php" с указанием необходимого пути.<br>
Выполните следующие шаги:<br>
1. Выберите директорию вне корня проекта. Например, это может быть "/home/bitrix/tmp/www"<br>
2. Создайте ее. Для этого выполните следующую комманду:
<pre>
mkdir -p -m 700 /полный/путь/к/директории
</pre>
3. В файле "bitrix/php_interface/dbconn.php" определите соответствующую константу, что бы система начала использовать эту директорию:
<pre>
define("BX_TEMPORARY_FILES_DIRECTORY", "/полный/путь/к/директории");
</pre>";s:15:"additional_info";s:92:"Текущая директория: /var/www/u0037701/data/www/bais.megamir38.ru/upload/tmp";}i:9;a:5:{s:5:"title";s:110:"Установлен не корректный порядок формирования массива _REQUEST";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:392:"Зачастую в массив _REQUEST нет необходимости добавлять любые переменные, кроме массивов _GET и _POST. В противном случае это может привести к раскрытию информации о пользователе/сайте и иным не предсказуемым последствиям.";s:14:"recommendation";s:88:"Необходимо в настройках php указать:<br>request_order = "GP"";s:15:"additional_info";s:75:"Текущее значение: ""<br>Рекомендованное: "GP"";}i:10;a:5:{s:5:"title";s:77:"Почтовые сообщения содержат UID PHP процесса";s:8:"critical";s:3:"LOW";s:6:"detail";s:356:"В каждом отправляемом письме добавляется заголовок X-PHP-Originating-Script, который содержит UID и имя скрипта отправляющего письмо. Это позволяет злоумышленнику узнать от какого пользователя работает PHP.";s:14:"recommendation";s:91:"Необходимо в настройках php указать:<br>mail.add_x_header = Off";s:15:"additional_info";s:0:"";}i:11;a:5:{s:5:"title";s:38:"Включен вывод ошибок";s:8:"critical";s:3:"LOW";s:6:"detail";s:202:"Вывод ошибок предназначен для разработки и тестовых стендов, он не должен использоваться на конечном ресурсе.";s:14:"recommendation";s:88:"Необходимо в настройках php указать:<br>display_errors = Off";s:15:"additional_info";s:0:"";}i:12;a:5:{s:5:"title";s:44:"Включен Automatic MIME Type Detection";s:8:"critical";s:3:"LOW";s:6:"detail";s:248:"По умолчанию в Internet Explorer/FlashPlayer включен автоматический mime-сниффинг, что может служить источником XSS нападения или раскрытия информации.";s:14:"recommendation";s:1752:"Скорее всего, вам не нужна эта функция, поэтому её можно безболезненно отключить, добавив заголовок ответа "X-Content-Type-Options: nosniff" в конфигурации вашего веб-сервера.
</p><p>В случае использования nginx:<br>
1. Найти секцию server, отвечающую за обработку запросов нужного сайта. Зачастую это файлы в /etc/nginx/site-enabled/*.conf<br>
2. Добавить строку:
<pre>
add_header X-Content-Type-Options nosniff;
</pre>
3. Перезапустить nginx<br>
Подробнее об этой директиве можно прочесть в документации к nginx: <a href="http://nginx.org/ru/docs/http/ngx_http_headers_module.html" target="_blank">Модуль ngx_http_headers_module</a>
</p><p>В случае использования Apache:<br>
1. Найти конфигурационный файл для вашего сайта, зачастую это файлы /etc/apache2/httpd.conf, /etc/apache2/vhost.d/*.conf<br>
2. Добавить строки:
<pre>
&lt;IfModule headers_module&gt;
	Header set X-Content-Type-Options nosniff
&lt;/IfModule&gt;
</pre>
3. Перезапустить Apache<br>
4. Убедиться, что он корректно обрабатывается Apache и этот заголовок никто не переопределяет<br>
Подробнее об этой директиве можно прочесть в документации к Apache: <a href="http://httpd.apache.org/docs/2.2/mod/mod_headers.html" target="_blank">Apache Module mod_headers</a>
</p>";s:15:"additional_info";s:1774:"Адрес: <a href="http://bais.megamir38.ru/bitrix/js/main/core/core.js?rnd=0.0179637043662" target="_blank">http://bais.megamir38.ru/bitrix/js/main/core/core.js?rnd=0.0179637043662</a><br>Запрос/Ответ: <pre>GET /bitrix/js/main/core/core.js?rnd=0.0179637043662 HTTP/1.1
host: bais.megamir38.ru
accept: */*
user-agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter

HTTP/1.1 200 OK
Server: nginx
Date: Tue, 18 Oct 2016 11:19:49 GMT
Content-Type: application/javascript
Content-Length: 117733
Last-Modified: Thu, 01 Sep 2016 06:14:19 GMT
Connection: keep-alive
Vary: Accept-Encoding
ETag: &quot;57c7c73b-1cbe5&quot;
Accept-Ranges: bytes

/**********************************************************************/
/*********** Bitrix JS Core library ver 0.9.0 beta ********************/
/**********************************************************************/

;(function(window){

if (!!window.BX &amp;&amp; !!window.BX.extend)
	return;

var _bxtmp;
if (!!window.BX)
{
	_bxtmp = window.BX;
}

window.BX = function(node, bCache)
{
	if (BX.type.isNotEmptyString(node))
	{
		var ob;

		if (!!bCache &amp;&amp; null != NODECACHE[node])
			ob = NODECACHE[node];
		ob = ob || document.getElementById(node);
		if (!!bCache)
			NODECACHE[node] = ob;

		return ob;
	}
	else if (BX.type.isDomNode(node))
		return node;
	else if (BX.type.isFunction(node))
		return BX.ready(node);

	return null;
};

BX.debugEnableFlag = true;

// language utility
BX.message = function(mess)
{
	if (BX.type.isString(mess))
	{
		if (typeof BX.message[mess] == &quot;undefined&quot;)
		{
			BX.onCustomEvent(&quot;onBXMessageNotFound&quot;, [mess]);
			if (typeof BX.message[mess] == &quot;undefined&quot;)
			{
				BX.debug(&quot;message undef
----------Only 1Kb of body shown----------<pre>";}}s:9:"test_date";s:10:"18.10.2016";}}';
return true;
?>