<?php
require_once 'Utilities.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./default.css"/>
<?php Utilities::GetJQuery(); ?>
</head>
<body>
<?php
Utilities::RunPage('editor');
?>
</body>
</html>