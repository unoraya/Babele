

 

<?php
//Incluir la librería lastRSS
include "lastRSS.php";

//Creamos el objeto lastRSS
$rss = new lastRSS;

//Cambio variables de configuración del objeto lastRSS
//Evito cache
$rss->cache_dir = '';
$rss->cache_time = 0;
//Juego de caracteres por defecto a ISO-8859-1 (si no, sería UTF-8)
$rss->cp = 'ISO-8859-1';
//Cambio el formato de fechas a español
$rss->date_format = 'd/m/Y';

//URL del RSS a recibir
$rssurl = "http://www.facebook.com/feeds/notifications.php?id=411873788829022&viewer=1030247826&key=AWjA-NmiqMydtY6f&format=rss20";

if ($rs = $rss->get($rssurl)) {
echo '<pre>';
for ($i=0;$i<count($rs);$i++){
	 for($io=0;$i<count($rs["items"]);$i++){
	 	echo str_replace("]]>","",$rs["items"][$i]["description"]);
	 	echo "<br/>";
	 }
}
echo '</pre>';
}
else {
echo "Error: no se puede recibir $rssurl...";
}

$rssurl = "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=babeleco";

if ($rs = $rss->get($rssurl)) {
echo '<pre>';
for ($i=0;$i<count($rs);$i++){
	 for($io=0;$i<count($rs["items"]);$i++){
	 	echo str_replace("Babeleco: ","",$rs["items"][$i]["description"]);
	 	echo "<br/>";
	 }
}
echo '</pre>';
}
else {
echo "Error: no se puede recibir $rssurl...";
}

?> 