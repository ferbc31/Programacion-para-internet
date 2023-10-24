<?php
$file_name = $_FILES['archivo']['name'];
$file_tmp =  $_FILES['archivo']['tmp_name'];
$arreglo = explode(".",$file_name);
$len = count($arreglo);
$pos = $len-1;
$ext = $arreglo[$pos];
$dir ="archivos/";
$file_enc = md5_file($file_tmp);
 
echo "file_name: $file_name <br>";
echo "file_tmp: $file_tmp <br>";
echo "ext: $ext <br>";
echo "file_enc: $file_enc <br>";

if ($file_name !=''){
    $fileName1 = "$file_enc.$ext";
    copy($file_tmp, $dir.$fileName1);
}
?>