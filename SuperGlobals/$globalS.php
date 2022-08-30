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
/*$GLOBALS : her yerden ulaşılabilinmesi için kullanılır*/

/* Localden Global alana cağırma */
function localToGlobal(){
    $GLOBALS["isimSoyisim"] = "Seval Şentürk";
}
LocalToGlobal();
//aşağıdaki gösterimlerde her iki şekilde de kullanılır.
echo  $GLOBALS["isimSoyisim"]."<br>".$isimSoyisim;


/* Globalden Local alana cağırma */

$isim1="Sevgi Şentürk";
/*veya*/
$GLOBALS["isim2"]="Okan Şentürk";

function globalToLocal(){
echo "<br>".$GLOBALS["isim1"]."<br>".$GLOBALS["isim2"];


}
globalToLocal();

?>



</body>
</html>
