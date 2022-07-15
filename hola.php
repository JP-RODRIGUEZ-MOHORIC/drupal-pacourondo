<?php
$memory = ini_get('memory_limit') . PHP_EOL;
echo "$memory";

$ext = extension_loaded('bcmath');
echo "$ext";

?>
<h1>Aguante el Porve</h1>
<?php phpinfo(); ?>
