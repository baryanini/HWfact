<?php
$str = fopen('111.txt','r');
$str2 = fread($str,1);
while ($str2 != null){
if ($str2 == 'l')
echo 'L';
else
echo $str2.'<br>';
$srt2 = fread($str,1);
}
?>