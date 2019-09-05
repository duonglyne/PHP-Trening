<!DOCTYPE html>
<html>
<body>

<?php
echo str_replace("world","","Hello world!");
echo "<br>";
echo "script name".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "request uri".$_SERVER['REQUEST_URI'];
if ("duonglyne" == "ly")
{
    echo "so sanh == thi không cần bằng luôn mà chỉ cần có trong đó thôi";
}
echo "<br>";
$url = "/PHP-Trening/PHP-MVC/mvc/";
$explode_url = explode('/', $url);

print_r($explode_url);

echo "<br>";
$explode_url = array_slice($explode_url, 2);

?>



</body>
</html>