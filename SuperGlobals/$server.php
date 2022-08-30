<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
/*Çalışmakta olan dosyanın url yol tanımlama bilgisi değerini döndürür. Başka bir deyişle çalıştığın sayfayı döndürür. */
echo '$_SERVER["PHP_SELF"]  =>' .$_SERVER["PHP_SELF"] ;

/*PHP Dosyasının çalıştığı server'ın CGI sürüm bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["GATEWAY_INTERFACE"]  =>' .$_SERVER["GATEWAY_INTERFACE"] ;

/*PHP Dosyasının çalıştığı server'ın IP bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["SERVER_ADDR"]  =>' .$_SERVER["SERVER_ADDR"] ;

/*PHP Dosyasının çalıştığı server'ın isim bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["SERVER_NAME"]  =>' .$_SERVER["SERVER_NAME"] ;

/*PHP Dosyasının çalıştığı server'ın yazılım bilgisi değerlerini döndürür.*/
echo "<br><br>".'$_SERVER["SERVER_SOFTWARE"]  =>' .$_SERVER["SERVER_SOFTWARE"] ;

/*PHP Dosyasının işlem yapıldığı protokolün isim ve sürüm bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["SERVER_PROTOCOL"]  =>' .$_SERVER["SERVER_PROTOCOL"] ;

/*PHP Dosyasına erişim için kullanılan istek yöntemi bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["REQUEST_METHOD"]  =>' .$_SERVER["REQUEST_METHOD"] ;

/*PHP Dosyasına erişim için başlatılan isteğin başlangıç zaman damgası bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["REQUEST_TIME"]  =>' .$_SERVER["REQUEST_TIME"] ;

/*PHP Dosyasına erişim için başlatılan isteğin mikro saniye değeri de dahil olmak üzere başlangıç zaman damgası bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["REQUEST_TIME_FLOAT"]  =>' .$_SERVER["REQUEST_TIME_FLOAT"] ;

/*PHP Dosyasına erişim esnasında kullanılan query (sorgu) dizesi bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["QUERY_STRING"]  =>' .$_SERVER["QUERY_STRING"] ;

/*Erişilen geçerli PHP dosyasının çalıştığı root*/
echo "<br><br>".'$_SERVER["DOCUMENT_ROOT"]  =>' .$_SERVER["DOCUMENT_ROOT"] ;

/*PHP Dosyasına erişim isteği için kabul edilen başlık içeriği bilgisi değerini döndürür.*/
echo "<br><br>".'$_SERVER["HTTP_ACCEPT"]  =>' .$_SERVER["HTTP_ACCEPT"] ;

/*PHP dosyasına erişim isteği için kabul edilen kodlama başlık içeriği bilgisi değerini döndürür. */
echo "<br><br>".'$_SERVER["HTTP_ACCEPT_ENCODING"]  =>' .$_SERVER["HTTP_ACCEPT_ENCODING"] ;

/*PHP dosyasına erişim isteği için kabul edilen lisan başlık içeriği bilgisi değerini döndürür.*/
echo "<br><br>".'$_SERVER["HTTP_ACCEPT_LANGUAGE"]  =>' .$_SERVER["HTTP_ACCEPT_LANGUAGE"] ;

/*PHP dosyasına erişim isteği için kabul edilen bağlantı başlık içeriği bilgisi değerini döndürür.*/
echo "<br><br>".'$_SERVER["HTTP_CONNECTION"]  =>' .$_SERVER["HTTP_CONNECTION"] ;

/*Domain bilgisini döndürür.*/
echo "<br><br>".'$_SERVER["HTTP_HOST"]  =>' .$_SERVER["HTTP_HOST"] ;

/*Kullanıcının browser'ını geçerli PHP dosyasına gönderen sayfanın URL bilgisi değerini döndürür. Bazen değer elde edilemeyebilir.Kullanıcının yönlenmesini sağlayan referans site.*/
echo "<br><br>".'$_SERVER["HTTP_REFERER"]  =>' .$_SERVER["HTTP_REFERER"] ;

/*Kullanıcı browser bilgisini alabiliriz.*/
echo "<br><br>".'$_SERVER["HTTP_USER_AGENT"]  =>' .$_SERVER["HTTP_USER_AGENT"] ;

/*HTTPS protokolünün durumu hakkında bilgi verir.*/
echo "<br><br>".'$_SERVER["HTTPS"]  =>' .$_SERVER["HTTPS"] ;

/*Kullanıcının IP adresinin alınmasını sağlar.*/
echo "<br><br>".'$_SERVER["REMOTE_ADDR"]  =>' .$_SERVER["REMOTE_ADDR"] ;

/*Çalışmakta olan PHP dosyasını görüntüleyen kişinin host bilgisini gösterir.*/
echo "<br><br>".'$_SERVER["REMOTE_HOST"]  =>' .$_SERVER["REMOTE_HOST"] ;

/*Sunucu ile kendi cihazımız üzerinden hangi portla bağlanıyoruz, onu gösterir.*/
echo "<br><br>".'$_SERVER["REMOTE_PORT"]  =>' .$_SERVER["REMOTE_PORT"] ;

/*Çalışmakta olan PHP dosyasının server üzerinde bulunan yol tanımlama bilgisini verir. Kök dizin ve dosya yolunu beraber verir...*/
echo "<br><br>".'$_SERVER["SCRIPT_FILENAME"]  =>' .$_SERVER["SCRIPT_FILENAME"] ;

/*PHP dosyasını çalıştığı server'ın yönetici email adresini döndürür. */
echo "<br><br>".'$_SERVER["SERVER_ADMIN"]  =>' .$_SERVER["SERVER_ADMIN"] ;

/*PHP dosyasını çalıştığı server'ın iletişim amacı ile kullanılan server port bilgisini verir.*/
echo "<br><br>".'$_SERVER["SERVER_PORT"]  =>' .$_SERVER["SERVER_PORT"] ;

/*PHP dosyasını çalıştığı sunucu ile ilgili tüm bilgileri verir.*/
echo "<br><br>".'$_SERVER["SERVER_SIGNATURE"]  =>' .$_SERVER["SERVER_SIGNATURE"] ;

/*Çalışmakta olan PHP dosyasının server üzerinde bulunduğu yol tanımını verir.*/
echo "<br><br>".'$_SERVER["SCRIPT_NAME"]  =>' .$_SERVER["SCRIPT_NAME"] ;

/*ÇAlışmakta olan PHP dosyasının URI yol tanımlama bılgısı değerini döndürür.
Web sitesinin alan adını ve PHP dosya adını içermez.*/
echo "<br><br>".'$_SERVER["REQUEST_URI"]  =>' .$_SERVER["REQUEST_URI"]."<br>" ;

echo "**********************************************************************";
/*Bir sunucuda kullanılan tüm süper globalleri almak için */

echo "<pre>";
"<br><br>".print_r($_SERVER);
echo "</pre>";
?>



</body>
</html>
