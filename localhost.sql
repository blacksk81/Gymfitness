<!DOCTYPE html>
<html lang="es" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>Exportar: local - Adminer</title>
<link rel="stylesheet" type="text/css" href="?file=default.css&amp;version=4.7.3">
<script src='?file=functions.js&amp;version=4.7.3' nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI="></script>
<link rel="shortcut icon" type="image/x-icon" href="?file=favicon.ico&amp;version=4.7.3">
<link rel="apple-touch-icon" href="?file=favicon.ico&amp;version=4.7.3">

<body class="ltr nojs">
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = 'You are offline.';
var thousandsSeparator = ' ';
</script>

<div id="help" class="jush-sql jsonly hidden"></div>
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});</script>

<div id="content">
<p id="breadcrumb"><a href=".">MySQL</a> &raquo; <a href='?username=root' accesskey='1' title='Alt+Shift+1'>Local Site: gymwp5</a> &raquo; <a href="?username=root&amp;db=local">local</a> &raquo; Exportar
<h2>Exportar: local</h2>
<div id='ajaxstatus' class='jsonly hidden'></div>

<form action="" method="post">
<table cellspacing="0" class="layout">
<tr><th>Salida<td><label><input type='radio' name='output' value='text' checked>mostrar</label><label><input type='radio' name='output' value='file'>archivo</label><label><input type='radio' name='output' value='gz'>gzip</label>
<tr><th>Formato<td><label><input type='radio' name='format' value='sql' checked>SQL</label><label><input type='radio' name='format' value='csv'>CSV,</label><label><input type='radio' name='format' value='csv;'>CSV;</label><label><input type='radio' name='format' value='tsv'>TSV</label>
<tr><th>Base de datos<td><select name='db_style'><option selected><option>USE<option>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='routines' value='1' checked>Procedimientos</label><label><input type='checkbox' name='events' value='1' checked>Eventos</label><tr><th>Tablas<td><select name='table_style'><option><option selected>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='auto_increment' value='1'>Incremento automático</label><label><input type='checkbox' name='triggers' value='1' checked>Disparadores</label><tr><th>Datos<td><select name='data_style'><option><option>TRUNCATE+INSERT<option selected>INSERT<option>INSERT+UPDATE</select></table>
<p><input type="submit" value="Exportar">
<input type="hidden" name="token" value="52322:844349">

<table cellspacing="0">
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">qsl('table').onclick = dumpClick;</script>
<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables' checked>Tablas</label><script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">qs('#check-tables').onclick = partial(formCheck, /^tables\[/);</script><th style='text-align: right;'><label class='block'>Datos<input type='checkbox' id='check-data' checked></label><script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">qs('#check-data').onclick = partial(formCheck, /^data\[/);</script></thead>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_commentmeta' checked>wp_commentmeta</label><td align='right'><label class='block'><span id='Rows-wp_commentmeta'></span><input type='checkbox' name='data[]' value='wp_commentmeta' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_comments' checked>wp_comments</label><td align='right'><label class='block'><span id='Rows-wp_comments'></span><input type='checkbox' name='data[]' value='wp_comments' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_links' checked>wp_links</label><td align='right'><label class='block'><span id='Rows-wp_links'></span><input type='checkbox' name='data[]' value='wp_links' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_options' checked>wp_options</label><td align='right'><label class='block'><span id='Rows-wp_options'></span><input type='checkbox' name='data[]' value='wp_options' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_postmeta' checked>wp_postmeta</label><td align='right'><label class='block'><span id='Rows-wp_postmeta'></span><input type='checkbox' name='data[]' value='wp_postmeta' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_posts' checked>wp_posts</label><td align='right'><label class='block'><span id='Rows-wp_posts'></span><input type='checkbox' name='data[]' value='wp_posts' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_socios' checked>wp_socios</label><td align='right'><label class='block'><span id='Rows-wp_socios'></span><input type='checkbox' name='data[]' value='wp_socios' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_term_relationships' checked>wp_term_relationships</label><td align='right'><label class='block'><span id='Rows-wp_term_relationships'></span><input type='checkbox' name='data[]' value='wp_term_relationships' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_term_taxonomy' checked>wp_term_taxonomy</label><td align='right'><label class='block'><span id='Rows-wp_term_taxonomy'></span><input type='checkbox' name='data[]' value='wp_term_taxonomy' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_termmeta' checked>wp_termmeta</label><td align='right'><label class='block'><span id='Rows-wp_termmeta'></span><input type='checkbox' name='data[]' value='wp_termmeta' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_terms' checked>wp_terms</label><td align='right'><label class='block'><span id='Rows-wp_terms'></span><input type='checkbox' name='data[]' value='wp_terms' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_usermeta' checked>wp_usermeta</label><td align='right'><label class='block'><span id='Rows-wp_usermeta'></span><input type='checkbox' name='data[]' value='wp_usermeta' checked></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='wp_users' checked>wp_users</label><td align='right'><label class='block'><span id='Rows-wp_users'></span><input type='checkbox' name='data[]' value='wp_users' checked></label>
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">ajaxSetHtml('?username=root&db=local&script=db');</script>
</table>
</form>
<p><a href='?username=root&amp;db=local&amp;dump=wp%25'>wp</a></div>

<form action='' method='post'>
<div id='lang'>Idioma: <select name='lang'><option value="en">English<option value="ar">العربية<option value="bg">Български<option value="bn">বাংলা<option value="bs">Bosanski<option value="ca">Català<option value="cs">Čeština<option value="da">Dansk<option value="de">Deutsch<option value="el">Ελληνικά<option value="es" selected>Español<option value="et">Eesti<option value="fa">فارسی<option value="fi">Suomi<option value="fr">Français<option value="gl">Galego<option value="he">עברית<option value="hu">Magyar<option value="id">Bahasa Indonesia<option value="it">Italiano<option value="ja">日本語<option value="ka">ქართული<option value="ko">한국어<option value="lt">Lietuvių<option value="ms">Bahasa Melayu<option value="nl">Nederlands<option value="no">Norsk<option value="pl">Polski<option value="pt">Português<option value="pt-br">Português (Brazil)<option value="ro">Limba Română<option value="ru">Русский<option value="sk">Slovenčina<option value="sl">Slovenski<option value="sr">Српски<option value="ta">த‌மிழ்<option value="th">ภาษาไทย<option value="tr">Türkçe<option value="uk">Українська<option value="vi">Tiếng Việt<option value="zh">简体中文<option value="zh-tw">繁體中文</select><script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">qsl('select').onchange = function () { this.form.submit(); };</script> <input type='submit' value='Usar' class='hidden'>
<input type='hidden' name='token' value='170218:964277'>
</div>
</form>
<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Cerrar sesión" id="logout">
<input type="hidden" name="token" value="52322:844349">
</p>
</form>
<div id="menu">
<h1>
<a href='https://www.adminer.org/' target="_blank" rel="noreferrer noopener" id='h1'>Adminer</a> <span class="version">4.7.3</span>
<a href="https://www.adminer.org/#download" target="_blank" rel="noreferrer noopener" id="version">4.7.5</a>
</h1>
<script src='?file=jush.js&amp;version=4.7.3' nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI="></script>
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">
var jushLinks = { sql: [ '?username=root&db=local&table=$&', /\b(wp_commentmeta|wp_comments|wp_links|wp_options|wp_postmeta|wp_posts|wp_socios|wp_term_relationships|wp_term_taxonomy|wp_termmeta|wp_terms|wp_usermeta|wp_users)\b/g ] };
jushLinks.bac = jushLinks.sql;
jushLinks.bra = jushLinks.sql;
jushLinks.sqlite_quo = jushLinks.sql;
jushLinks.mssql_bra = jushLinks.sql;
bodyLoad('8.0');
</script>
<form action="">
<p id="dbs">
<input type="hidden" name="username" value="root"><span title='base de datos'>DB</span>: <select name='db'><option value=""><option>information_schema<option selected>local<option>mysql<option>performance_schema<option>sys</select><script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});</script>
<input type='submit' value='Usar' class='hidden'>
<input type='hidden' name='dump' value=''></p></form>
<p class='links'><a href='?username=root&amp;db=local&amp;sql='>Comando SQL</a>
<a href='?username=root&amp;db=local&amp;import='>Importar</a>
<a href='?username=root&amp;db=local&amp;dump=' id='dump' class='active '>Exportar</a>
<a href="?username=root&amp;db=local&amp;create=">Crear tabla</a>
<ul id='tables'><script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});</script>
<li><a href="?username=root&amp;db=local&amp;select=wp_commentmeta" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_commentmeta" class='structure' title='Mostrar estructura'>wp_commentmeta</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_comments" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_comments" class='structure' title='Mostrar estructura'>wp_comments</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_links" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_links" class='structure' title='Mostrar estructura'>wp_links</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_options" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_options" class='structure' title='Mostrar estructura'>wp_options</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_postmeta" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_postmeta" class='structure' title='Mostrar estructura'>wp_postmeta</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_posts" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_posts" class='structure' title='Mostrar estructura'>wp_posts</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_socios" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_socios" class='structure' title='Mostrar estructura'>wp_socios</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_term_relationships" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_term_relationships" class='structure' title='Mostrar estructura'>wp_term_relationships</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_term_taxonomy" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_term_taxonomy" class='structure' title='Mostrar estructura'>wp_term_taxonomy</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_termmeta" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_termmeta" class='structure' title='Mostrar estructura'>wp_termmeta</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_terms" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_terms" class='structure' title='Mostrar estructura'>wp_terms</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_usermeta" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_usermeta" class='structure' title='Mostrar estructura'>wp_usermeta</a>
<li><a href="?username=root&amp;db=local&amp;select=wp_users" class='select'>registros</a> <a href="?username=root&amp;db=local&amp;table=wp_users" class='structure' title='Mostrar estructura'>wp_users</a>
</ul>
</div>
<script nonce="NWIxZDQ0MGQyOWQxYzhiYjliYjEwMDcyYWRlMTMzNGI=">setupSubmitHighlight(document);</script>
